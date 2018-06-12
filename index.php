<?php

if (isset($_POST['name']) && isset($_POST['email'])  && isset($_POST['message'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];
   
   if (!empty($name) && !empty($email) && !empty($message)) {
      
      $to = 'auginie@gmail.com';
      $subject = 'Contact form submitted';
      $body = $name."\n".$message;
      $headers = 'From: '.$email;
      
      if (mail($to, $subject, $body, $headers)) {
         echo 'Thanks for contacting me.';
      } else {
         echo 'Sorry, an error occurred. Please try again later.';
      }
      
   } else {
      echo 'All fields are required.';
   }
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Auginia G. - Digital Designer / Developer - Portfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
      <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
      <link rel="manifest" href="images/site.webmanifest">
      <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" color="#5bbad5">
      <link rel="shortcut icon" href="images/favicons/favicon.ico">
      <meta name="msapplication-TileColor" content="#603cba">
      <meta name="msapplication-config" content="images/browserconfig.xml">
      <meta name="theme-color" content="#ffffff">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Panel (Banner) -->
							<section class="panel banner right">
								<div class="content color0 span-3-75">
									<h1 class="major">Hello, my name<br>
									is Auginia</h1>
									<p>I am <strong>Digital Designer &amp; Web Developer</strong>, my focus is on eDM templates design &amp; coding and UI/UX. You are welcome to get a short overview of my works on this website. </p>
									<ul class="actions">
										<li><a href="#first" class="button special color1 circle icon fa-angle-right">Next</a></li>
									</ul>
								</div>
								<div class="image filtered span-1-75" data-position="25% 25%">
									<img src="images/auginia-photo.jpg" alt="Auginia Grakhouskaya" />
								</div>
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight medium right" id="first">
								<div class="content span-6-5">
									<h2 class="major">Background</h2>
									<p>My starting point as designer is the jewellery field, which I studied in St. Petersburgh and Milan, Italy. For many years I worked at jewellery production, but the task range during this time was quite wide: not only designing or drawing of jewellery items, but also 3D modelling and calculating cutting paths for CNC milling machine, graphic design, editorial design and prepress, web design and coding.</p>
								</div>
								<div class="image filtered tinted" data-position="top left">
									<img src="images/mountains.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color1 medium">
								<div class="intro joined span-6">
									<h2 class="major">Key strengths</h2>
										<ul class="alt">
											<li>Attention to details, accuracy</li>
											<li>Strong familiarity with Adobe Creative Suite</li>
											<li>A well-rounded knowledge of design principles and techniques</li>
											<li>Able to organize and self-direct execution of tasks/duties</li>
											<li>Intermediate HTML and CSS coding skills + Table layout for emails</li>
											<li>Sketch/Mac OS X platform experience</li>
										</ul>
								</div>
								<div class="inner">
									<ul class="grid-icons two connected">
										<li><span class="icon fa-diamond"></span></li>
										<li><span class="icon fa-camera-retro"></span></li>
										<li><span class="icon fa-pencil"></span></li>
										<li><span class="icon fa-calendar-check-o"></span></li>
										<li><span class="icon fa-code"></span></li>
										<li><span class="icon fa-apple"></span></li>
									</ul>
								</div>
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel">
								<div class="intro color2">
									<h2 class="major">Project Delivering Game</h2>
									<h3>UI / UX</h3>
									<p>This project was created during the short one-day hackathon. What this game is about? Try to complete an eCommerce project in time when all things go wrong (as always). <br>See the full description and shots on <a href="https://www.behance.net/gallery/66629957/ThinkWave-Hackathon-Project">Behance</a></p>
								</div>
							</section>
							<section class="panel spotlight large left">
                        <div class="content"></div>
								<div class="image filtered" data-position="top center">
									<img src="images/Project-Delivering-Game_Client-mood.gif" alt="" />
								</div>
							</section>
							
						<!-- Panel (Spotlight) -->
							<section class="panel">
								<div class="intro color4">
									<h2 class="major">Dev Conference &amp; Hackathon Visual Identity</h2>
									<h3>Graphic Design</h3>
									<p>Core tasks: to style the full range of branded items from notepads to winner T-shirtsthe for the 5th Annual Dev Conference and to design the logo for its special occasion, ThinkWave Hackathon. <br>See the full gallery on <a href="https://www.behance.net/gallery/66629957/ThinkWave-Hackathon-Project">Behance</a></p>
								</div>
							</section>
							<section class="panel spotlight large left">
                        <div class="content"></div>
								<div class="image" data-position="top center">
									<img src="images/eWave5thAnnualDevConference_BrandIdentity.png" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel">
								<div class="intro color0">
									<h2 class="major">EDM Campaigns Styling &amp; Coding</h2>
									<p>I have an experience in creating fully responsive cross-device optimised emails, and what is more - with interactivity like carousel, hover effects on buttons and images and even real cart where you can add products!</p>
								</div>
								<div class="gallery">
									<div class="group span-3">
										<a href="images/gallery/fulls/Nescafe_FrothyFavourites_WinnerAnnounced-v2.png" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/Nescafe_FrothyFavourites_WinnerAnnounced-v2.png" alt="" /></a>
										<a href="images/gallery/fulls/Nestle_BakersChoice_NewSite_EDM_v3.png" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/Nestle_BakersChoice_NewSite_EDM_v3.png" alt="" /></a>
										<a href="images/gallery/fulls/Nestle_BakersChoice_NewSite_EDM_v3-mobile.png" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/Nestle_BakersChoice_NewSite_EDM_v3-mobile.png" alt="" /></a>
									</div>
									<a href="images/gallery/fulls/Nestle_Milkybar_EDM_v5.png" class="image filtered span-2-5" data-position="top"><img src="images/gallery/thumbs/Nestle_Milkybar_EDM_v5.png" alt="" /></a>
									<div class="group span-4-5">
										<a href="images/gallery/fulls/Purina_SPCA_Adopt-a-versary-cat-grey.png" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/Purina_SPCA_Adopt-a-versary-cat-grey.png" alt="" /></a>
										<a href="images/gallery/fulls/Purina_SPCA_Adopt-a-versary-dog-mobile.png" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/Purina_SPCA_Adopt-a-versary-dog-mobile.png" alt="" /></a>
										<a href="images/gallery/fulls/Nestle_UncleTobys_Plus_PreLaunch_EDM_mobile.png" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/Nestle_UncleTobys_Plus_PreLaunch_EDM_mobile.png" alt="" /></a>
										<a href="images/gallery/fulls/Nestle_KitKat_ValentinesDay_EDM_v3.png" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/Nestle_KitKat_ValentinesDay_EDM_v3.png" alt="" /></a>
									</div>
									<a href="images/gallery/fulls/Canon_March_EDM_v3-james-fajardo.png" class="image filtered span-2-5" data-position="right"><img src="images/gallery/thumbs/Canon_March_EDM_v3-james-fajardo.png" alt="" /></a>
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color4-alt">
								<div class="intro color4">
									<h2 class="major">Contact</h2>
									<p>Feel free to contact me on work purpose using this form or any social network listed.</p>
								</div>
								<div class="inner columns divided">
									<div class="span-3-25">
										<form method="post" action="form.php">
											<div class="field half">
												<label for="name">Name</label>
												<input type="text" name="name" id="name" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="email" name="email" id="email" />
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea name="message" id="message" rows="4"></textarea>
											</div>
											<ul class="actions">
												<li><input type="submit" value="Send Message" class="button special" /></li>
											</ul>
										</form>
									</div>
									<div class="span-1-5">
										<ul class="contact-icons color1">
											<li class="icon fa-linkedin"><a href="https://www.linkedin.com/in/augine">linkedin.com/in/augine</a></li>
											<li class="icon fa-behance"><a href="https://www.behance.net/augine">be.net/augine</a></li>
											<li class="icon fa-dribbble"><a href="https://dribbble.com/augine">dribbble.com/augine</a></li>
											<li class="icon fa-instagram"><a href="https://www.instagram.com/augine">@augine</a></li>
											<li class="icon fa-facebook"><a href="https://www.facebook.com/augine">facebook.com/augine</a></li>
										</ul>
									</div>
								</div>
							</section>

						<!-- Copyright -->
							<div class="copyright">&copy; Auginia Grakhouskaya. Design: <a href="https://html5up.net">HTML5 UP</a>.</div>

					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>