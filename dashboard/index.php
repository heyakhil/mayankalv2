<?php 
error_reporting(0);
	include '../assets/dash.php';
	include '../assets/connect.php';
	include '../assets/check.php';

 ?>

<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:14 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Mayankal - DashBoard</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/colors/blue.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d307659bfcb827ab0cc7ae8/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php include 'dashmenu.php'; ?>
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
				<h3>Hello!  <?php echo "Akhil" ?></h3>
				<span>We are happy to see you again!</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="../home.php">Home</a></li>
						<li>Dashboard</li>
					</ul>
				</nav>
			</div>
	
			<!-- Fun Facts Container -->
			<div class="fun-facts-container">
				<div class="fun-fact" data-fun-fact-color="#36bd78">
					<div class="fun-fact-text">
						<span>Total Coins</span>
						<h4><?php echo $coins; ?></h4>
					</div>
					<div class="fun-fact-icon"><i class="fa fa-hand-holding-usd"></i></div>
				</div>
				<div class="fun-fact" data-fun-fact-color="#b81b7f">
					<div class="fun-fact-text">
						<span>Total Orders</span>
						<h4><?php echo $orders; ?></h4>
					</div>
					<div class="fun-fact-icon"><i class="icon-material-outline-business-center"></i></div>
				</div>
				<div class="fun-fact" data-fun-fact-color="#efa80f">
					<div class="fun-fact-text">
						<span>Reviews</span>
						<h4><?php echo $tot_reviews; ?></h4>
					</div>
					<div class="fun-fact-icon"><i class="icon-material-outline-rate-review"></i></div>
				</div>

				<!-- Last one has to be hidden below 1600px, sorry :( -->
				<div class="fun-fact" data-fun-fact-color="#2a41e6">
					<div class="fun-fact-text">
						<span>This Month Views</span>
						<h4>987</h4>
					</div>
					<div class="fun-fact-icon"><i class="icon-feather-trending-up"></i></div>
				</div>
			</div>
			
			<!-- Row -->
			<div class="row">

				<div class="col-xl-12">
					<!-- Dashboard Box -->
					<div class="dashboard-box main-box-in-row">
						<div class="headline">
							<h3><i class="icon-feather-bar-chart-2"></i> Your Profile Views</h3>
<!-- 							<div class="sort-by">
								<select class="selectpicker hide-tick">
									<option>Last 6 Months</option>
									<option>This Year</option>
									<option>This Month</option>
								</select>
							</div> -->
						</div>
						<div class="content">
							<!-- Chart -->
							<div class="chart">
								<canvas id="chart" width="100" height="45"></canvas>
							</div>
						</div>
					</div>
					<!-- Dashboard Box / End -->
				</div>
				<div class="col-xl-4">

					<!-- Dashboard Box -->
					<!-- If you want adjust height of two boxes 
						 add to the lower box 'main-box-in-row' 
						 and 'child-box-in-row' to the higher box -->
					<!-- Dashboard Box / End -->
				</div>
			</div>
			<!-- Row / End -->

			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-6">
					<div class="dashboard-box">
						<div class="headline">
							<h3><i class="icon-material-baseline-notifications-none"></i> Notifications</h3>
							<button class="mark-as-read ripple-effect-dark" data-tippy-placement="left"  title="Mark all as read" onclick="myfun();">
							<i class="icon-feather-check-square"></i>
							</button>
						</div>
						<div class="content">
							<ul class="dashboard-box-list">
						<?php 
						$sql = "SELECT * FROM notification WHERE `uid`='$uid' ORDER BY id DESC LIMIT 5";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($result)) {
						    	 $sid=$row['uid'];
						    	 $sql4="select name from user where unique_id='$sid' ";
						    	 $run4=mysqli_query($conn,$sql4);
						    	 $row1=mysqli_fetch_assoc($run4);
						    	 $name=$row1['name'];
						     ?>
						     <li>
								<span class="notification-icon" ><i class="icon-material-outline-group"></i></span>
								<span class="notification-text">
									 <?php echo $row['notify']; ?> <strong><a href="../user-profile.php?uid=<?php echo $sid; ?>" target="_blank">[<?php echo $name; ?>]</a></strong>	
								</span>
								<!-- Buttons -->
							</li>
						     <?php
						    }
						} else {
						    echo "<center> No Notifications </center>";
						}

						?>
							</ul>
						</div>
					</div>
				</div>

				<!-- Dashboard Box -->
				<div class="col-xl-6">
					<div class="dashboard-box">
						<div class="headline">
							<h3><i class="icon-material-outline-assignment"></i> Orders</h3>
						</div>
						<div class="content">
							<ul class="dashboard-box-list">
					<?php 
						$sql = "SELECT * FROM order_complete WHERE `uid`='$uid' ORDER BY id desc limit 3";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($result)) {
						        ?>
						        <li>
									<div class="invoice-list-item">
									<strong><?php echo $row['title']; ?></strong>
										<ul>
											<li><span class="paid">Completed</span></li>
											<li>Order: #<?php echo $row['product_id']; ?></li>
											<li>Date: <?php echo $row['date']; ?></li>
										</ul>
									</div>  
									<!-- Buttons -->
								</li>
						        <?php
						    }
						} else {
						    echo "No Orders Data";
						}
					?>
					<?php 
						$sql = "SELECT * FROM orders WHERE `uid`='$uid' ORDER BY id desc limit 2";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($result)) {
						        ?>
						        <li>
									<div class="invoice-list-item">
									<strong><?php echo $row['post_cat']; ?></strong>
										<ul>
											<li><span class="unpaid">Uncomplete</span></li>
											<li>Order: #<?php echo $row['order_id']; ?></li>
											</li>
										</ul>
									</div>  
									<!-- Buttons -->
								</li>
						        <?php
						    }
						} else {
						    echo "No Orders Data";
						}
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
	function myfun(){
        $.ajax({
            url: "../assets/notifynum.php",
            type: "GET",
            data: {uid: "<?php echo $uid; ?>"}, 
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

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="../js/chart.min.js"></script>
<script>
$(document).ready(function() {
	/**
	 * call the data.php file to fetch the result from db table.
	 */
	$.ajax({

		url : "http://localhost/Akhil/Mayankalv2/assets/visitgraph.php",
		type : "GET",
		success : function(data){
			console.log(data);

			 var no_visit = {
			 	Months : [],
			 	lab : [],
			 };

			 var len = data.length;

			 for (var i = 0; i < len; i++) {
			 	no_visit.lab.push(data[i].dates);
		        no_visit.Months.push(data[i].no_visit);
		    }

		    Chart.defaults.global.defaultFontFamily = "Nunito";
	Chart.defaults.global.defaultFontColor = '#888';
	Chart.defaults.global.defaultFontSize = '14';

	var ctx = document.getElementById('chart').getContext('2d');

	var chart = new Chart(ctx, {
		type: 'line',
		// The data for our dataset
		data: {
			labels: no_visit.lab,
			// Information about the dataset
	   		datasets: [{
				label: "Visits",
				backgroundColor: 'rgba(42,65,232,0.08)',
				borderColor: '#2a41e8',
				borderWidth: "3",
				data: no_visit.Months,
				//data: [196,134,215,134,210,252, 236],
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


			  
		},
		error : function(data){
			console.log(data);
		}

	});
});


	
</script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:14 GMT -->
</html>