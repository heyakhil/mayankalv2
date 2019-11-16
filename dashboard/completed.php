<?php include '../assets/connect.php';
	include '../assets/check.php';

 ?>

<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/tasks-list-layout-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:58:43 GMT -->
<head>
	<style>
		#more {display: none;}
		.success-alert {
	 		color:red;
			}
	</style>

<!-- Basic Page Needs
================================================== -->
<title>Mayankal - Track Completed Orders</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/colors/blue.css">

<!-- <script src="//code.jquery.com/jquery-2.2.0.min.js"></script> -->
</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<?php include 'dashmenu.php'; ?>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Spacer -->
<div class="margin-top-90"></div>
<!-- Spacer / End-->

<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-1 col-lg-12">
			
		</div>
		<!--<div class="col-xl-12 col-lg-8 content-left-offset">
			</div>-->
			<!-- Tasks Container -->
			<div class="tasks-list-container margin-top-35">
					<h1 class="page-title">Completed Orders:-</h1><br>
				<!-- Task -->
				<!-- <a href="#" class="task-listing"> -->
					<?php 
					$sql = "SELECT * FROM order_complete WHERE `orderof_uid`='$uid'";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					 while($row = mysqli_fetch_assoc($result)) {
					       ?>
					<div class="task-listing">
					<!-- Job Listing Details -->
					<div class="task-listing-details">

						<!-- Details -->
						<div class="task-listing-description">
							<div class="row">
							<div class="col-md-9">
							<h2 class="task-listing-title"><?php echo $row['title']; ?></h2>
							</div>

							<div class="col-md-3 " style="margin-left: 0px;"><a href="#small-dialog-2" onclick="myclick(this.id);" id="<?php echo $row['product_id']; ?>" class="popup-with-zoom-anim button ripple-effect">Read Your Post</a>	
							</div>
							</div>
							<h3 class="task-listing-title">Order Id: <?php echo $row['product_id']; ?></h3>
							</div><br>
							<h3>Article View :- </h3>
							<p><?php echo substr($row['post'], 0, 600); ?></p>
						</div>
					</div>
					       <?php
					    }
					} else {
					    echo "0 results";
					} ?>
				<!-- Tasks Container / End -->
			</div>
		</div>
	</div>

<!--2-->
<!--3-->


<div id="small-dialog-2" class="zoom-anim-dialog mfp-hide dialog-with-tabs" >

		<!--Tabs -->
		<div class="sign-in-form">
	
			<ul class="popup-tabs-nav">
			</ul>
	
			<div class="popup-tabs-container-fluid">
				<div class="container" ><br><h1><b>Title:</b>ABCDEFGHIJ ABCDEFGHIJ ABCDEFGHIJ ABCDEFGHIJ</h1><hr><br>
					<textarea rows="10" cols="30" >agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster.
						Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster.
						Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster.
						Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster.
					</textarea>
				</div>
					<button class="button full-width button-sliding-icon ripple-effect" >Copy To Clipboard</button>
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
<!-- Leave a Review for Freelancer Popup
================================================== -->

<!-- Leave a Review Popup / End -->
<!-- <script>
function myclick(id){
	console.log(id)
}
</script> -->

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
<script src="../js/copyme.js"></script>
<script>
	$('button').click(function(){
	  $('textarea').copyme();
	
	});
	

</script>
<script type="text/javascript">
	//function myclick(prod_id){
		//console.log(prod_id);
	//}
	function myclick(or_id) {
		$.ajax({
			url: '../assets/display_article.php',
			type: 'post',
			data : {ord_id:or_id},

			success:function(responsedata) {
				$('#small-dialog-2').html(responsedata);
			}
		});
	}

</script>
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