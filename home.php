<?php 
	error_reporting(0);
	include 'assets/check.php';
	include 'assets/connect.php';
 ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:58:05 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/blue.css">

</head>
<body>

<!-- Wrapper -->
<div id="wrapper" class="wrapper-with-transparent-header">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">
<?php include 'menu.php'; ?>
</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Intro Banner
================================================== -->
<div class="intro-banner dark-overlay big-padding">
	
	<!-- Transparent Header Spacer -->
	<div class="transparent-header-spacer"></div>

	<div class="container">
		
		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline-alt">
					<h3>Don't Just Dream, Do</h3>
					<span>Find the best jobs in the digital industry</span>
				</div>
			</div>
		</div>
		
		<!-- Search Bar -->
		<div class="row">
			<div class="col-md-12">
				<div class="intro-banner-search-form margin-top-95">

					<!-- Search Field -->
					<div class="intro-search-field">
						<label for ="intro-keywords" class="field-title ripple-effect">On What Topic You Want A Guest Post</label>
						<input id="intro-keywords" type="text" placeholder="Post Topic, Catagory...">
					</div>

					<!-- Button -->
					<div class="intro-search-button">
						<button class="button ripple-effect" onclick="window.location.href='jobs-list-layout-1.html'">Search</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Stats -->
		<div class="row">
			<div class="col-md-12">
				<ul class="intro-stats margin-top-45 hide-under-992px">
					<li>
						<strong class="counter">1,586</strong>
						<span>Jobs Posted</span>
					</li>
					<li>
						<strong class="counter">3,543</strong>
						<span>Tasks Posted</span>
					</li>
					<li>
						<strong class="counter">1,232</strong>
						<span>Freelancers</span>
					</li>
				</ul>
			</div>
		</div>

	</div>
	
	<!-- Video Container -->
	<div class="video-container" data-background-image="images/home-video-background-poster.jpg">
		<video loop autoplay muted>
			<source src="images/home-video-background.mp4" type="video/mp4">
		</video>
	</div>

</div>

<!-- Content
================================================== -->
<!-- Features Jobs -->
<div class="section padding-top-65 padding-bottom-75">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				
				<!-- Section Headline -->
				<div class="section-headline margin-top-0 margin-bottom-35">
					<h3>Best Active User's</h3>
					<a href="user.php" class="headline-link">Browse All Jobs</a>
				</div>
				
				<!-- Jobs Container -->
				<div class="listings-container compact-list-layout margin-top-35">
			<?php 
			$sql = "SELECT * FROM user, user_info WHERE user.unique_id=user_info.uid ORDER BY RAND() LIMIT 6";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			    	if ($row['profile_pic'] == "") {
			    		$newimg = "images/download.jpg";
			    	}else{
			    		$newimg = "dashboard/img/".$row['profile_pic'];
			    	}
			    	if ($row['verify'] == "1") {
			    		$v = '<i class="icon-material-outline-business"></i> Verified <div class="verified-badge" title="Verified Employer" data-tippy-placement="top"></div>';
			    	}else{
			    		$v = '<i class="icon-material-outline-business"></i> Unverified';
			    	}

			    	
			        echo '<a href="user-profile.php?uid='.$row['uid'].'" class="job-listing  with-apply-button">

						<!-- Job Listing Details -->
						<div class="job-listing-details">

							<!-- Logo -->
							<div class="job-listing-company-logo">
								<img src="'.$newimg.'" alt="">
							</div>

							<!-- Details -->
							<div class="job-listing-description">
								<h3 class="job-listing-title">'.$row['name'].'</h3>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li>'.$v.'</li>
										<li><i class="icon-material-outline-location-on"></i>'.$row['natinality'].'</li>
										<li><i class="icon-material-outline-access-time"></i>'.$row['date_reg'].'</li>
									</ul>
								</div>
							</div>

							<!-- Apply Button -->
							<span class="list-apply-button ripple-effect pro" >Visit Profile</span>
						</div>
					</a>';
			    }
			} else {
			    echo "Sorry No Data Found";
			}

			 ?>
					<!-- Job Listing -->
					<!-- Job Listing -->
				</div>
				<!-- Jobs Container / End -->

			</div>
		</div>
	</div>
</div>
<!-- Featured Jobs / End -->


<!-- Photo Section -->
<div class="photo-section" data-background-image="images/section-background.jpg">

	<!-- Infobox -->
	<div class="text-content white-font">
		<div class="container">

			<div class="row">
				<div class="col-lg-6 col-md-8 col-sm-12">
					<h2>Hire experts or be hired. <br> For any job, any time.</h2>
					<p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation is on the runway towards.</p>
					<a href="#" class="button button-sliding-icon ripple-effect big margin-top-20">Get Started <i class="icon-material-outline-arrow-right-alt"></i></a>
				</div>
			</div>

		</div>
	</div>

	<!-- Infobox / End -->

</div>
<!-- Photo Section / End -->


