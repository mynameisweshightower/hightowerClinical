  //Google Analytics Tracking Code START
/*	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-75012300-1', 'auto');
		ga('require', 'displayfeatures');
		ga('require', 'linkid', 'linkid.js');
		ga('send', 'pageview');

		/* Event Tracking */
		
/*		jQuery(document).ready(function(){
		jQuery("a[href^='mailto:']").click(function(){
			if (ga) {
				var mAddress = jQuery(this).attr('href').replace('mailto:', '');
				ga('send', 'event', 'MailTo', 'click', mAddress);
			}
		});
		jQuery("a[href*='.doc'],a[href*='.docx'],a[href*='.dwg'],a[href*='.cad'],a[href*='.pdf'],a[href*='.xls'],a[href*='.xlsx'],a[href*='.ppt'],a[href*='.pptx'],a[href*='.zip'],a[href*='.txt'],a[href*='.vsd'],a[href*='.vxd'],a[href*='.js'],a[href*='.css'],a[href*='.rar'],a[href*='.exe'],a[href*='.wma'],a[href*='.mov'],a[href*='.avi'],a[href*='.wmv'],a[href*='.mp3']").click(function(e){
			if (ga) {            
				ga('send', 'event', 'Download', 'click', jQuery(this).attr('href'));
			}
		});    
		jQuery("a[href*='http']:not([href*='" + window.location.hostname + "'])").click(function(e){
			if (ga) {
				//The following block added 2-21-11
				var activeURL = window.location.href;
				if (jQuery(this).attr('rel') == 'print') {
					ga('send', 'event', 'Print', 'click', activeURL);
					return;
				}
				
				var socialSites = new Array(  //Array of Social Media Sites (Social Event)
					"linkedin.com",
					"www.linkedin.com",
					"twitter.com",
					"www.twitter.com",
					"facebook.com",
					"www.facebook.com",
					"www.google.com/bookmarks",
					"google.com/bookmarks",
					"youtube.com",
					"www.youtube.com"
				);
			
				var excludedSites = new Array(
					"uretekicr.com"  //Array of Cross Domain Sites (Excluded from Outbound Event)
				);

				var linkHost = this.hostname;
			   
				if(jQuery.inArray(linkHost, excludedSites) == -1){
					if(jQuery.inArray(linkHost, socialSites) >= 0){
						ga('send', 'event', 'Social', 'click', jQuery(this).attr('href'));
					} else {
						ga('send', 'event', 'Outbound', 'click', jQuery(this).attr('href'));
					}
				   
				} else {
					//alert("not tracked");
				}
			}
		});
	});
//Google Analytics Tracking Code END */