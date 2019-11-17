<?php 
include '../assets/connect.php';
include '../assets/show_result.php';

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

 ?>


<header id="header-container" class="fullwidth dashboard-header not-sticky">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.php"><img src="../images/logom.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">
						<li><a href="../home.php">Home</a></li>
						<li><a href="../user.php">Top User's</a></li>
						<li><a href="../expert.php">Experts</a></li>
						<li><a href="../blog.php">Blog</a></li>
						<li><a href="../top_web.php">Top Websites</a></li>
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
							<li><a href="index.php"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="dashboard/dashboard-settings.php"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="../assets/logout.php?logout"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
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

<script type="text/javascript">
	function myfun(){
        $.ajax({
            url: "../assets/notifynum.php",
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


