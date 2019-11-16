<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Start">
							<li id="index"><a href="index.php"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li id="bookmark"><a href="bookmark.php"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>
							<li id="review"><a href="review.php"><i class="icon-material-outline-rate-review"></i> Reviews</a></li>
						</ul>
						<?php include '../assets/connect.php' ?>
				
							<?php
									$sql="SELECT * FROM `orders` WHERE `uid`='$uid' AND `seen`='0'";
									$run=mysqli_query($conn,$sql);
									$num=mysqli_num_rows($run);
							?>
						<ul data-submenu-title="Order Manager">
							<li><a href="#"><i class="icon-material-outline-business-center"></i>Write Content</a>
								<ul>
									<li onclick="orderseen(this.id);" id="<?php echo $uid; ?>"><a href="allorders.php">All Orders<span class="nav-tag"><?php echo $num; ?></span></a></li><!--new order -->
									<li><a href="CompletedOrders.php">Complete Your Orders</a></li>
									<li><a href="Customer.php">Your Customer's</a></li>
								</ul>	
							</li>
							<li><a href="#"><i class="icon-material-outline-assignment"></i>Track Your Order</a>
								<ul>
									<li><a href="completed.php">Completed Orders <span class="nav-tag">2</span></a></li>
									<li><a href="dashboard-my-active-bids.html">Deleted Orders <span class="nav-tag">4</span></a></li>
								</ul>	
							</li>
						</ul>

						<ul data-submenu-title="Account">
							<li id="withdraw"><a href="earning.php"><i class="fa fa-dollar-sign"></i> Earning</a></li>
							<li id="withdraw"><a href="withdraw.php"><i class="fa fa-dollar-sign"></i> Withdraw</a></li>
							<li id="setting"><a href="dashboard-settings.php"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="../assets/logout.php?logout=ok"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
					</div>
				</div>
				<!-- Navigation / End -->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>


<script type="text/javascript">
	var url = (window.location.href);
	var str = url.split("/");

 	let count = str.length;
	if (str[count-1].includes("index.php") == true) {
		document.getElementById('index').classList.add("active");
		console.log("done");
	}else if (str[count-1].includes("massage.php") == true) {
		document.getElementById('msg').classList.add("active");
		console.log("done");
	}else if (str[count-1].includes("bookmark.php") == true) {
		document.getElementById('bookmark').classList.add("active");
		console.log("done");
	}else if (str[count-1].includes("review.php") == true) {
		document.getElementById('review').classList.add("active");
		console.log("done");
	}else if (str[count-1].includes("withdraw.php") == true) {
		document.getElementById('withdraw').classList.add("active");
		console.log("done");
	}else if (str[count-1].includes("dashboard-settings.php") == true) {
		document.getElementById('setting').classList.add("active");
		console.log("done");
	}else{
		//window.open("error404.php");
	}



	function orderseen(id){
 		$.ajax({

 			url : '../assets/order_see.php',
 			type : 'GET',
 			data : {uid : id},

 			success: function(data){
 				console.log('Order Seen');
 			}

 		});
 	}
</script>