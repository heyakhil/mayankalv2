<!doctype html>
<html lang="en">
<!-- akhil here -->
<!-- Mirrored from www.vasterad.com/themes/hireo_082019/pages-pricing-plans.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:34 GMT -->
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
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<?php include '../assets/connect.php' ?>
	<?php include 'dashmenu.php'; ?>
	<!-- Header / End -->

</header>
<!-- fetch user's coins from database -->
<?php 
	$sql="SELECT * FROM `coins_earn` WHERE `uid`='$uid'";
	$run=mysqli_query($conn,$sql);
	$result=mysqli_fetch_assoc($run);

?>


<div class="clearfix"></div>
<!-- Header Container / End -->
<!-- include check page for user's uid and name -->

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<!--Withdraw-->
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6" style="background-color:rgb(189, 168, 211)">
							<center>
								<h1>Coins Earn</h1>
								<h1><?php echo $result['coin_earn']; ?></h1>
							
							
							</center>
							
							<!--<input type="text">-->
						</div>
						<div class="col-md-6"style="background-color:rgb(189, 168, 211)">
							<center><h1>Amount</h1>
								<h1>
									<?php 
										$rs=$result['coin_earn']/100;
										echo $rs;
								 	?>
								 	
								</h1>
							</center>
							<!--<input type="text">-->

							
							</div>
												
						</div>
				
					<div class="pricing-plan">

			</div>
					</div><br><br>

					<div class="container">

					
							<h2>Withdraw Data</h2>
    			<form action="../assets/widthpro.php?mobdata=true" method="post">
							<select id="mySelect"  name="select1"  onchange="myFunction()">
							<option selected value="0">--Withdraw Through--</option>
							<option value="1">G Pay</option>
							<option value="2">Paytm</option>
							<option value="3">PhonePay</option>
							<option value="4">Bank Account</option>
						  </select>      		
							<br>
							
						<div id="demo" style="display:none">
							<p>
				
								Enter your Mobile no:
								<input type="number" name="mno" id="number" required="required">
								<input type="submit" name="num">
							</p>
						</div>
					</form>

					<form action="../assets/widthpro.php?bank=true" method="post">	

						
						<div  id="dmmm" style="display:none">
						<p>
				
							Enter your Name:
							<input type="text" name="name" required>
		
							Enter your Bank Account no:
							<input type="number" name="acno" required>
		
							Enter your IFSC code:
							<input type="text" name="ifsccode"  required>
							<input type="submit" name="submit">
						</p>
					</div>
				</form>
				</div>
			
		
			<!--<div id="display"></div>-->
			
			<script>
			
			  		function myFunction() {
				// var x = document.getElementById("mySelect").value;
				//document.getElementById("demo").innerHTML = "You selected: " + x;
				//document.getElementById('demo').style.display='block';
		
							var selector = document.getElementById('mySelect');
							var value = selector[selector.selectedIndex].value;
				
							if(value=="0")
								//document.getElementById('display').innerHTML = "farhan";
								{
									document.getElementById('demo').style.display='none';
									document.getElementById('dmmm').style.display='none';
									return false;
								}	

		  					if(value=="1")
							//document.getElementById('display').innerHTML = "farhan";
								{
									document.getElementById('demo').style.display='block';
									document.getElementById('dmmm').style.display='none';
									return false;
								}
		  					if(value=="2")
							//document.getElementById('display').innerHTML = "alam";
								{
									document.getElementById('demo').style.display='block';
									document.getElementById('dmmm').style.display='none';
									return false;
								}
							if(value=="3")
								//document.getElementById('display').innerHTML = "alam";
								{
									document.getElementById('demo').style.display='block';
									document.getElementById('dmmm').style.display='none';
									return false;
								}
							if(value=="4")
								//document.getElementById('display').innerHTML = "alam";
								{
									document.getElementById('dmmm').style.display='block';
									document.getElementById('demo').style.display='none';
									return false;
								}
		
								//document.getElementById("myForm").submit();
			  		}
				
				
			</script>

		</div>
</div>
						
							
						</div>
							
			    	 
						</div>
					</div>
			</div>
		</div>
	</div>
</div>



					</div>
					
				</div>
			</div>

		</div>

	</div>
</div>


<div class="margin-top-80"></div>

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
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
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

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/pages-pricing-plans.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:34 GMT -->
</html>