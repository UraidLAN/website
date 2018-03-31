<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>UraidLAN</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">  
	<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/start/jquery-ui.css" rel="stylesheet" />   
	
   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	
   <!-- Calander
   ================================================== -->
   <!--
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	
	<link href='fullcalendar/fullcalendar.min.css' rel='stylesheet' />
	<link href='fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
	<script src='fullcalendar/lib/moment.min.js'></script>
	<script src='fullcalendar/lib/jquery.min.js'></script>
	<script src='fullcalendar/fullcalendar.min.js'></script>
	<script src='fullcalendar/gcal.min.js'></script>
	
	<script type='text/javascript'>

	$(document).ready(function() {
		$('#calendar').fullCalendar({
			googleCalendarApiKey: 'AIzaSyCfdXAGUj6XOlIxLGyRAmFSJwhVJsZoZec',
			events: {
				googleCalendarId: 'qnpi0dmau53fmq2m18rv4pr6e8@group.calendar.google.com'
			}
		});
	});

	</script>
	-->
   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

	<div id="preloader">
		<div id="logouraidlan">
	<object type="image/svg+xml" data="images/logo.svg"></object>	
		</div>
      <div id="status">
         <img src="images/loading.gif" height="128" width="128" alt="">
      </div>
   </div>
   <div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

   <!-- Intro Section
   ================================================== -->
   <section id="intro">

   	<header class="row">	 

			<div id="logo">
					<!--	<a href="#" >UraidLAN
					<img src="images/logo.png" alt="UraidLAN" style=max-width:60%;>  -->
					<object type="image/svg+xml" data="images/logo.svg">
					Your browser does not support SVG
					</object>				
			</div>

		   <nav id="nav-wrap">

		      <a class="menu-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
			   <a class="menu-btn" href="#" title="Hide navigation">Hide navigation</a>

		      <ul id="nav" class="nav">
		        <li><a class="smoothscroll" href="#styles">About</a></li>
		        <li><a class="smoothscroll" href="#discord">Discord</a></li>
				<li><a class="smoothscroll" href="#facebook">Facebook</a></li>
				<li><a class="smoothscroll" href="#location">Location</a></li>
				<li><a class="smoothscroll" href="#map">Map</a></li>				
		      </ul> <!-- end #nav -->

		   </nav> <!-- end #nav-wrap --> 	        

   	</header> <!-- Header End -->   	

   	<div  id="main" class="row">

	   	<div class="twelve columns">
	   			

			
			<?php

			  include("geoiploc.php"); // Must include this

			  // ip must be of the form "192.168.1.100"
			  // you may load this from a database
			  $ip = $_SERVER["REMOTE_ADDR"];
			  
				
				if (0 === strpos($ip, '172.26')) {
				// It starts with '172.26'
				echo '
				<div>
					<a href="http://plex/"><img border="0" alt="plex" src="images/plex.jpg" width="64" height="64"></a>
					<a href="http://sage/"><img border="0" alt="plex" src="images/sage.ico" width="64" height="64"></a>
					<a href="ftp://tank"><img border="0" alt="plex" src="images/nas.png" width="64" height="64"></a>
				</div>
				<div id="local">
					<iframe src="https://gateway.uraidlan.net:8003/index.php?zone=portal" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
				</div>';
				
				} else {
					echo '
						<h1>Monthly 48hr LAN and time hacking convention!</h1>

						<h5>Next Event</h5>
						<span id="dateEvent" class="cf"></span>		
						
						
						<h5>Time Left Until Next UraidLAN</h5>
						<!---<h1>NOW! Why arnt you here?</h1> 	-->
						
						<div id="counter" class="cf">
							<span>N<em>days</em></span> 
								<span>O<em>hours</em></span>
								<span>W<em>minutes</em></span>
								<span>!<em>seconds</em></span> 
						</div>		
						-->
					';
				}
			?>
			
			<!--
   			
	         <div id="mc_embed_signup">
	            <form action="http://facebook.us8.list-manage.com/subscribe/post?u=cdb7b577e41181934ed6a6a44&amp;id=e65110b38d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	                  
	               <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
	               
	               
	               <div style="position: absolute; left: -5000px;"><input type="text" name="b_cdb7b577e41181934ed6a6a44_e65110b38d" value=""></div>
	               
	               <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
	               
	          	</form>
	         </div>
			-->
	         <ul class="social">
	            <!--
				<li><a href="https://www.facebook.com/UraidLAN/"><i class="fa fa-facebook"></i></a></li>
	            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
	            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
	            <li><a href="#"><i class="fa fa-skype"></i></a></li>
				--->
            </ul>

         </div> 
				
      </div> <!-- main end -->    	

	</section> <!-- end intro section -->

	
  <!-- Style Guide Section
   ================================================== -->
   <section id="styles" style="padding: 90px 0 72px; background: #fff;">
   
		<div class="row section-head add-bottom">

			<div class="twelve columns">
   						
					<h1>UraidLAN is a place to...</h1>
						<ul class="disc">
							<li class="lead">regular social event run every 4 weeks since 2008</li>
							<li class="lead">come together and chill out, meet new friends and catch up with old ones</li>
							<li class="lead">work on projects, whether building a new PC or exploring new innovative hardware</li>
							<li class="lead">time hacking experience</li>
						</ul>
   			</div>                 

		</div> <!-- Row End-->
		


		<div class="row add-bottom">
		
		<hr>

			<div class="twelve columns">

				<h2>WHEN DOES THE EVENT START AND FINISH?</h2>

				<p class="lead">
					UraidLAN starts on Friday at 7:00 PM and run until 7:00 PM on the Sunday. As a 48hr event you're not expected to stay through the whole event, most people pop in for a day at a time and float out.
				</p>

			</div>                 

		</div> <!-- Row End-->
		
		<div class="row">
		
		<hr>
	  
			<div class="four columns add-bottom">
				
				<h3>WHAT DO I NEED TO BRING?</h3>
				
				<ul class="disc">
				
					<li>5m or longer Cat5e or Cat6 network cable.</li>
					<li>Computer, laptop or Console</li>
					<li>Monitor</li>
					<li>Power board (surge protected is recommended)</li>
					<li>Power cables for your computer and monitor</li>
					<li>VGA, DVI or HDMI cable</li>
					<li>Keyboard and mouse</li>
					<li>Headphones (Speakers are not permitted in the main PC area)</li>
					
				</ul>
				
			</div>
			
			<div class="four columns add-bottom">
					
				<h3>The following are also advised for all lannees;</h3>
					
				<ul class="disc">
				
					<li>Weather appropriate clothing (it can get hot in summer and cold in winter in the hall)</li>
					<li>Sleeping gear</li>
					<li>A computer/office chair if you wish
					<li>Toiletries (remember to bring deodorant!)</li>
					<li>Cash for entry fee:</li>
					<li><b>$20 for Internet and Power access</b></li>
					<li><b>$10 if you want main meals provided</b> (breakfast, lunch, dinner)</li>
					<li><b>$1 Spectator Donation</b></li>
					
				</ul>
				
			</div>
			
			<div class="four columns add-bottom">
									
				<h3>What else do I need to do before arriving?</h3>
								
				<ul class="disc">
				
					<li>Make sure to set Windows to automatically update!</li>
					<li>All your games are updated, Steam, Origin, Blizzard and the likes...</li>
					<li>An anti-virus program.</li>
					
				</ul>
				
				<h5>Make sure you...</h5>
				<p class="align-center remove-bottom">
					
					<a href="#"><img width="200" height="150" alt="updateallthings" src="images/updateallthings.jpg"></a>
					<h5 class="text-right">...before attending!</h5>	
				</p>
					
			</div>	
			
			
			
		</div> <!-- Row End-->
		
		<div class="row">
			<hr>
			<div class="twelve columns add-bottom">
				<h5>For liability purposes we insist on MA15+ - sorry kids; and we have the usual host of rules otherwise it's a damn good time, see you all there!</h5>
			</div>
		</div> <!-- Row End-->
		<section id="feed">
		<br>
		<div class="row">
					
				<div class="six columns align-center">
					<div id="discord">
					<iframe src="https://discordapp.com/widget?id=288536418853060618&theme=dark" height="700" allowtransparency="true" frameborder="0"></iframe>
					</div>
				</div>
				 				 
				<div class="six columns align-center">
				
					<div id="facebook">
					<div class="fb-page" data-href="https://www.facebook.com/UraidLAN/" data-tabs="timeline" data-height="700" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"></div>
					</div>
					
				</div> 
				 
		</div> <!-- Row End-->
		<br>
		<div class="row">
			<hr>
			<div class="twelve columns add-bottom">
				<div id="calendar"></div>
				<div id="gcal">
				<iframe src="https://calendar.google.com/calendar/embed?title=UraidLAN&amp;showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23cc66cc&amp;src=qnpi0dmau53fmq2m18rv4pr6e8%40group.calendar.google.com&amp;color=%231B887A&amp;ctz=Australia%2FAdelaide" style="border-width:0" width="800" height="400" frameborder="0" scrolling="no"></iframe>
				</div>
				
		</div> <!-- Row End-->
		</section>
			
			<div class="row">

				 
								
				 <div class="six columns">
				 <br>
					<h3>NBN Enabled!</h3>
					<br>

					<p class="align-center">
					
						<a href="#"><img width="205" height="113" alt="nbn-image" src="images/NBN_Masterbrand_Australia_Descriptor_NOTAGLINE_Landscape_CMYK-1024x565.jpg"></a>
						
					</p>
					
					<p>UraidLAN has a NBN FTTN connection and is connected with a 100/40 Mbps plan, which means downloading and playing online games a lot faster with less ping and less lag!</p>
					   
				</div>
				
				<div class="six columns">
				<br>
					<h3>Gamer Plan!</h3>

					<p class="align-center">
					
						<a href="https://myrepublic.net/au/personal-2/nbn/gamers/"><img width="200" height="130" alt="myrepublic" src="images/mr_gamer_purple.jpg"></a>
					
					</p>
					<aside class="pull-quote">
						<blockquote>
							<h5 style="color: #672C88; text-align: center;">The first nbn™ powered Gamer plan</h5>
						</blockquote>
					</aside>
					
					<p>MyRepublic Gamer plans are optimised for reduced latency and Gamer traffic is prioritised. So even during peak periods, you have the best chance of making the critical click. Game on.</p>
							
				</div>
				
			</div>

   </section> <!-- Style Guide Section End-->	
	
			
