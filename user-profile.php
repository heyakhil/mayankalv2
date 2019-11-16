<?php 
include 'assets/check.php';
include 'assets/connect.php';
include 'assets/show_result.php';

	$sql = "SELECT * FROM coins_earn WHERE `uid`='".$_SESSION['uid']."'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $coins = $row['coin_earn'];
	    }
	} else {
	    echo "";
	}

	$sql = "SELECT profile_pic FROM user_info WHERE `uid`='$uid'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $pic_name = $row['profile_pic'];
	    }
	} else {
	    echo "0 results";
	}
	if ($pic_name == "") {
		$pp = "images/download.jpg";
	}else{
		$pp = "dashboard/img/".$pic_name;
	}
	
	if (isset($_GET['uid'])) {
			$prof_uid = $_GET['uid'];
	}else{
		header("location:index.php");
	}

	$sql = "SELECT * FROM user, user_info WHERE `unique_id`='$prof_uid' AND `uid`='$prof_uid'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $naam = $row['name'];
	        if ($row['profile_pic']==""){
	        	$pic = "images/download.jpg";
	        }else{
	        	$pic = "dashboard/img/".$row['profile_pic'];
	        }
	        $skill = explode(",", $row['skills']);
	        $rate = $row['rating'];
	        $country = $row['natinality'];
	        $verify = $row['verify'];
	        $about = $row['about_me'];
	        if (empty($row['about_me'])) {
	        	$about = '<h2>"Sorry User have Written Nothing"</h2>';
	        }
	        $fb = $row['facebook'];
	        $insta = $row['instagram'];
	        $twitter = $row['twitter'];
	        $tag = $row['tagline'];
	        $yt = $row['youtube'];
	        if ($tag == "") {
				$tg = "Title Not Set";
			}else{
				$tg = $tag;
			}
			$att = $row['attach'];

	    }   
	} else {
	    echo "0 results";
	}


 ?>

<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/single-freelancer-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:05 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!-- jQuery library
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 Latest compiled JavaScript -->
 
<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/blue.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
	<!-- Header -->
	<header id="header-container" class="fullwidth dashboard-header not-sticky">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index-2.html"><img src="images/logo.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">
						<li><a href="home.php">Home</a></li>
						<li><a href="user.php">Top User's</a></li>
						<li><a href="expert.php">Experts</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="top_web.php">Top Websites</a></li>
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

				<!--  User Notifications -->
				<div class="header-widget hide-on-mobile">
					
					<!-- Notifications -->
					<div class="header-notifications">

						<!-- Trigger -->
						<div class="header-notifications-trigger" id="noti" onclick="myfun()">
							<a href="#"><i class="icon-feather-bell"></i><span>
							<?php 
							$sql = "SELECT * FROM notification WHERE `uid`='$uid' AND `seen`='0'";
							$result = mysqli_query($conn, $sql);
							$num = mysqli_num_rows($result);
							echo $num;
								 ?></span></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Notifications</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
						<?php	$sql = "SELECT * FROM notification WHERE `uid`='$uid' ORDER BY id DESC LIMIT 6";
							$result = mysqli_query($conn, $sql);

							if (mysqli_num_rows($result) > 0) {
							    // output data of each row
							    while($row = mysqli_fetch_assoc($result)) {
							        echo'
										<li class="notifications-not-read">
											<a href="dashboard/index.php">
												<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
												<span class="notification-text">
													'.$row['notify'].'
												</span>
											</a>
										</li>';
							    }
							} else {
							    echo "No Any notifications-not-read";
							} ?>
									</ul>
								</div>
							</div>

						</div>

					</div>
					
					<!-- Messages -->
					<div class="header-notifications">
						<div class="header-notifications-trigger">
							<?php echo $coins; ?><i class="fas fa-coins"></i>
						</div>
					</div>
						<!-- Dropdown -->


				</div>
				<!--  User Notifications / End -->

				<!-- User Menu -->
				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#"><div class="user-avatar status-online"><img src="<?php echo $pp; ?>" alt="<?php echo $name; ?>"></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online"><img src="<?php echo $pp; ?>" alt="<?php echo $name; ?>"></div>
									<div class="user-name">
										<?php echo $name; ?> <span><?php echo $tags; ?></span>
									</div>
								</div>
						</div>
						
						<ul class="user-menu-small-nav">
							<li><a href="dashboard/index.php"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="dashboard/dashboard-settings.php"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="assets/logout.php?logoutl"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>

						</div>
					</div>

				</div>
				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
	<!-- Header / End -->


