<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <title>Hightower Clinical - Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#A2AFBF">
    <link rel="stylesheet" type="text/css" href="stylesheets/normalize.css" media="screen">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" media="screen">
  </head>
  <body>
	<section class="navigation">
		<div class="logo">
			<a href="index.html">
				<img src="images/hightowerClinLogoVer1.png">
			</a>
		</div><!-- /logo -->
		<nav class="navlist">
			<a href="about.html">About</a>
			<a href="services.html">Services</a>
			<a href="contact.php">Contact</a>
		</nav> <!-- /navlist -->
	</section> <!-- /navigation -->
    <section class="page-header">
      <h1 class="project-name">Contact</h1>
      <h2 class="project-tagline">Hightower Clinical, LLC</h2>
    </section>

    <section class="main-content">
      <h3>
		</h3>
		<p>Welcome to the home of Hightower Clinical. Things are a bit sparse here now, but check back regularly for updates.</p>
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
	<section class="site-footer">
		<div class="site-footer-wrapper">
			<div class="site-footer-owner">&copy; 2016 Hightower Clinical</div>

			<div class="site-footer-credits">Developed by <a href="http://kiopah.com" target="_blank">Wes Hightower</a></div>
		</div> <!-- /.site-footer-wrapper -->
	</section><!-- /.footer -->
  
  <script src="/scripts/ga.js"></script>
  </body>
</html>