<!-- Location Section
   ================================================== -->
	<section id="location">

		<div class="contacts">		
			
			<div class="row contact-details">		           		         

			   <div class="columns">

				   <h3><i class="fa fa-home"></i>Address.</h3>
				   <a href="https://www.google.com/maps/dir//1221+Greenhill+Rd,+Uraidla+SA,+Australia/@-34.9589058,138.7442228,17z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x6ab734ecdbd2e4e9:0x60f7b278dc44e290!2m2!1d138.7464115!2d-34.9589102">
				   <p>1221 Greenhill Rd, Uraidla SA 5142, Australia
					</p></a>

			   </div> 
			<!--
			   <div class="columns">

				   <h3><i class="fa fa-phone"></i>Phone Numbers.</h3>
				   <p>Phone:<br>
				   	Mobile:<br>
				   	Fax:
				   </p>

			   </div>	 

			   <div class="columns end">

				   <h3><i class="fa fa-envelope"></i>Emails.</h3>
				   <p><br>
				   	<br>
				   	
				   </p>

			   </div>          	
			-->
		 	</div> <!-- end contact-details -->		  

		</div> <!-- end contacts -->
<?php
	if (0 === strpos($ip, '172.26')) {
	// It starts with '172.26'
	echo '
	';
	} else {
		echo '
	   <div id="map">

	   	 <p class="map-error">Something went wrong... Unable to load map... Please try to enable javascript</p>   

	   </div> <!-- end map -->
		';
	}
?>
	</section> <!-- end location section -->

   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">            

            <ul class="copyright">
               <li>&copy; Copyright 2017 UraidLAN</li>
               <li>Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a></li>          
            </ul>

         </div>          

      </div>

      <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#intro"><i class="icon-up-open"></i></a></div>

   </footer> <!-- Footer End-->   

   <!-- Java Script
   ================================================== -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

	<script src="https://maps-api-ssl.google.com/maps/api/js?key=AIzaSyDA7G0nWEuNWtJ1GHJcPotdNO4tVCKUeHY&callback=initMap"" type="text/javascript"></script>
   <script src="js/gmaps.js"></script>
   <script src="js/waypoints.js"></script>   
   <script src="js/jquery.countdown.js"></script>
   <script src="js/jquery.placeholder.js"></script>
   <script src="js/backstretch.js"></script>  
   <script src="js/init.js"></script>
   <!-- <script src="js/gcal-events.min.js"></script> -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

</body>

</html>