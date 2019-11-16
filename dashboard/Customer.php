<?php include '../assets/connect.php';
	include '../assets/check.php';

 ?>
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
<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/freelancers-grid-layout-full-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:05 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Mayankal - Your Customers</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/colors/blue.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth not-sticky">

	<!-- Header -->
	<?php include 'dashmenu.php'; ?>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Page Content
================================================== -->
<div class="full-page-container">

	<div class="r">
		<div class="full-page-sidebar-inner" data-simplebar>
			
			<div class="sidebar-container">
				<div class="margin-bottom-100"></div>
			</div>
		</div>
	</div>
	<!-- Full Page Sidebar / End -->
	
	<!-- Full Page Content -->
	<div class="full-page-content-container" data-simplebar>
		<div class="full-page-content-inner">

			<!-- Freelancers List Container -->
			<h1>Your Customers :-</h1>
			<div class="freelancers-container freelancers-grid-layout margin-top-35">
				
				<?php 
					$sql = "SELECT * FROM order_complete where `uid`='$uid'";
					$result = mysqli_query($conn, $sql);
					$arr = array();
					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
					        $or_uid = $row['orderof_uid'];
					        array_push($arr, $or_uid);
					    }
					} else {
					    echo "0 results";
					}

			foreach ($arr as $key) {
				$sql = "SELECT * FROM user, user_info where `unique_id`='$key' AND `uid`='$key'";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				    while($row = mysqli_fetch_assoc($result)) {
				        $name = $row['name'];
				        if ($row['profile_pic']=="") {
				        	$pp = "../images/download.jpg";
				        }else{
				        	$pp = "img/".$row['profile_pic'];
				        }
				    	?>
					<div class="freelancer">

					<!-- Overview -->
					<div class="freelancer-overview">
						<div class="freelancer-overview-inner">
							<!-- Bookmark Icon -->
							<?php if (in_array($key, $val)) {
								echo '<span class="bookmark-icon bookmarked" id="'.$key.'" onclick="del(this.id);"></span>';
							}else{
								echo '<span class="bookmark-icon" id="'.$key.'" onclick="add(this.id);"></span>';
								
							} ?>
							<!-- <span class="bookmark-icon"></span> -->
							<!-- Avatar -->
							<div class="freelancer-avatar">
								<?php if ($row['verify'] == "1"){
									echo '<div class="verified-badge"></div>';
								} ?>
								<a href="../user-profile.php?uid=<?php echo $key; ?>"><img src="<?php echo $pp; ?>" alt="Profile"></a>
							</div>

							<!-- Name -->
							<div class="freelancer-name">
								<h4><a href="single-freelancer-profile.html"><?php echo $row['name']; ?></a></h4>
								<span><?php echo $row['tagline']; ?></span>
							</div>

							<!-- Rating -->
							<div class="freelancer-rating">
								<div class="star-rating" data-rating="<?php echo $row['rating']; ?>"></div>
							</div>
						</div>
					</div>
					
					<!-- Details -->
					<div class="freelancer-details">
						<div class="freelancer-details-list">
							<ul>
								<li>Country <strong><i class="icon-material-outline-location-on"></i> <?php echo $row['natinality']; ?></strong></li>
								<li>Websites <strong><?php echo $row['no_web']; ?></strong></li>
								
							</ul>
						</div>
						<a href="../user-profile.php?uid=<?php echo $key; ?>" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
					</div>
				</div>
			    	<?php
			    }
			} else {
			    echo "0 results";
			}
		}

	 ?>
	
	</div>
			<!-- Freelancers Container / End -->

			<!-- Pagination -->
			<!--<div class="clearfix"></div>
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
			 Pagination / End -->

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
<script type="text/javascript">
	function del(name){
 		$.ajax({
 			url : '../assets/delbook.php',
 			type : 'GET',
 			data : {cid : name},

 			success: function(data){
 				console.log('bookmark');
 			}

 		}); 		
 	}


 	function add(name){
 		//console.log(name);
 		$.ajax({

 			url : '../assets/addbook.php',
 			type : 'GET',
 			data : {addcid : name},

 			success: function(data){
 				console.log('add bookmark');
 			}

 		});
 	}
</script>
<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('.status-switch label').click(function() { 
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

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/freelancers-grid-layout-full-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:05 GMT -->
</html>