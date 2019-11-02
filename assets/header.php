<?php 
include_once 'check.php';
$sql = "SELECT * FROM user_info WHERE `uid`='$uid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $profile = $row['profile_pic'];
    }
} else {
    echo "0 results";
} ?>
<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index-2.html"><img src="https://1.bp.blogspot.com/-_zuGv_85W_I/XTftO6XNZSI/AAAAAAAAAlA/P6wUP2NxiB0403sBsS7G9tuFlYZPPBT0wCLcBGAs/s1600/logo.jpg" alt=""></a>
				</div>

				<!-- Main Navigation -->
		<nav id="navigation">
			<ul id="responsive">
				<li><a href="../home.php" class="current">Home</a></li>
				<li><a href="../get_work.php?get=price">Get Work</a></li>
				<li><a href="../single-freelancer-profile.php">All Jobs</a></li>
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
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-bell"></i></a>
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
						<?php 
						$sql = "SELECT * FROM notification WHERE `uid`='$uid' ORDER BY id DESC LIMIT 6";
							$result = mysqli_query($conn, $sql);

							if (mysqli_num_rows($result) > 0) {
							    // output data of each row
							    while($row = mysqli_fetch_assoc($result)) {
							        echo'<li class="notifications-not-read">
											<a href="dashboard-manage-candidates.html">
												<span class="notification-text">
													'.$row['notify'].'
												</span>
											</a>
										</li>';
							    }
							} else {
							    echo "0 results";
							}
									 ?>
										<!-- Notification -->
										<!-- Notification -->
									</ul>
								</div>
							</div>

						</div>

					</div>
					
					<!-- Messages -->
					<div class="header-notifications">
						<div class="header-notifications-trigger">
							<h3><?php echo $_SESSION['coins']; ?> <i class="fa fa-coins"></i></h3>
						</div>
						<!-- Dropdown -->
					</div>

				</div>
				<!--  User Notifications / End -->

				<!-- User Menu -->
				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#"><div class="user-avatar status-online"><img src="<?php echo "../dashboard/img/".$profile;?>" alt=""></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online"><img src="<?php echo "../dashboard/img/".$profile;?>" alt=""></div>
									<div class="user-name">
										<?php echo $name; ?> <span>Freelancer</span>
									</div>
								</div>
								
								<!-- User Status Switcher -->
						</div>
						
						<ul class="user-menu-small-nav">
							<li><a href="dashboard/index.php"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="dashboard-settings.php"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="../dashboard/earning.php"><i class="fa fa-hand-holding-usd"></i> Earn Coins</a></li>
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