<!-- Recent Blog Posts -->
<!-- Recent Blog Posts / End -->
<div class="section gray margin-top-45 padding-top-65 padding-bottom-75">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				
				<!-- Section Headline -->
				<div class="section-headline margin-top-0 margin-bottom-35">
					<h3>High Quality Websites For Guest-Post</h3>
					<a href="top_web.php" class="headline-link">Browse All Tasks</a>
				</div>
				
				<!-- Jobs Container -->
				<div class="tasks-list-container compact-list margin-top-35">
						
					<!-- Task -->
		<?php 
			$sql = "SELECT * FROM web_info ORDER BY RAND() LIMIT 6";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			    	if ($row['verify'] == "1") {
			    		$v = '<i class="icon-material-outline-business"></i> Verified <div class="verified-badge" title="Verified Employer" data-tippy-placement="top"></div>';
			    	}else{
			    		$v = '<i class="icon-material-outline-business"></i> Unverified';
			    	}
			        echo '<a href="single-task-page.html" class="task-listing">

						<!-- Job Listing Details -->
						<div class="task-listing-details">

							<!-- Details -->
							<div class="task-listing-description">
								<h3 class="task-listing-title">'.$row['web_name'].'</h3>
								<ul class="task-icons">
									<li><b>Traffic : </b> '.$row['web_traffic'].'</li>
									<li><b>Mpoints : </b>'.$row['mpoint'].'</li>
								</ul>
								<div class="task-tags margin-top-15">
									<span onmouseover="redict()" id="visit">Visit Now</span>
								</div>
							</div>

						</div>

						<div class="task-listing-bid">
							<div class="task-listing-bid-inner">
								<div class="task-offers">
									<strong>'.$row['web_post'].' Post</strong>
									<span>'.$row['catagory'].'</span>
								</div>
								<span class="button button-sliding-icon ripple-effect">Bid Now <i class="icon-material-outline-arrow-right-alt"></i></span>
							</div>
						</div>
					</a>';
			    }
			} else {
			    echo "Sorry No Data Found";
			}
			 ?>
			 <script type="text/javascript">
			 	function redict() {
			 		var ttime = 2000;
			 		alert("Your Redirecting... to this website")
			 		setInterval(function(){
			 			window.location="https://www.w3schools.com/jsref/event_onmouseover.asp";
			 		}, ttime);
			 	}
			 </script>
					<!-- Task -->
					
				</div>
				<!-- Jobs Container / End -->

			</div>
		</div>
	</div>
</div>

