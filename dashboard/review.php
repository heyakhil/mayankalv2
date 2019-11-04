<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:14 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
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
	<?php include 'dashmenu.php'; ?>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<?php include 'sidebar.php'; ?>
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Reviews</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="../home.php">Home</a></li>
						<li><a href="index.php">Dashboard</a></li>
						<li>Reviews</li>
					</ul>
				</nav>
			</div>

			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-6">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-business"></i> Rate Employers</h3>
						</div>
					
							<?php
								include('../assets/connect.php');
								
								$sql="SELECT * FROM review where reciver_uid='$uid' ORDER BY id DESC LIMIT 0,8";
									$run=mysqli_query($conn,$sql);

									if(mysqli_num_rows($run) > 0){
									     while($result=mysqli_fetch_assoc($run)){
									     		
									    ?> 

							
						<div class="content">
							<ul class="dashboard-box-list">
								
								
								<li>
									<div class="boxed-list-item">
										<!-- Content -->
										<div class="item-content">
											<h4><?php echo $result['title']; ?></h4>
											<h5>Review by&nbsp;<?php echo $result['Name']; ?></h5>											
											<div class="item-details margin-top-10">
												<div class="star-rating" data-rating=<?php echo $result['rating'] ?>></div>
												<div class="detail-item"><i class="icon-material-outline-date-range"></i><?php echo $result['date']; ?></div>
											</div>
											<div class="item-description">
												<p><?php echo $result['re_msg']; ?></p>
											</div>
										</div>
									</div>
									
								</li>
							</ul>
						</div> 
						<?php 

										}
											}
												?>
					</div>
				</div>

				<!-- Dashboard Box -->
				<div class="col-xl-6">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-face"></i> Rate Freelancers</h3>
						</div>
						<?php
						$sql="SELECT * FROM review where reciver_uid='$uid' ORDER BY id DESC LIMIT 9,16";
						$run=mysqli_query($conn,$sql);

							if(mysqli_num_rows($run) > 0){
								while($result=mysqli_fetch_assoc($run)){
									     		
									 ?> 
						            <div class="content">
							            <ul class="dashboard-box-list">
							
								            <li>
									           <div class="boxed-list-item">
										           <!-- Content -->
										            <div class="item-content">
											        	<h4><?php echo $result['title']; ?></h4>
														<h5>Review by&nbsp;<?php echo $result['Name']; ?></h5>	
											             <div class="item-details margin-top-10">
												            <div class="star-rating" data-rating=<?php echo $result['rating'] ?>></div>
												            <div class="detail-item"><i class="icon-material-outline-date-range"></i> <?php echo $result['date']; ?></div>
											             </div>
														<div class="item-description">
																<p><?php echo $result['re_msg']; ?></p>
														</div>
													</div>
												</div>
									
											</li>
										</ul>
									</div>
					</div>
					<?php  }
								}
									?>
			</div>
		</div>
	</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
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



<!-- Edit Review Popup
================================================== -->

<!-- Edit Review Popup / End -->


<!-- Leave a Review for Freelancer Popup
================================================== -->

<!-- Leave a Review Popup / End -->



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

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="js/chart.min.js"></script>
<script>
	Chart.defaults.global.defaultFontFamily = "Nunito";
	Chart.defaults.global.defaultFontColor = '#888';
	Chart.defaults.global.defaultFontSize = '14';

	var ctx = document.getElementById('chart').getContext('2d');

	var chart = new Chart(ctx, {
		type: 'line',

		// The data for our dataset
		data: {
			labels: ["January", "February", "March", "April", "May", "June"],
			// Information about the dataset
	   		datasets: [{
				label: "Views",
				backgroundColor: 'rgba(42,65,232,0.08)',
				borderColor: '#2a41e8',
				borderWidth: "3",
				data: [196,132,215,362,210,252],
				pointRadius: 5,
				pointHoverRadius:5,
				pointHitRadius: 10,
				pointBackgroundColor: "#fff",
				pointHoverBackgroundColor: "#fff",
				pointBorderWidth: "2",
			}]
		},

		// Configuration options
		options: {

		    layout: {
		      padding: 10,
		  	},

			legend: { display: false },
			title:  { display: false },

			scales: {
				yAxes: [{
					scaleLabel: {
						display: false
					},
					gridLines: {
						 borderDash: [6, 10],
						 color: "#d8d8d8",
						 lineWidth: 1,
	            	},
				}],
				xAxes: [{
					scaleLabel: { display: false },  
					gridLines:  { display: false },
				}],
			},

		    tooltips: {
		      backgroundColor: '#333',
		      titleFontSize: 13,
		      titleFontColor: '#fff',
		      bodyFontColor: '#fff',
		      bodyFontSize: 13,
		      displayColors: false,
		      xPadding: 10,
		      yPadding: 10,
		      intersect: false
		    }
		},


});

</script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:14 GMT -->
</html>