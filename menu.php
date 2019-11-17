<?php
error_reporting(0);
include 'assets/connect.php';
session_start();
$sql = "SELECT * FROM user_info WHERE `uid`='".$_SESSION['uid']."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $profile = $row['profile_pic'];
    }
} else {
    echo "";
}
if ($profile == "") {
	$profilepic = "images/download.jpg";
}else{
	$profilepic = "dashboard/img/".$profile;
}

$sql = "SELECT * FROM coins_earn WHERE `uid`='".$_SESSION['uid']."'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $coins = $row['coin_earn'];
	        $_SESSION['coins'] = $coinss;
	    }
	} else {
	    echo "";
	}

	if (isset($_SESSION['uid'])) {
	echo '
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="home.php"><img src="images/logom.png" data-sticky-logo="images/logom.png" data-transparent-logo="images/logom.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">
						<li><a href="home.php" id="home">Home</a></li>
						<li><a href="user.php" id="user">Top Users</a></li>
						<li><a href="expert.php" id="expert">Experts</a></li>
						<li><a href="blog.php" id="blog">Blog</a></li>
						<li><a href="top_web.php"id="tweb">Top Websites</a></li>
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
							';

							$sql = "SELECT * FROM notification WHERE `uid`='$uid' AND `seen`='0'";
							$result = mysqli_query($conn, $sql);
							$num = mysqli_num_rows($result);
							echo $num;

						echo'</span></a>
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
									<ul>';

							$sql = "SELECT * FROM notification WHERE `uid`='$uid' ORDER BY id DESC LIMIT 6";
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
							}
									
								echo'
									</ul>
								</div>
							</div>

						</div>

					</div>
					
					<!-- Messages -->
					<div class="header-notifications">
						<div class="header-notifications-trigger">
							'.$coins.'  <i class="fas fa-coins"></i>
						</div>
					</div>

				</div>
				<!--  User Notifications / End -->

				<!-- User Menu -->
				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="dashboard/dashboard-settings.php"><div class="user-avatar status-online"><img src="'.$profilepic.'" alt="'.$_SESSION['naam'].'"></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online"><img src="'.$profilepic.'" alt=""></div>
									<div class="user-name">
										'.$_SESSION['naam'].' <span>Freelancer</span>
									</div>
								</div>
								
								<!-- User Status Switcher -->
								<div class="status-switch" id="snackbar-user-status">
									<label class="user-online current-status">Online</label>
									<label class="user-invisible">Invisible</label>
									<!-- Status Indicator -->
									<span class="status-indicator" aria-hidden="true"></span>
								</div>	
						</div>
						
						<ul class="user-menu-small-nav">
							<li><a href="dashboard/index.php"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="dashboard/dashboard-settings.php"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="assets/logout.php?logout"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
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
	</div>';
 } else {
	echo '<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.php"><img src="images/logom.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">
						<li><a href="index.php" id="home">Home</a></li>
						<li><a href="user.php" id="user">Top Users</a></li>
						<li><a href="expert.php" id="expert">Experts</a></li>
						<li><a href="blog.php" id="blog">Blog</a></li>
						<li><a href="top_web.php"id="tweb">Top Websites</a></li>
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

				<div class="header-widget">
					<a href="#sign-in-dialog" class="popup-with-zoom-anim log-in-button"><i class="icon-feather-log-in"></i> <span>Log In / Register</span></a>
				</div>

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
	</div>';
} ?>
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#login">Log In</a></li>
			<li><a href="#register">Register</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Login -->
			<div class="popup-tab-content" id="login">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>We're glad to see you again!</h3>
					<span>Don't have an account? <a href="#" class="register-tab">Sign Up!</a></span>
				</div>
					
				<!-- Form -->
					<form action="assets/login.php" method="post" id="login-form">
					<div class="input-with-icon-left">
						<i class="fa fa-user"></i>
						<input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
					</div>
					<a href="#" class="forgot-password">Forgot Password?</a>				
				<!-- Button -->
				<input type="submit" name="login" class="button full-width button-sliding-icon ripple-effect"form="login-form" value="Login" name="login">
				</form>
				
				<!-- Social Login -->
				<!-- <div class="social-login-separator"><span>or</span></div>
				<div class="social-login-buttons">
					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Log In via Facebook</button>
					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Log In via Google+</button>
				</div> -->
			</div>

			<!-- Register -->
			<div class="popup-tab-content" id="register">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Let's create your account!</h3>
				</div>

				<!-- Account Type -->					
				<!-- Form -->
				<form action="assets/register.php" method="post" id="register-account-form">
					<div class="input-with-icon-left">
						<i class="fas fa-user"></i>
						<input type="text" class="input-text with-border" name="name-register" id="name-register" placeholder="Enter Your Name." required/>
					</div>
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password-register" id="password-register" placeholder="Password" required/>
					</div>
					
					<input class="margin-top-10 button full-width button-sliding-icon ripple-effect" type="submit" form="register-account-form" name="register" value="Register">
				</form>
				
				<!-- Social Login -->
<!-- 				<div class="social-login-separator"><span>or</span></div>
				<div class="social-login-buttons">
					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via Facebook</button>
					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via Google+</button>
				</div> -->

			</div>

		</div>
	</div>
</div>

 


<script type="text/javascript">
	var url = (window.location.href);
	var str = url.split("/");
 // var url = document.location.protocol + "//" + document.location.hostname + "/" + str[1];
 	let count = str.length;
	if (str[count-1].includes("expert.php") == true) {
		document.getElementById('expert').classList.add("current");
		console.log("done");
	}else if (str[count-1].includes("user.php") == true) {
		document.getElementById('user').classList.add("current");
		console.log("done");
	}else if (str[count-1].includes("home.php") == true) {
		document.getElementById('home').classList.add("current");
		console.log("done");
	}else if (str[count-1].includes("blog.php") == true) {
		document.getElementById('blog').classList.add("current");
		console.log("done");
	}else if (str[count-1].includes("ping.php") == true) {
		document.getElementById('ping').classList.add("current");
		console.log("done");
	}else if (str[count-1].includes("top_web.php") == true) {
		document.getElementById('tweb').classList.add("current");
		console.log("done");
	}else{
		//window.open("error404.php");
	}


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