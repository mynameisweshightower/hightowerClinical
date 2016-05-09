<?php
	require('header.php');
?>

    <section class="page-header">
      <h1 class="project-name">Contact</h1>
      <h2 class="project-tagline">Hightower Clinical, LLC</h2>
    </section>

    <section class="main-content">
      <h3>
		</h3>
		<p>Please feel free to contact us at any time with questions or comments.</p>
		<p>For more information, please contact <a href="mailto:brad@hightowerclinical.com">Brad Hightower</a>.
		<?php
		if (isset($_REQUEST['email']) == true)
		{
			echo "<script>ga('send', 'pageview', '/forms/contactThanks');</script>";
			echo "<p>Thank you for your input!</p>";
			$to = "brad@hightowerclinical.com";
			$subject = "Comment from hightowerclinical.com";
			$message = $_REQUEST['message'];
			$name = $_REQUEST['name'];
			$email = $_REQUEST['email'];
			//$headers = "From: $from";
			mail($to,"Subject: " . $subject,"From:\t\t" . $email . "\nName:\t\t" . $name . "\nComment:\t" . $message);

			mail($email,"Subject: Thanks for your input!","Thank you for taking the time to visit. We will review your submission and respond as soon as we can. \n\t-Brad Hightower");
		}
		else
		{
		//$_SESSION['USERNAME'] = "yes";
		echo '<form id="contact" method="POST" action="contact.php">
			<div id="nameLabel" class="formLabel">
				Name
			</div>
			
			<div id="nameInput" class="formDiv">
				<input type="text" class="formInput" name="name" required />
			</div>
			
			<div id="emailLabel" class="formLabel">
				E-Mail
			</div>
			
			<div id="emailInput" class="formDiv">
				<input type="email" class="formInput" name="email" required />
			</div>
			
			<div id="messageLabel" class="formLabel">
				Message
			</div>
			
			<div id="messageInput" class="formDiv">
				<textarea id="messageBox" class="formInput" name="message"></textarea>
			</div>
			
			<div class="formDiv">
				<input type="submit" value="Send" id="submitButton"/>
			</div>
		</form>';
		}
		?>
	</section>
<?php
	require('footer.php');
?>