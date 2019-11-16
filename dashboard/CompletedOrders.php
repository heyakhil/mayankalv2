<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/tasks-list-layout-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:58:43 GMT -->
<head>
		<style>
				#more {display: none;}
				</style>

<!-- Basic Page Needs
================================================== -->
<title>Mayankal - Completed Orders</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/colors/blue.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php  include 'dashmenu.php' ?>
<!-- Header Container / End -->

<!-- Spacer -->
<div class="margin-top-90"></div>
<!-- Spacer / End-->

<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">

		<!--<div class="col-xl-12 col-lg-8 content-left-offset">

			
			</div>-->
			
			<!-- Tasks Container -->
			<div class="col-xl-12 col-lg-8 content-left-offset" id="scrolling">

				<h1 class="page-title">Completed Orders:-</h1>

			</div>

				<!-- Task -->
				<!-- Listing Of Order Completed With Start Here -->
				<?php 
					$sql = "SELECT * FROM order_complete WHERE `uid`='$uid' ORDER BY id desc";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				    while($row = mysqli_fetch_assoc($result)) {
				        ?>	
				    <div class="tasks-list-container margin-top-35">
				      <div class="task-listing">
				        <div class="task-listing-details">

						<!-- Details -->
						<div class="task-listing-description">
							<div class="row">
								<div class="col-md-10"><h2 class="task-listing-title"><?php echo  strtoupper($row['title']); ?></h2></div>
								<div class="col-md-2" style="margin-left: 0px;"><button class="button" onclick="WriteContent();"><i class="fa fa-file"></i></button></div>
							</div>
							<h3 class="task-listing-title">Product Id: <?php echo $row['product_id']; ?></h3>
							
						<p><b style="color:red; font-size: 22px;" >Order Of : </b><?php 
						$idid = $row['orderof_uid'];
						$sql = "SELECT name FROM user WHERE `unique_id`='$idid'";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($result)) {
						        echo $row['name'];
						    }
						} else {
						    echo "0 results";
						}
						?></p><br>
						</div>
					</div>
				</div>
			</div>
	        <?php
		    }
		} else {
		    echo "0 results";
		} 
	?>

					<!-- Job Listing Details -->
				<!-- Listing Of Order Completed With End Here -->

			<div class="col-xl-12 col-lg-8 content-left-offset" id="scrolling">

				<h1 class="page-title">Order You Deleted:-</h1>

			</div>

				<!-- Task -->
				<!-- Listing Of Order Completed With Start Here -->
				<?php 
					$sql = "SELECT * FROM deleted_orders WHERE `uid`='$uid' ORDER BY id DESC ";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				    while($row = mysqli_fetch_assoc($result)) {
				        ?>	
				    <div class="tasks-list-container margin-top-35">
				      <div class="task-listing">
				        <div class="task-listing-details">

						<!-- Details -->
						<div class="task-listing-description">
							<div class="row">
								<div class="col-md-10"><h2 class="task-listing-title">Category:- <?php echo  strtoupper($row['cata']); ?></h2></div>
								<div class="col-md-2" style="margin-left: 0px; color: red;">Deleted</div>
							</div>
						<h3 class="task-listing-title">Product Id: <?php echo $row['order_id']; ?></h3>
							
						<p><b style="color:red; font-size: 22px;" >Order Of : </b><?php 
							$idid = $row['order_of'];
							$sql = "SELECT name FROM user WHERE `unique_id`='$idid'";
							$result = mysqli_query($conn, $sql);
							if (mysqli_num_rows($result) > 0) {
							    // output data of each row
							    while($row = mysqli_fetch_assoc($result)) {
							        echo $row['name'];
							    }
							} else {
							    echo "The User name is not Defined";
							}
						?></p><br>
							</div>
					</div>
				</div>
			</div>
	        <?php
		    }
		} else {
			?>
		    <div class="tasks-list-container margin-top-35">
				      <div class="task-listing">
				        <div class="task-listing-details">

						<!-- Details -->
						<div class="task-listing-description">
							<h1 style="width: 100%; color: red;">No Order Deleted By You</h1>
						</div>
					</div>
				</div>
			</div>
		<?php
		} 
	?>
				<!-- Task -->
			<!-- Tasks Container / End -->

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
					© 2019 <strong>Mayankal</strong>. All Rights Reserved.
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
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/jquery-migrate-3.1.0.min.html"></script>
<script src="../js/mmenu.min.js"></script>
<script src="../js/tippy.all.min.js"></script>
<script src="../js/simplebar.min.js"></script>
<script src="../js/bootstrap-slider.min.js"></script>
<script src="../js/bootstrap-select.min.js"></script>
<script src="../js/snackbar.js"></script>
<script src="../js/clipboard.min.js"></script>
<script src="../js/counterup.min.js"></script>
<script src="../js/magnific-popup.min.js"></script>
<script src="../js/slick.min.js"></script>
<script src="../js/custom.js"></script>

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


// ---------Read more Read Less tag------------------
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}	




</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/tasks-list-layout-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:58:43 GMT -->
</html>