<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Titlebar
================================================== -->
<div class="single-page-header freelancer-header" data-background-image="images/single-freelancer.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image freelancer-avatar"><img src="<?php echo $pic; ?>" alt=""></div>
						<div class="header-details">
							<h3><?php echo $naam; ?><span><?php echo $tg; ?></span></h3>
							<ul>
								<li><div class="star-rating" data-rating="<?php echo $rate;?>"></div></li>
								<li><strong><?php echo $country; ?></strong></li>
								<li>
									<?php if ($verify == 0) {
										echo "<b style='color:red;'>!Not Verified</b>";
									}else{
										echo '<div class="verified-badge-with-title">Verified</div>';
									} ?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">
			
			<!-- Page Content -->
			<div class="single-page-section">
				<h3 class="margin-bottom-25">About Me</h3>
				<p><?php echo $about; ?></p>
			</div>

			<!-- Boxed List -->
			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-thumb-up"></i> Your Feedback Is Very Important</h3>
				</div>
				<ul class="boxed-list-ul">
			<?php $sql = "SELECT * FROM review WHERE `reciver_uid`='$prof_uid' ORDER BY id DESC LIMIT 12";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				    while($row = mysqli_fetch_assoc($result)) {
					echo '<li>
						<div class="boxed-list-item">
							<!-- Content -->
							<div class="item-content">
								<h4>'.$row['title'].'<span>By '.$row['Name'].'</span></h4>
								<div class="item-details margin-top-10">
									<div class="star-rating" data-rating="'.$row['rating'].'"></div>
									<div class="detail-item"><i class="icon-material-outline-date-range"></i> '.$row['date'].'</div>
								</div>
								<div class="item-description">
									<p>'.$row['re_msg'].'</p>
								</div>
							</div>
						</div>
					</li>';
				    }
				} else {
				    echo "Sorry No Review Yet";
				}
				 ?>
					
				</ul>

				<!-- Pagination -->
				<div class="clearfix"></div>
				<!-- Pagination / End -->

			</div>
			<!-- Boxed List / End -->
			
			<!-- Boxed List -->
			<div class="boxed-list margin-bottom-60">
				
			<div class="centered-button margin-top-35">
				<a href="#small-dialog" class="popup-with-zoom-anim button button-sliding-icon">Leave a Review <i class="icon-material-outline-arrow-right-alt"></i></a>
				</div>
			</div>
			<!-- Boxed List / End -->

		</div>
		

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">
				
				<!-- Profile Overview -->
				<div class="profile-overview">
					<div class="overview-item"><a href="#" title="Ping to write guest post for his website"><button type="button" class="btn btn-success btn-block btn-lg">Ping</button></a></div>
					<div class="overview-item"><a href="#" title="Report the User Profile"><button type="button" class="btn btn-danger btn-block btn-lg"  onclick="userid();"><i class="fa fa-bug"></i> &nbsp;Report</button></a></div>
				</div>
						<!-- hello -->
				<!-- Button -->
				<a href="assets/new_order.php?psu=<?php echo $prof_uid; ?>" class="apply-now-button margin-bottom-50">Place Order <i class="icon-material-outline-arrow-right-alt"></i></a>

				<!-- Freelancer Indicators -->
				<!-- Widget -->
				<div class="sidebar-widget">
					<h3>Social Profiles</h3>
					<div class="freelancer-socials margin-top-25">
						<ul>
							<li><a href="<?php echo $fb; ?>" title="Facebook" data-tippy-placement="top"><i class="icon-brand-facebook"></i></a></li>
							<li><a href="<?php echo $twitter; ?>" title="Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
							<li><a href="<?php echo $insta; ?>" title="instagram" data-tippy-placement="top"><i class="icon-brand-instagram"></i></a></li>
							<li><a href="<?php echo $yt; ?>" title="Youtube" data-tippy-placement="top"><i class="icon-brand-youtube"></i></a></li>
						
						</ul>
					</div>
				</div>

				<!-- Widget -->
				<div class="sidebar-widget">
					<h3>Skills</h3>
					<div class="task-tags">
						<?php
						for ($i=0; $i<count($skill)-1; $i++) { 
							echo ' <span>'.$skill[$i].'</span> ';
						}
						 ?>
					</div>
				</div>
				<!-- reported user -->

				<script type="text/javascript">
					function userid()
					{

					
					<?php
						
						$currentDateTime = date('Y-m-d');
						$sql1="SELECT * FROM `report` WHERE `report_uid`='$prof_uid'";
						$run=mysqli_query($conn,$sql1);
						$num=mysqli_num_rows($run);
						$result=mysqli_fetch_assoc($run);
						
						if($num == 0 )
							{
							$s="You Have Been Reported By SomeOne";
							$sql="INSERT INTO `report`(`uid`, `report_uid`, `date`) VALUES ('$uid','$id1','$currentDateTime')";

							$s="You are Reported by Someone ";
							
							$sql="INSERT INTO `report`(`uid`, `report_uid`, `date`) VALUES ('$uid','$prof_uid','$currentDateTime')";
							mysqli_query($conn,$sql);
							$sql1="INSERT INTO `notification`(`uid`, `notify`, `send_by`) VALUES ('$prof_uid','$s','$uid')";
							mysqli_query($conn,$sql1);
						}
						else
						{
							?>
							alert("You are Already Reported this User");
							<?php
						}
						?>
					}
				</script>
				<!-- Widget -->
				<div class="sidebar-widget">
					<h3>Attachments</h3>
					<div class="attachments-container">
						<?php if ($att == "") {
							echo "No Attachment";
						}else{
							echo '<a href="dashboard/attachment/'.$att.'" class="attachment-box ripple-effect"><span>Post Format</span><i>PDF</i></a>';
						} ?>
					</div>
				</div>

				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					<h3>Bookmark or Share</h3>
					<?php 

					$sql = "SELECT * FROM bookmark WHERE `book_uid`='$uid'";
					$result = mysqli_query($conn, $sql);
					$val = array();
					if (mysqli_num_rows($result) > 0) {
					// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
							array_push($val, $row['book_user']) ;
						    //print_r($val[1]);
						}
					} else {
					echo "0 results";
					}
					 ?>
					<!-- Bookmark Button -->
					
					<?php if (in_array($prof_uid, $val)) {
						echo '<button class="bookmark-button margin-bottom-25 bookmarked" id="'.$prof_uid.'" onclick="del(this.id)">
						<span class="bookmark-icon"></span>
						<span class="bookmark-text">Bookmark</span>
						<span class="bookmarked-text">Bookmarked</span>
					</button>';
					}else{
						echo '<button class="bookmark-button margin-bottom-25" id="'.$prof_uid.'" onclick="add(this.id)">
						<span class="bookmark-icon"></span>
						<span class="bookmark-text">Bookmark</span>
						<span class="bookmarked-text">Bookmarked</span>
					</button>';
					} ?>

					<!-- Copy URL -->
					<div class="copy-url">
						<input id="copy-url" type="text" value="" class="with-border">
						<button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url" title="Copy to Clipboard" data-tippy-placement="top"><i class="icon-material-outline-file-copy"></i></button>
					</div>

					<!-- Share Buttons -->
					<div class="share-buttons margin-top-25">
						<div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
						<div class="share-buttons-content">
							<span>Interesting? <strong>Share It!</strong></span>
							<ul class="share-buttons-icons">
								<li><a href="#" data-button-color="#3b5998" title="Share on Facebook" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
								<li><a href="#" data-button-color="#1da1f2" title="Share on Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
								<li><a href="#" data-button-color="#dd4b39" title="Share on Google Plus" data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a></li>
								<li><a href="#" data-button-color="#0077b5" title="Share on LinkedIn" data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>