<div class="section gray padding-top-65 padding-bottom-70 full-width-carousel-fix">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline margin-top-0 margin-bottom-25">
					<h3>Highest Rated Writer's</h3>
					<a href="expert.php" class="headline-link">Browse All Writer's</a>
				</div>
			</div>

			<div class="col-xl-12">
				<div class="default-slick-carousel freelancers-container freelancers-grid-layout">

					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->
						<div class="freelancer-overview">
							<div class="freelancer-overview-inner">
								
								<!-- Bookmark Icon -->
								<span class="bookmark-icon"></span>
								
								<!-- Avatar -->
								<div class="freelancer-avatar">
									<div class="verified-badge"></div>
									<a href="single-freelancer-profile.html"><img src="images/user-avatar-big-01.jpg" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="single-freelancer-profile.html">Tom Smith <img class="flag" src="images/flags/gb.svg" alt="" title="United Kingdom" data-tippy-placement="top"></a></h4>
									<span>UI/UX Designer</span>
								</div>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="5.0"></div>
								</div>
							</div>
						</div>
						
						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Location <strong><i class="icon-material-outline-location-on"></i> London</strong></li>
									<li>Rate <strong>$60 / hr</strong></li>
									<li>Job Success <strong>95%</strong></li>
								</ul>
							</div>
							<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>
					<!-- Freelancer / End -->

					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->
						<div class="freelancer-overview">
							<div class="freelancer-overview-inner">
								
								<!-- Bookmark Icon -->
								<span class="bookmark-icon"></span>
								
								<!-- Avatar -->
								<div class="freelancer-avatar">
									<div class="verified-badge"></div>
									<a href="single-freelancer-profile.html"><img src="images/user-avatar-big-02.jpg" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="#">David Peterson <img class="flag" src="images/flags/de.svg" alt="" title="Germany" data-tippy-placement="top"></a></h4>
									<span>iOS Expert + Node Dev</span>
								</div>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="5.0"></div>
								</div>
							</div>
						</div>
						
						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Location <strong><i class="icon-material-outline-location-on"></i> Berlin</strong></li>
									<li>Rate <strong>$40 / hr</strong></li>
									<li>Job Success <strong>88%</strong></li>
								</ul>
							</div>
							<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>
					<!-- Freelancer / End -->

					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->
						<div class="freelancer-overview">
							<div class="freelancer-overview-inner">
								<!-- Bookmark Icon -->
								<span class="bookmark-icon"></span>
								
								<!-- Avatar -->
								<div class="freelancer-avatar">
									<a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="#">Marcin Kowalski <img class="flag" src="images/flags/pl.svg" alt="" title="Poland" data-tippy-placement="top"></a></h4>
									<span>Front-End Developer</span>
								</div>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="4.9"></div>
								</div>
							</div>
						</div>
						
						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Location <strong><i class="icon-material-outline-location-on"></i> Warsaw</strong></li>
									<li>Rate <strong>$50 / hr</strong></li>
									<li>Job Success <strong>100%</strong></li>
								</ul>
							</div>
							<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>
					<!-- Freelancer / End -->

					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->
						<div class="freelancer-overview">
								<div class="freelancer-overview-inner">
								<!-- Bookmark Icon -->
								<span class="bookmark-icon"></span>
								
								<!-- Avatar -->
								<div class="freelancer-avatar">
									<div class="verified-badge"></div>
									<a href="single-freelancer-profile.html"><img src="images/user-avatar-big-03.jpg" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="#">Sindy Forest <img class="flag" src="images/flags/au.svg" alt="" title="Australia" data-tippy-placement="top"></a></h4>
									<span>Magento Certified Developer</span>
								</div>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="5.0"></div>
								</div>
							</div>
						</div>
						
						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Location <strong><i class="icon-material-outline-location-on"></i> Brisbane</strong></li>
									<li>Rate <strong>$70 / hr</strong></li>
									<li>Job Success <strong>100%</strong></li>
								</ul>
							</div>
							<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>
					<!-- Freelancer / End -->
					
					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->
						<div class="freelancer-overview">
								<div class="freelancer-overview-inner">
								<!-- Bookmark Icon -->
								<span class="bookmark-icon"></span>
								
								<!-- Avatar -->
								<div class="freelancer-avatar">
									<a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="#">Sebastiano Piccio <img class="flag" src="images/flags/it.svg" alt="" title="Italy" data-tippy-placement="top"></a></h4>
									<span>Laravel Dev</span>
								</div>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="4.5"></div>
								</div>
							</div>
						</div>
						
						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Location <strong><i class="icon-material-outline-location-on"></i> Milan</strong></li>
									<li>Rate <strong>$80 / hr</strong></li>
									<li>Job Success <strong>89%</strong></li>
								</ul>
							</div>
							<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>
					<!-- Freelancer / End -->
								
					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->
						<div class="freelancer-overview">
								<div class="freelancer-overview-inner">
								<!-- Bookmark Icon -->
								<span class="bookmark-icon"></span>
								
								<!-- Avatar -->
								<div class="freelancer-avatar">
									<a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="#">Gabriel Lagueux <img class="flag" src="images/flags/fr.svg" alt="" title="France" data-tippy-placement="top"></a></h4>
									<span>WordPress Expert</span>
								</div>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="5.0"></div>
								</div>
							</div>
						</div>
						
						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Location <strong><i class="icon-material-outline-location-on"></i> Paris</strong></li>
									<li>Rate <strong>$50 / hr</strong></li>
									<li>Job Success <strong>100%</strong></li>
								</ul>
							</div>
							<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>
					<!-- Freelancer / End -->


				</div>
			</div>

		</div>
	</div>
</div>

<!-- Footer
================================================== -->
<div id="footer">
	
	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<!-- Footer Rows Container -->
					<div class="footer-rows-container">
						
						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">
									<img src="images/logo2.png" alt="">
								</div>
							</div>
						</div>
						
						<!-- Right Side -->
						<div class="footer-rows-right">

							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>
							
							<!-- Language Switcher -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">
										<option selected>English</option>
										<option>Français</option>
										<option>Español</option>
										<option>Deutsch</option>
									</select>
								</div>
							</div>
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->
	<div class="footer-middle-section">
		<div class="container">
			<div class="row">

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Candidates</h3>
						<ul>
							<li><a href="#"><span>Browse Jobs</span></a></li>
							<li><a href="#"><span>Add Resume</span></a></li>
							<li><a href="#"><span>Job Alerts</span></a></li>
							<li><a href="#"><span>My Bookmarks</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Employers</h3>
						<ul>
							<li><a href="#"><span>Browse Candidates</span></a></li>
							<li><a href="#"><span>Post a Job</span></a></li>
							<li><a href="#"><span>Post a Task</span></a></li>
							<li><a href="#"><span>Plans & Pricing</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Helpful Links</h3>
						<ul>
							<li><a href="#"><span>Contact</span></a></li>
							<li><a href="#"><span>Privacy Policy</span></a></li>
							<li><a href="#"><span>Terms of Use</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Account</h3>
						<ul>
							<li><a href="#"><span>Log In</span></a></li>
							<li><a href="#"><span>My Account</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Newsletter -->
				<div class="col-xl-4 col-lg-4 col-md-12">
					<h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
					<p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
					<form action="#" method="get" class="newsletter">
						<input type="text" name="fname" placeholder="Enter your email address">
						<button type="submit"><i class="icon-feather-arrow-right"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Middle Section / End -->
	
	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery-migrate-3.1.0.min.html"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/tippy.all.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>


<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}

	// Autocomplete adjustment for homepage
	if ($('.intro-banner-search-form')[0]) {
	    setTimeout(function(){ 
	        $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
	    }, 300);
	}

</script>

<!-- Google API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places&amp;callback=initAutocomplete"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:58:37 GMT -->
</html>