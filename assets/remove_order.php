<?php 
	include_once 'connect.php';
	include_once 'check.php';
	include 'notification.php';
	if (isset($_GET['or_id'])) {
		$or = $_GET['or_id'];
		$d = date("Y-m-d");

		 $sql = "SELECT * FROM orders WHERE `order_id`='$or'";
		 $result = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($result) > 0) {
		     // output data of each row
		     while($row = mysqli_fetch_assoc($result)) {
		         $ubiid = $row['orderof_uid'];
				 $cat = $row['post_cat'];
				 $words=$row['min_word'];
		     }
		 } else {
		     echo "0 results";
		 }
		 $msg = "Your Order is deleted of Catagory ".$cat. " on ".$d."";
		 $sql = "INSERT INTO `deleted_orders`(`uid`, `order_id`, `order_of`, `cata`, `dateofor`) VALUES ('$uid','$or','$ubiid','$cat','$d')";
		 notification($ubiid, $msg, $uid);

		 if (mysqli_query($conn, $sql)) {
			 $sql = "DELETE FROM orders WHERE `order_id`='$or'";
			 
		 	if (mysqli_query($conn, $sql)) {
				$sql1="SELECT * FROM `coins_earn` WHERE `uid`='$ubiid'";
				$run1=mysqli_query($conn,$sql1);
				 if(mysqli_num_rows($run1) > 0){
					$date= date("Y-m-d ");
					$result1=mysqli_fetch_assoc($run1);
					$coin=$result1['coin_earn'];
					$total_coins=$coin+floor($words/15);
					$sql2="UPDATE `coins_earn` SET `coin_earn`='$total_coins',`Datess`='$date' WHERE `uid`='$ubiid'";
					
					if(mysqli_query($conn,$sql2)){
						$sql3="SELECT * FROM `user` WHERE `unique_id`='$ubiid'";
						$run2=mysqli_query($conn,$sql3);
						if(mysqli_num_rows($run2)){
							$result2=mysqli_fetch_assoc($run2);
							$to=$result2['email'];
							$name=$result2['name'];
							$sql4="SELECT * from `user` where `unique_id`='$uid'";
							$run3=mysqli_query($conn,$sql4);
							$row1=mysqli_fetch_assoc($run3);
							$name1=$row1['name'];
							$subject = 'Order Deleted';
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
										<center><h1 style='margin-top: 30px;''><i>Mayankal</i></h1></center>
										<div class='container' style='background-color:#F3ECEC; font-size:20px;' >
										<p style='margin-top: 10px;''><i>Hello <b>".$name."</b></i></p>
										<p><i>Your order of Id:<mark>".$or."</mark> is deleted by the user <b>".$name1.".</b></i></p>
										<p><i>May be the contect is not appropriate for the user.</i></p>
										<p><i>We have refund coin to your Account.</i></p><br>
										<h5><i>Thankyou</i></h5>
										<h5><i><b>Mayankal team</b></i></h5><br>
										</div>
									</body>
									</html>";
							mail($to,$subject,$message,$headers);
						}

					}
				 }
			    ?>
		 	    <script>
		 	    	window.open("../dashboard/allorders.php", "_self");
		 	    	alert("Orders is Deleted Successfully");
		 	    </script> 
		 	    <?php
		 	} else {
		 	    echo "Error deleting record: " . mysqli_error($conn);
		 	}
		 } else {
		     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		 }

	}else{
		header("location:../index.php");
	}
	

 ?>