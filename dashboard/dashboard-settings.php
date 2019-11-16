<?php include '../assets/check.php';
	include '../assets/connect.php';
	include '../assets/show_result.php';

	$sql = "SELECT * FROM user,user_info WHERE `unique_id`='$uid' AND `uid`='$uid'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $email = $row['email'];
	        $fb = $row['facebook'];
	        $insta = $row['instagram'];
	        $twit = $row['twitter'];
	        $yt = $row['youtube'];
	    }
	} else {
	    echo "0 results";
	}
 ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:18 GMT -->
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
<script type="text/javascript" src="../js/set.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
				<h3>Settings</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="../home.php">Home</a></li>
						<li><a href="index.php">Dashboard</a></li>
						<li>Settings</li>
					</ul>
				</nav>
			</div>
	
	<form action="../assets/profile_update.php" method="post" enctype="multipart/form-data">
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<div class="row">
								<div class="col-xl-6">
									<h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
								</div>
								<div class="col-xl-6"><p align="right"><?php include_once '../assets/verify.php'; ?></p></div>	
							</div>
						</div>

						<div class="content with-padding padding-bottom-0">

							<div class="row">

								<div class="col-auto">
									<div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
										<img class="profile-pic" src="<?php echo $pp; ?>" alt="<?php echo $name ?>"/>
										<div class="upload-button"></div>
										<input class="file-upload" type="file" name="profile-pic" accept="image/*"/>
									</div>
								</div>

								<div class="col">
									<div class="row">
										<?php $wow = explode(" ", $name); 
												$n1 = $wow['0']; 
												$n2 = $wow['1'];
												?>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>First Name</h5>
												<input type="text" class="with-border" value="<?php echo $n1; ?>" name="fname">
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Last Name</h5>
												<input type="text" class="with-border" value="<?php echo $n2; ?>" name="lname">
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Mobile Number</h5>
												<input type="number" class="with-border" placeholder="<?php echo $mob; ?>" name="mob">
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Email</h5>
												<input type="text" class="with-border" placeholder="<?php echo $email; ?>" name="email">
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>  
				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-face"></i> My Profile</h3>
						</div>

						<div class="content">
							<ul class="fields-ul">
							<li>
								<div class="row">
									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Websites <i class="help-icon" data-tippy-placement="right" title="Add you all websites"></i></h5>
											<p style="color: red; display: none;" id=err><b>Enter the Website name</b></p>
											<!-- Skills List -->
											<div class="keywords-input-container">
											<a href="addwebsite.php">Add Your Website</a><hr>
												<div class="keywords-list">
												<a href="seeweblist.php?uid=<?php echo $uid; ?>">See Your All Websites</a>
											</div><br>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Expert On Topic <i class="help-icon" data-tippy-placement="right" title="Add up to 10 skills ( , )"></i></h5>
											<p style="color: red; display: none;" id=err1><b>Enter the Skill name</b></p>
											<!-- Skills List -->
											<div class="keywords-container">
												<div class="keyword-input-container">
													<input type="text" class="keyword-input with-border" placeholder="film review, poem, story, etc" id="skill_name" name="skills" />
												</div>
												<div class="keywords-list">
													<!-- <span class="keyword"><span class="keyword-remove"></span>Angular</span> -->
													 <?php $n = count($trskill);
													 for ($i=0; $i<$n; $i++) { 
													 	echo '<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">'.$trskill[$i].'</span></span>';
													 }
													 ?>
												</div><br><br>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Attachments</h5>
											<!-- Attachments -->
											<div class="attachments-container margin-top-0 margin-bottom-0">
												<div class="attachment-box ripple-effect">
													<span>Post Format</span>
													<i>PDF</i>
													<button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
												</div>
											</div>
											<div class="clearfix"></div>
											
											<!-- Upload Button -->
											<div class="uploadButton margin-top-0">
												<input class="uploadButton-input" type="file" accept="pdf/*, application/pdf" id="upload" name="attach" />
												<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
												<span class="uploadButton-file-name">Maximum file size: 10 MB</span>
											</div>

										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-xl-6">
										<div class="submit-field">
											<h5>Tagline</h5>
											<input type="text" class="with-border" value="<?php echo $tags; ?>" name="tagline">
										</div>
									</div>

									<div class="col-xl-6">
										<div class="submit-field">
											<h5>Nationality</h5>
											<select class="selectpicker with-border" data-size="7" title="Select Your Country" data-live-search="true" name="nation" id="nat">
												<option id="Argentina" value="Argentina">Argentina</option>
												<option id="Armenia" value="Armenia">Armenia</option>
												<option id="Aruba" value="Aruba">Aruba</option>
												<option id="Australia" value="Australia">Australia</option>
												<option id="Austria" value="Austria">Austria</option>
												<option id="Azerbaijan" value="Azerbaijan">Azerbaijan</option>
												<option id="Bahamas" value="Bahamas">Bahamas</option>
												<option id="Bahrain" value="Bahrain">Bahrain</option>
												<option id="Bangladesh" value="Bangladesh">Bangladesh</option>
												<option id="Barbados" value="Barbados">Barbados</option>
												<option id="Belarus" value="Belarus">Belarus</option>
												<option id="Belgium" value="Belgium">Belgium</option>
												<option id="Belize" value="Belize">Belize</option>
												<option id="Benin" value="Benin">Benin</option>
												<option id="Bermuda" value="Bermuda">Bermuda</option>
												<option id="Bhutan" value="Bhutan">Bhutan</option>
												<option id="Bulgaria" value="Bulgaria">Bulgaria</option>
												<option id="Burkina Faso" value="Burkina Faso">Burkina Faso</option>
												<option id="Burundi" value="Burundi">Burundi</option>
												<option id="Cambodia" value="Cambodia">Cambodia</option>
												<option id="Cameroon" value="Cameroon">Cameroon</option>
												<option id="Canada" value="Canada">Canada</option>
												<option id="Cape Verde" value="Cape Verde">Cape Verde</option>
												<option id="Cayman Islands" value="Cayman Islands">Cayman Islands</option>
												<option id="Colombia" value="Colombia">Colombia</option>
												<option id="Comoros" value="Comoros">Comoros</option>
												<option id="Congo" value="Congo">Congo</option>
												<option id="Cook Islands" value="Cook Islands">Cook Islands</option>
												<option id="Costa Rica" value="Costa Rica">Costa Rica</option>
												<option id="Côte d'Ivoire" value="Côte d'Ivoire">Côte d'Ivoire</option>
												<option id="Croatia" value="Croatia">Croatia</option>
												<option id="Cuba" value="Cuba">Cuba</option>
												<option id="Curaçao" value="Curaçao">Curaçao</option>
												<option id="Cyprus" value="Cyprus">Cyprus</option>
												<option id="Czech Republic" value="Czech Republic">Czech Republic</option>
												<option id="Denmark" value="Denmark">Denmark</option>
												<option id="Djibouti" value="Djibouti">Djibouti</option>
												<option id="Dominica" value="Dominica">Dominica</option>
												<option id="Aruba" value="Dominican">Dominican Republic</option>
												<option id="Aruba" value="Ecuador">Ecuador</option>
												<option id="Egypt" value="Egypt">Egypt</option>
												<option id="Guadeloupe" value="Guadeloupe">Guadeloupe</option>
												<option id="Guam" value="Guam">Guam</option>
												<option id="Guatemala" value="Guatemala">Guatemala</option>
												<option id="Guernsey" value="Guernsey">Guernsey</option>
												<option id="Guinea" value="Guinea">Guinea</option>
												<option id="Guinea-Bissau" value="Guinea-Bissau">Guinea-Bissau</option>
												<option id="Guyana" value="Guyana">Guyana</option>
												<option id="Haiti" value="Haiti">Haiti</option>
												<option id="Honduras" value="Honduras">Honduras</option>
												<option id="Hong Kong" value="Hong Kong">Hong Kong</option>
												<option id="Hungary" value="Hungary">Hungary</option>
												<option id="Iceland" value="Iceland">Iceland</option>
												<option id="India" selected value="India">India</option>
												<option id="Indonesia" value="Indonesia">Indonesia</option>
												<option id="Norway" value="Norway">Norway</option>
												<option id="Oman" value="Oman">Oman</option>
												<option id="Pakistan" value="Pakistan">Pakistan</option>
												<option id="Palau" value="Palau">Palau</option>
												<option id="Panama" value="Panama">Panama</option>
												<option id="Papua New Guinea" value="Papua New Guinea">Papua New Guinea</option>
												<option id="Paraguay" value="Paraguay">Paraguay</option>
												<option id="Peru" value="Peru">Peru</option>
												<option id="Philippines" value="Philippines">Philippines</option>
												<option id="Pitcairn" value="Pitcairn">Pitcairn</option>
												<option id="Poland" value="Poland">Poland</option>
												<option id="Portugal" value="Portugal">Portugal</option>
												<option id="Puerto Rico" value="Puerto Rico">Puerto Rico</option>
												<option id="Qatar" value="Qatar">Qatar</option>
												<option id="Réunion" value="Réunion">Réunion</option>
												<option id="Romania" value="Romania">Romania</option>
												<option id="Russian Federation" value="Russian Federation">Russian Federation</option>
												<option id="Rwanda" value="Rwanda">Rwanda</option>
												<option id="Swaziland" value="Swaziland">Swaziland</option>
												<option id="Sweden" value="Sweden">Sweden</option>
												<option id="Switzerland" value="Switzerland">Switzerland</option>
												<option id="Turkey" value="Turkey">Turkey</option>
												<option id="Turkmenistan" value="Turkmenistan">Turkmenistan</option>
												<option id="Tuvalu" value="Tuvalu">Tuvalu</option>
												<option id="Uganda" value="Uganda">Uganda</option>
												<option id="Ukraine" value="Ukraine">Ukraine</option>
												<option id="United Kingdom" value="United Kingdom">United Kingdom</option>
												<option id="United States" value="United States" >United States</option>
												<option id="Uruguay" value="Uruguay">Uruguay</option>
												<option id="Uzbekistan" value="Uzbekistan">Uzbekistan</option>
												<option id="Yemen" value="Yemen">Yemen</option>
												<option id="Zambia" value="Zambia">Zambia</option>
												<option id="Zimbabwe" value="Zimbabwe">Zimbabwe</option>
											</select>
										</div>
									</div>
									
									<div class="col-xl-12">
										<div class="submit-field">
											<h5>Introduce Yourself</h5>
											<textarea cols="30" rows="5" class="with-border" value="intro" name="intro"><?php echo $aboutme; ?></textarea>
										</div>
									</div>

								</div>
							</li>
						</ul>
						</div>
					</div>
				</div>

				<div class="col-xl-12">
					<div id="test1" class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-lock"></i> Social Links</h3>
						</div>

						<div class="content with-padding">
							<div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Facebook</h5>
										<input type="text" class="with-border" value="<?php echo $fb; ?>" name="fblink">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Instagram</h5>
										<input type="text" class="with-border" value="<?php echo $insta; ?>" name="insta">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Youtube Channel</h5>
										<input type="text" class="with-border" value="<?php echo $yt; ?>" name="yt">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Twitter</h5>
										<input type="text" class="with-border" value="<?php echo $twit; ?>" name="twit">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div id="test1" class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-lock"></i> Password & Security</h3>
						</div>

						<div class="content with-padding">
							<div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Current Password</h5>
										<input type="password" class="with-border" name="cur_pass">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>New Password</h5>
										<input type="password" class="with-border" name="npass">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Repeat New Password</h5>
										<input type="password" class="with-border" name="rnpass"> 
									</div>
								</div>

<!-- 								<div class="col-xl-12">
									<div class="checkbox">
										<input type="checkbox" id="two-step" checked>
										<label for="two-step"><span class="checkbox-icon"></span> Enable Two-Step Verification via Email</label>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
				
				<!-- Button -->
				<div class="col-xl-12">
					<input type="submit" name="save" class="button ripple-effect big margin-top-30" value="Save Changes">
					<!-- <a href="#" >Save Changes</a> -->
				</div>

			</div>
		</form>
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


<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);

		if ($('.submit-field')[0]) {
		    setTimeout(function(){ 
		        $(".pac-container").prependTo("#autocomplete-container");
		    }, 300);
		}
	}
</script>

<!-- Google API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places&amp;callback=initAutocomplete"></script>


</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:59:18 GMT -->
</html>../../