<!-- Spacer -->
<div class="margin-top-15"></div>
<!-- Spacer / End-->

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


<!-- Make an Offer Popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Leave a Review</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>What is it like to work at Acodia?</h3>
					
				<!-- Form -->
				<form method="post" id="leave-company-review-form" action="assets/add_review.php?send=<?php echo $uid ?>&receive=<?php echo $prof_uid ?>">

					<!-- Leave Rating -->
					<div class="clearfix"></div>
					<div class="leave-rating-container">
						<div class="leave-rating margin-bottom-5">
							<input type="radio" name="rating" id="rating-1" value="5" required>
							<label for="rating-1" class="icon-material-outline-star"></label>
							 <input type="radio" name="rating" id="rating-2" value="4" required>
							<label for="rating-2" class="icon-material-outline-star"></label>
							<input type="radio" name="rating" id="rating-3" value="3" required>
							<label for="rating-3" class="icon-material-outline-star"></label>
							<input type="radio" name="rating" id="rating-4" value="2" required>
							<label for="rating-4" class="icon-material-outline-star"></label>
							<input type="radio" name="rating" id="rating-5" value="1" required>
							<label for="rating-5" class="icon-material-outline-star"></label> 
						</div>
					</div>
					<div class="clearfix"></div>
					<!-- Leave Rating / End-->

				</div>


					<div class="row">
						<div class="col-xl-12">
							<div class="input-with-icon-left" title="Leave blank to add review anonymously" data-tippy-placement="bottom">
								<i class="icon-material-outline-account-circle"></i>
								<input type="text" class="input-text with-border" name="name" id="name" placeholder="First and Last Name" value="<?php echo $name; ?>" />
							</div>
						</div>

						<div class="col-xl-12">
							<div class="input-with-icon-left">
								<i class="icon-material-outline-rate-review"></i>
								<input type="text" class="input-text with-border" name="reviewtitle" id="reviewtitle" placeholder="Review Title"  required/>
							</div>
						</div>
					</div>

					<textarea class="with-border" placeholder="Review" name="message" id="message" cols="7"  required></textarea>

				</form>
				
				<!-- Button -->
				<input class="button margin-top-35 full-width button-sliding-icon ripple-effect" type="submit" form="leave-company-review-form" value="Leave Review">
			</div>

		</div>
	</div>
