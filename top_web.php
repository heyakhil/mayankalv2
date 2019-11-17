<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/tasks-grid-layout-full-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:58:43 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Mayankal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/blue.css">
<script type="text/javascript" src="js/usearch.js"></script>
</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->

<header id="header-container" class="fullwidth ">
<?php include 'menu.php'; ?>
</header>
<!-- Header Container / End -->

<!-- Page Content
================================================== -->
<div class="full-page-container">

	<div class="full-page-sidebar">
		<div class="full-page-sidebar-inner" data-simplebar>
			<div class="sidebar-container">
				<form action="top_web.php" method="GET">	
				<!-- Location -->
				<!-- Category -->
				<div class="sidebar-widget">
					<h3>Category</h3>
					<select class="selectpicker default" multiple data-selected-text-format="count" data-size="7" title="All Categories" name="catagory[]">
								<option value="">Select Category</option>
  								<option value="Entertainment">Entertainment</option>
  								<option value="Sports">Sports</option>
  								<option value="Politics">Politics</option>
  								<option value="Food">Food</option>
  								<option value="Education">Education</option>
  								<option value="Personal">Personal</option>
  								<option value="Fashion">Fashion</option>
  								<option value="Bussiness">Bussiness</option>
  								<option value="Games/Movies">Games/Movies</option>
  								<option value="Fitness/Health">Fitness/Health</option>
  								<option value="Lifestyle">Lifestyle</option>
  								<option value="Pets">Pets</option>
  								<option value="Photography">Photography</option>
  								<option value="Website Tools">Websites Tools</option>
  								<option value="Home & Garden">Home & Garden</option>
  								<option value="Other">Other</option>
					</select>
				</div>

				<div class="sidebar-widget">
					<div class="clearfix"></div>

					<!-- More Skills -->
					<h3>Traffic per Month</h3>
					
					<label class="radio-inline"><input type="radio" name="optradio" value="9">Over 1M</label><br>
					<label class="radio-inline"><input type="radio" name="optradio" value="7">100K - 1M</label><br>
					<label class="radio-inline"><input type="radio" name="optradio" value="5">10K - 100K</label><br>
					<label class="radio-inline"><input type="radio" name="optradio" value="3">1K - 10K</label><br>
					<label class="radio-inline"><input type="radio" name="optradio" value="1">Less then 1K</label>
				</div>

				<div class="sidebar-widget">
					<div class="clearfix"></div>

					<!-- More Skills -->
					<h3>DA & PA</h3>
					
					<label class="radio-inline"><input type="radio" name="dapa" value="9">90 - 100</label><br>
					<label class="radio-inline"><input type="radio" name="dapa" value="7">70 - 89</label><br>
					<label class="radio-inline"><input type="radio" name="dapa" value="5">60 - 70</label><br>
					<label class="radio-inline"><input type="radio" name="dapa" value="3">20 - 60</label><br>
					<label class="radio-inline"><input type="radio" name="dapa" value="1">Less then 20</label>
				</div>

				<div class="sidebar-widget">
					<div class="clearfix"></div>

					<!-- More Skills -->
					<h3>Mpoints</h3>
					
					<label class="radio-inline"><input type="radio" name="mpoints" value="9">10 - 9</label><br>
					<label class="radio-inline"><input type="radio" name="mpoints" value="7">7-8</label><br>
					<label class="radio-inline"><input type="radio" name="mpoints" value="5">5-6</label><br>
					<label class="radio-inline"><input type="radio" name="mpoints" value="3">3-4</label><br>
					<label class="radio-inline"><input type="radio" name="mpoints" value="1">2-1</label>
				</div>
				<br><br>
				<div class="sidebar-search-button-container">
				<input type="submit" name="submit" value="Submit" class="button ripple-effect">
			</div>
			<!-- Search Button / End-->
		</form>
			</div>
			<!-- Sidebar Container / End -->
			<!-- Search Button -->
		</div>
	</div>
	<!-- Full Page Sidebar / End -->
	
	<!-- Full Page Content -->
	<div class="full-page-content-container" data-simplebar>
		<div class="full-page-content-inner">

			<h3 class="page-title">List Of Websites On Mayankal</h3>

			<div class="notify-box margin-top-15">
				<center><strong>Here are Highly Rated Websites</strong></center>
			</div>

			<!-- Tasks Container -->
			<div class="tasks-list-container tasks-grid-layout margin-top-35">
				
				<!-- Task -->
				<!-- <a href="single-task-page.html" class="task-listing"> -->

					<!-- Job Listing Details -->
					<!-- <div class="task-listing-details"> -->

						<!-- Details -->
						<!-- <div class="task-listing-description">
							<h3 class="task-listing-title">Filmyzilla Hollywood Movies</h3>
							<ul class="task-icons">
								<li><b>Niche: </b></i>Movie Downloading</li>
								<li><b>Traffic: </b>20,000 / month</li>
							</ul>
						</div>

					</div>

					<div class="task-listing-bid">
						<div class="task-listing-bid-inner">
							<div class="task-offers">
								<strong>Games & Movies</strong>
								<span><strong>Mpoints: 45</strong></span>
							</div>
							<span class="button button-sliding-icon ripple-effect">Ping <i class="icon-material-outline-arrow-right-alt"></i></span>
						</div>
					</div>
				</a> -->

				<!-- Task -->
				<?php include 'assets/searchweb.php'; ?>
			</div>
			<!-- Tasks Container / End -->

			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="pagination-container margin-top-20 margin-bottom-20">
				<nav class="pagination">
					<ul>
						<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
						<li><a href="#" class="ripple-effect">1</a></li>
						<li><a href="#" class="ripple-effect current-page">2</a></li>
						<li><a href="#" class="ripple-effect">3</a></li>
						<li><a href="#" class="ripple-effect">4</a></li>
						<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
					</ul>
				</nav>
			</div>
			<div class="clearfix"></div>
			<!-- Pagination / End -->

			<!-- Footer -->
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>Mayankal</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Full Page Content / End -->

</div>


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
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/tasks-grid-layout-full-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:58:43 GMT -->
</html>