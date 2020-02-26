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
		$sql3="SELECT * from `user` where `unique_id`='$uid'";
		$run1=mysqli_query($conn,$sql3);
		if(mysqli_num_rows($run1) > 0){
			$row2=mysqli_fetch_assoc($run1);
			$name1=$row2['name'];
		}

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
		$sql2="SELECT * FROM `user` WHERE `unique_id`='$customer'";
		$run=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($run) > 0){
			$row1=mysqli_fetch_assoc($run);
			$to=$row1['email'];
			$name=$row1['name'];
			$subject = 'Order Complete';
			$from="team@mayankal.ml";
			$headers = "From: ".$from."\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$message="<!doctype html>
			<html>
			<head>
				<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
		
				</head>
			<body>
				<center><h1 style='margin-top: 30px;'><i>Mayankal</i></h1></center>
				<div class='container' style='background-color:#F3ECEC; font-size:20px;' >
				<p style='margin-top: 10px;'><i>Hello <b>".$name."</b></i></p>
				<p><i>Your order of Id:<mark>".$order_id."</mark> is completed by the user <b>".$name1.".</b></i></p>
				<p><i>Please review the user by click on this link. </i> <a href='https://www.mayankal.ml/user-profile.php?uid=".$uid."'>Visit User Profile</a> </p>
				<p><i>Please given your important review to mayankal.  </i><a href='http://localhost/project/mayankalv2/ReviewForm.php?uid=".$uid."'>Mayankal Review Link</a></p><br>
				<h5><i>Thankyou</i></h5>
				<h5><i><b>Mayankal team</b></i></h5><br>
				</div>
			</body>
			</html>";
			mail($to,$subject,$message,$headers);

			
		}

		$msg = "Your Order #".$order_id." is completed Check it Out";
		if(notification($customer, $msg, $uid) == "ok" && addcoins($get_coins, $customer) == "ok"){

			$sql = "DELETE FROM orders WHERE `order_id`='$order_id'";
				if (mysqli_query($conn, $sql)) {
				    ?>
				    <script type="text/javascript">
			 			window.open("../dashboard/allorders.php", "_self");
			 			alert("Congratullation Your Post Is Sent");
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