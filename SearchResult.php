<?php include 'assets/connect.php' ?>
<?php include 'assets/check.php' ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/freelancers-list-layout-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:05 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Mayankal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/blue.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<style>
	body {
	  font-family: Arial;
	}
	
	* {
	  box-sizing: border-box;
	}
	
	form.example input[type=text] {
	  padding: 10px;
	  font-size: 17px;
	  border: 1px solid grey;
	  float: left;
	  width: 90%;
	  background: #fcf9f9;
	}
	
	form.example button {
	  float: left;
	  width: 10%;
	  padding: 10px;
	  background: rgba(174, 162, 185, 0.616);
	  color: white;
	  font-size: 19px;
	  border: 1px solid grey;
	  border-left: none;
	  cursor: pointer;
	}
	
	form.example button:hover {
	  background: #0b7dda;
	}
	
	form.example::after {
	  content: "";
	  clear: both;
	  display: table;
	}
	</style>

</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
<?php include 'menu.php' ?>

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Spacer -->
<div class="margin-top-40"></div>
<!-- Spacer / End-->

<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-4">
			
				<?php $search=$_POST['search']; ?>

			</div>
		</div>
		<div class="col-xl-12 col-lg-9 content-left-offset">

			<!--====Search Bar=======-->


			<form class="example" action="SearchResult.php" method="post">
				<input type="text" placeholder="Search..." name="search" value="<?php echo $search; ?>">
				<button type="submit" ><i class="fa fa-search"></i></button>
			  </form>

			  <h3>Search Result For:</h3>
		
			  <!--==END Search Bar-->
			  <!-- data of user  -->
			  	
			
			<!-- Freelancers List Container -->
			<div class="freelancers-container freelancers-list-layout margin-top-35">
				
				<!--Freelancer -->
				<?php  

				$sql="SELECT * FROM user INNER JOIN user_info ON user.unique_id=user_info.uid where user.name LIKE '%$search%' OR user_info.skills LIKE '%$search%'";
				
				$run=mysqli_query($conn,$sql);
				if(mysqli_num_rows($run) > 0){
				while($row=mysqli_fetch_assoc($run)){
				$pp=$row['profile_pic'];
				if($pp==""){
					 $pp="download.jpg";
				}
				$name=$row['name'];
				$rating=$row['rating'];
				$skills=$row['skills'];
				$uid=$row['unique_id'];
			?>
				<div class="freelancer">

					<!-- Overview -->
					<div class="freelancer-overview">
						<div class="freelancer-overview-inner">
							
							<!-- Bookmark Icon -->
							<span class="bookmark-icon"></span>
							
							<!-- Avatar -->
							<div class="freelancer-avatar">
								<div class="verified-badge"></div>
								<a href="user-profile.php?uid=<?php echo $uid; ?>"><img src="dashboard/img/<?php echo $pp; ?>" alt=""></a>
							</div>

							<!-- Name -->
							<div class="freelancer-name">
								<h4><a href="user-profile.php?uid=<?php echo $uid; ?>"><?php echo $name; ?> </a></h4>
								<span><?php echo $skills; ?></span>
								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="<?php echo $rating; ?>"></div>
								</div>
								<h4></h4>
							</div>
						</div>
					</div>
					
					<!-- Details -->
					<div class="freelancer-details">
						<div class="freelancer-details-list">
							<ul>
								<li></li>
								<li></li>
								<li>Country <strong><i class="icon-material-outline-location-on"></i> India</strong></li>
								<li></li>
								<li></li>
								
							</ul>
						</div>
						<a href="user-profile.php?uid=<?php echo $uid; ?>" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
					</div>
				</div>
				<?php
						}
					}else{
				?>
				<!-- Freelancer / End -->

				<!--Freelancer -->
				<?php
					$sql="SELECT * FROM `web_info` WHERE web_name LIKE '%$search%' OR catagory LIKE '%$search%' OR niche LIKE '%$search%'";
					$run=mysqli_query($conn,$sql);
					if(mysqli_num_rows($run) > 0){
					while($result=mysqli_fetch_assoc($run)){
						$uid=$result['web_uid'];
						$niche=$result['niche'];
						$catagory=$result['catagory'];
						$mpoint=$result['mpoint'];
						$sql1="SELECT * FROM user WHERE unique_id='$uid'";
						$run1=mysqli_query($conn,$sql1);
						$row=mysqli_fetch_assoc($run1);
						$name=$row['name'];
						$sql2="SELECT * FROM `user_info` WHERE uid='$uid'";
						$run2=mysqli_query($conn,$sql2);
						$row1=mysqli_fetch_assoc($run2);
						$no_of_web=$row1['no_web'];
				?>
				<div class="freelancer">

					<!-- Overview -->
					<div class="freelancer-overview">
						<div class="freelancer-overview-inner">
							
							<!-- Bookmark Icon -->
							<span class="bookmark-icon"></span>
							
							<!-- Avatar -->
							

							<!-- Name -->
							<div class="freelancer-name">
								<h3><?php echo $name; ?></h3>
								<span>Niche:<?php echo $niche; ?></span><br><br>
								<h4>Category:<span><?php echo $catagory; ?></span></h4><br>
								<h4>MPoint:<?php echo $mpoint; ?></h4>
								
								
								
							</div>
						</div>
					</div>
					
					<!-- Details -->
					<div class="freelancer-details">
						<div class="freelancer-details-list">
							<ul>
								<li><h3 style="margin-left: 10ex;"> Total Web:<?php echo $no_of_web; ?></h3> </li>
								<li></li>
							</ul>	
							<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">Ping <i class="icon-material-outline-arrow-right-alt"></i></a>
							
						</div>
						
					</div>
				</div>
				<?php
							}
						}else{
							echo "0 Results";
						}
					}
				?>
				<!-- Freelancer / End -->

				<!-- for any one search author than -->
				<?php 
					$sql2="SELECT * FROM `author` WHERE name LIKE '%$search%' OR skills LIKE '%$search%' OR experties LIKE '%$search%'";
					$run2=mysqli_query($conn,$sql2);
					if(mysqli_num_rows($run2) > 0){
					while($result=mysqli_fetch_assoc($run2)){
						$name1=$result['name'];
						$skills=$result['skills'];
						$experties=$result['experties'];
						$pp1=$result['profile_pic'];
						if($pp==""){
							$pp1="download.jpg";
						}
						$id=$result['auth_id'];
						$rating=$result['rating'];
				 ?>
				<div class="freelancer">

					<!-- Overview -->
					<div class="freelancer-overview">
						<div class="freelancer-overview-inner">
							
							<!-- Bookmark Icon -->
							<span class="bookmark-icon"></span>
							
							<!-- Avatar -->
							<div class="freelancer-avatar">
								<div class="verified-badge"></div>
								<a href="expertprofile.php?authid=<?php echo $id; ?>"><img src="images/<?php echo $pp1; ?>" alt=""></a>
							</div>

							<!-- Name -->
							<div class="freelancer-name">
								<h4><a href="expertprofile.php?authid=<?php echo $id; ?>"><?php echo $name1; ?> </a></h4>
								<span><?php echo $skills; ?></span>
								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="<?php echo $rating; ?>"></div>
								</div>
								<h4></h4>
							</div>
						</div>
					</div>
					
					<!-- Details -->
					<div class="freelancer-details">
						<div class="freelancer-details-list">
							<ul>
								<li></li>
								<li></li>
								<li>Country <strong><i class="icon-material-outline-location-on"></i> India</strong></li>
								<li></li>
								<li></li>
								
							</ul>
						</div>
						<a href="expertprofile.php?authid=<?php echo $id; ?>" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
					</div>
				</div>
				<?php 
					}
				}
				?>
	
			
			<!-- Tasks Container / End -->


			<!-- Pagination -->
			<!--<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					
					<div class="pagination-container margin-top-40 margin-bottom-60">
						<nav class="pagination">
							<ul>
								<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
								<li><a href="#" class="ripple-effect">1</a></li>
								<li><a href="#" class="current-page ripple-effect">2</a></li>
								<li><a href="#" class="ripple-effect">3</a></li>
								<li><a href="#" class="ripple-effect">4</a></li>
								<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>-->
			<!-- Pagination / End -->

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
									<img src="images/logon.png" alt="">
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
						<h3>For Users</h3>
						<ul>
							<li><a href="user.php"><span>Top Users</span></a></li>
							<li><a href="expert.php"><span>Top Experts</span></a></li>
							<li><a href="blog.php"><span>Blogs</span></a></li>
							<li><a href="top_web.php"><span>Top Website</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Experts</h3>
						<ul>
					<?php if (isset($_SESSION['uid'])) {
						echo '<li><a href="#"><span>Log In</span></a></li>
							<li><a href="#"><span>My Account</span></a></li>';
					}else{
						echo '<li><a href="#sign-in-dialog" class="popup-with-zoom-anim log-in-button"><span>Log In</span></a></li>
					<li><a href="#sign-in-dialog" class="popup-with-zoom-anim log-in-button"><span>My Account</span></a></li>';
					} ?>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Helpful Links</h3>
						<ul>
							<li><a href="contactUs.php"><span>Contact</span></a></li>
							<li><a href="privacy_policy.php"><span>Privacy Policy</span></a></li>
							<li><a href="disclaimer.php"><span>Disclaimer</span></a></li>
							<li><a href="aboutus.php"><span>About Us</span></a></li>
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

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/freelancers-list-layout-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:05 GMT -->
</html>