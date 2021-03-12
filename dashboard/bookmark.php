<?php 
	include '../assets/connect.php';
	include '../assets/check.php';

 ?>

<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-bookmarks.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:14 GMT -->
<head>

<!-- Basic Page Needs-->
<title>Mayankal - Bookmark</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/colors/blue.css">

</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth dashboard-header not-sticky">

	<!-- Header -->
	<?php 	include 'dashmenu.php'; ?>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<?php 	include 'sidebar.php'; ?>
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Bookmarks</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="../home.php">Home</a></li>
						<li><a href="index.php">Dashboard</a></li>
						<li>Bookmarks</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-face"></i> Bookmarked Users</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								<?php $sql = "SELECT * FROM bookmark where book_uid='$uid'";
								$result = mysqli_query($conn, $sql);
								$tak = array();
								if (mysqli_num_rows($result) > 0) {
								    // output data of each row
								    while($row = mysqli_fetch_assoc($result)) {
								    		array_push($tak, $row['book_user']);	
							 	}
							} else {
							    echo "0 results";
							}
							//echo $tak[0];
							// print_r($tak);
							$u_name = array();
							for ($i=0; $i<count($tak); $i++) { 
								$sql = "SELECT * FROM user where unique_id='$tak[$i]'";
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
								    // output data of each row
								    while($row = mysqli_fetch_assoc($result)) {
								    		array_push($u_name, $row['name']);	
							 		}
								}else{
									$sql1="SELECT * FROM `author` WHERE `auth_id`='$tak[$i]'";
									$result1=mysqli_query($conn,$sql1);
									if(mysqli_num_rows($result1) > 0){
										$row1=mysqli_fetch_assoc($result1);
										array_push($u_name,$row1['name']);
										
									}
								}	
							}
						// print_r($tak);
							
							for ($i=0; $i<count($tak); $i++) { 
								$sql = "SELECT * FROM user_info where uid='$tak[$i]'";
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
								    // output data of each row
								    while($row = mysqli_fetch_assoc($result)) {
								    	if ($row['profile_pic']=='') {
								    		$img = "../images/download.jpg";
								    	}else{
								    		$img = "img/".$row['profile_pic'];
										}
								
								    echo '<li>
									<!-- Overview -->
									<div class="freelancer-overview">
										<div class="freelancer-overview-inner">

											<!-- Avatar -->
											<div class="freelancer-avatar">
												<a href="#"><img src="'.$img.'" alt=""></a>
											</div>

											<!-- Name -->
											<div class="freelancer-name">
												<h4><a href="#">'.$u_name[$i].'</a></h4>
												<span>'.$row['tagline'].'</span>
												<!-- Rating -->
												<div class="freelancer-rating">
													<div class="star-rating" data-rating="'.$row['rating'].'"></div>
												</div>
											</div>
										</div>
									</div>

									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="left"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li>';	
							 	}
							} else {
								$sql2="SELECT * FROM `author` WHERE `auth_id`='$tak[$i]'";
								$result2=mysqli_query($conn,$sql2);
								if(mysqli_num_rows($result2) > 0){
									$row2=mysqli_fetch_assoc($result2);
							    if ($row['profile_pic']=='') {
									$img = "../images/download.jpg";
								}else{
									$img = "img/".$row2['profile_pic'];
								}
								echo '<li>
								<!-- Overview -->
								<div class="freelancer-overview">
									<div class="freelancer-overview-inner">

										<!-- Avatar -->
										<div class="freelancer-avatar">
											<a href="#"><img src="'.$img.'" alt=""></a>
										</div>

										<!-- Name -->
										<div class="freelancer-name">
											<h4><a href="#">'.$u_name[$i].'</a></h4>
											<span>'.$row2['experties'].'</span>
											<!-- Rating -->
											<div class="freelancer-rating">
												<div class="star-rating" data-rating="'.$row2['rating'].'"></div>
											</div>
										</div>
									</div>
								</div>

								<!-- Buttons -->
								<div class="buttons-to-right">
									<a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="left"><i class="icon-feather-trash-2"></i></a>
								</div>
							</li>';	
								}
								}
							}
							
							//print_r($u_name);

							
							mysqli_close($conn);



								 ?>
							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
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
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->


<!-- Apply for a job popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Add Note</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Do Not Forget 😎</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="add-note">

					<select class="selectpicker with-border default margin-bottom-20" data-size="7" title="Priority">
						<option>Low Priority</option>
						<option>Medium Priority</option>
						<option>High Priority</option>
					</select>

					<textarea name="textarea" cols="10" placeholder="Note" class="with-border"></textarea>

				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="add-note">Add Note <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Apply for a job popup / End -->


<!-- Scripts
================================================== -->
<script src="../js/simplebar.min.js"></script>
<script src="../js/bootstrap-slider.min.js"></script>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/jquery-migrate-3.1.0.min.html"></script>
<script src="../js/mmenu.min.js"></script>
<script src="../js/tippy.all.min.js"></script>
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

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-bookmarks.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:14 GMT -->
</html>