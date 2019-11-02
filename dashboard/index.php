<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:14 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Mayankal</title>
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
				<h3>Hollo!  <?php echo "Akhil" ?></h3>
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
						<h4>22</h4>
					</div>
					<div class="fun-fact-icon"><i class="fa fa-hand-holding-usd"></i></div>
				</div>
				<div class="fun-fact" data-fun-fact-color="#b81b7f">
					<div class="fun-fact-text">
						<span>Total Orders</span>
						<h4>4</h4>
					</div>
					<div class="fun-fact-icon"><i class="icon-material-outline-business-center"></i></div>
				</div>
				<div class="fun-fact" data-fun-fact-color="#efa80f">
					<div class="fun-fact-text">
						<span>Reviews</span>
						<h4>28</h4>
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
							<div class="sort-by">
								<select class="selectpicker hide-tick">
									<option>Last 6 Months</option>
									<option>This Year</option>
									<option>This Month</option>
								</select>
							</div>
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
							<button class="mark-as-read ripple-effect-dark" data-tippy-placement="left" title="Mark all as read">
									<i class="icon-feather-check-square"></i>
							</button>
						</div>
						<div class="content">
							<ul class="dashboard-box-list">
								<li>
									<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
									<span class="notification-text">
										<strong>Michael Shannah</strong> applied for a job <a href="#">Full Stack Software Engineer</a>
									</span>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
									</div>
								</li>
								<li>
									<span class="notification-icon"><i class=" icon-material-outline-gavel"></i></span>
									<span class="notification-text">
										<strong>Gilber Allanis</strong> placed a bid on your <a href="#">iOS App Development</a> project
									</span>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
									</div>
								</li>
								<li>
									<span class="notification-icon"><i class="icon-material-outline-autorenew"></i></span>
									<span class="notification-text">
										Your job listing <a href="#">Full Stack Software Engineer</a> is expiring
									</span>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
									</div>
								</li>
								<li>
									<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
									<span class="notification-text">
										<strong>Sindy Forrest</strong> applied for a job <a href="#">Full Stack Software Engineer</a>
									</span>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
									</div>
								</li>
								<li>
									<span class="notification-icon"><i class="icon-material-outline-rate-review"></i></span>
									<span class="notification-text">
										<strong>David Peterson</strong> left you a <span class="star-rating no-stars" data-rating="5.0"></span> rating after finishing <a href="#">Logo Design</a> task
									</span>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
									</div>
								</li>
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
								<li>
									<div class="invoice-list-item">
									<strong>Professional Plan</strong>
										<ul>
											<li><span class="unpaid">Unpaid</span></li>
											<li>Order: #326</li>
											<li>Date: 12/08/2019</li>
										</ul>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="pages-checkout-page.html" class="button">Finish Payment</a>
									</div>
								</li>
								<li>
									<div class="invoice-list-item">
									<strong>Professional Plan</strong>
										<ul>
											<li><span class="paid">Paid</span></li>
											<li>Order: #264</li>
											<li>Date: 10/07/2019</li>
										</ul>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="pages-invoice-template.html" class="button gray">View Invoice</a>
									</div>
								</li>
								<li>
									<div class="invoice-list-item">
									<strong>Professional Plan</strong>
										<ul>
											<li><span class="paid">Paid</span></li>
											<li>Order: #211</li>
											<li>Date: 12/06/2019</li>
										</ul>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="pages-invoice-template.html" class="button gray">View Invoice</a>
									</div>
								</li>
								<li>
									<div class="invoice-list-item">
									<strong>Professional Plan</strong>
										<ul>
											<li><span class="paid">Paid</span></li>
											<li>Order: #179</li>
											<li>Date: 06/05/2019</li>
										</ul>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="pages-invoice-template.html" class="button gray">View Invoice</a>
									</div>
								</li>
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
	Chart.defaults.global.defaultFontFamily = "Nunito";
	Chart.defaults.global.defaultFontColor = '#888';
	Chart.defaults.global.defaultFontSize = '14';

	var ctx = document.getElementById('chart').getContext('2d');

	var chart = new Chart(ctx, {
		type: 'line',

		// The data for our dataset
		data: {
			labels: ["January", "February", "March", "April", "May", "June", "July"],
			// Information about the dataset
	   		datasets: [{
				label: "Views",
				backgroundColor: 'rgba(42,65,232,0.08)',
				borderColor: '#2a41e8',
				borderWidth: "3",
				data: [<?php echo "196,349,34"; ?>],
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

</script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:14 GMT -->
</html>