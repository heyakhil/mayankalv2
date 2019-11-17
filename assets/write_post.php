<?php 
	//error_reporting(0);
	include 'connect.php';
	include 'check.php';
	include 'notification.php';
	include 'allfunc.php';

	if (isset($_POST['submit'])) {
		$title = $_POST['title'];
		$written_post = mysqli_real_escape_string($conn, $_POST['editor']);
		$da = date("Y-m-d");
		$order_id = $_POST['order_id'];
		$customer = $_POST['customer'];
		$sql = "SELECT * FROM orders WHERE `order_id`='$order_id'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		        $get_coins = $row['coins'];
		    }
		} else {
		    echo "0 results";
		}


	$sql = "INSERT INTO `order_complete`(`name`, `product_id`, `uid`, `orderof_uid`, `title`, `post`, `date`) VALUES ('$name','$order_id','$uid','$customer','$title','$written_post','$da')";
	if (mysqli_query($conn, $sql)) {
   $sql1 = "INSERT INTO completed_orders
		SELECT * FROM orders WHERE `order_id` = '$order_id'";	
		if (mysqli_query($conn, $sql1)) {

		$msg = "Your Order #".$order_id." is completed Check it Out";
		if(notification($customer, $msg, $uid) == "ok" && addcoins($get_coins, $customer) == "ok"){

			$sql = "DELETE FROM orders WHERE `order_id`='$order_id'";
				if (mysqli_query($conn, $sql)) {
				    ?>
				    <script type="text/javascript">
			 			window.open("../dashboard/allorders.php", "_self");
			 			alert("Congratullation You Post Is Sent");
					</script>
				<?php
					} else {
			 	    echo "Error deleting record: " . mysqli_error($conn);
			 	}
			 } else {
			     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			 }

			}else{
			?>
		    <script type="text/javascript">
	 			window.open("../dashboard/allorders.php", "_self");
	 			alert("There Is Some Problem");
			</script>
			<?php
		}


		}else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	}else{
		header("location:logout.php");
	}


 ?>