</div>

<!-- Make an Offer Popup / End -->



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

// Snackbar for "place a bid" button
$('#snackbar-place-bid').click(function() { 
	Snackbar.show({
		text: 'Your bid has been placed!',
	}); 
}); 


// Snackbar for copy to clipboard button
$('.copy-url-button').click(function() { 
	Snackbar.show({
		text: 'Copied to clipboard!',
	}); 
}); 
</script>
<script type="text/javascript">
	function myfun(){
        $.ajax({
            url: "assets/notifynum.php",
            type: "GET",
            data: {uid: "<?php echo $uid; ?>"}, //this sends the user-id to php as a post variable, in php it can be accessed as $_POST['uid']
            // success: function(data){
            //     $('#dataget').html(result);
            //     //update some fields with the updated data
            //     //you can access the data like 'data["driver"]'
            // }
        });
    }
</script>
<script type="text/javascript">


 	function del(name){
 		$.ajax({

 			url : 'assets/delbook.php',
 			type : 'GET',
 			data : {cid : name},

 			success: function(data){
 				console.log('bookmark');
 			}

 		}); 		
 	}


 	function add(name){
 		$.ajax({

 			url : 'assets/addbook.php',
 			type : 'GET',
 			data : {addcid : name},

 			success: function(data){
 				console.log('add bookmark');
 			}

 		});
 	}
 </script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/single-freelancer-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:11 GMT -->
</html>