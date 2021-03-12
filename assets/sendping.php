<?php 
	include 'check.php';
	include 'connect.php';
	include 'notification.php';
	$uid=$_SESSION['uid'];
	if (isset($_GET['web_id'])&& isset($uid)) {
		$web_id = $_GET['web_id'];
		
		$sql = "SELECT * FROM web_info WHERE `id`='$web_id'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
				$user_uid = $row['web_uid'];
				$web_name =$row['web_name'];
				$web_link=$row['web_link'];
		    }
		} else {
		    echo "";
		}
		$sql2="SELECT * FROM `ping` WHERE `uid`='$uid' and `ping_uid`='$web_id'";
		$result1=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result1) > 0){
			echo "<script>alert('You already ping the user/admin');window.location.replace('../top_web.php');</script>";
			
		}else{
		$sql = "SELECT * FROM user WHERE `unique_id`='$user_uid'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			//store the data in ping table
			$date=date('Y-m-d');
			$sql3="INSERT INTO `ping`(`uid`, `ping_uid`, `date`) VALUES ('$uid','$web_id','$date')";
			$result2=mysqli_query($conn,$sql3);
		
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		        $user_email = $row['email'];
		        $user_name = $row['name'];
		    }
		} else {
			echo "<script>alert('Some problem occur')</script>";
			header('location:../top_web.php');
		}
		$sql1="SELECT * FROM `user` WHERE `unique_id`='$uid'";
		$run1=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($run1) > 0){
			$row1=mysqli_fetch_assoc($run1);
			$name=$row1['name'];
		}


		$message="Your website".$web_name." got pingged by ".$name;
		notification($user_uid,$message,$uid);
		$sub = "Website Ping";
		$from="team@mayankal.ml";
		$headers = "From: ".$from."\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$msg="<!doctype html>
				<html>
					<head>
					<style>
							.button {
							background-color: #4CAF50; /* Green */
							border: none;
							color: white;
							padding: 15px 32px;
							text-align: center;
							text-decoration: none;
							display: inline-block;
							font-size: 22px;
							margin: 8px 2px;
							cursor: pointer;
							-webkit-transition-duration: 0.4s; /* Safari */
							transition-duration: 0.4s;
							}
							
							.button1 {
							box-shadow: 0 15px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
							}
        
        			</style>
						<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
					</head>
				<body>
					<center><h1 style='margin-top: 30px;'><i>Mayankal</i></h1></center>
					<i>
					<div class='container' style='background-color:#F3ECEC; font-size:20px;' >
					<p style='margin-top: 10px;'>Hello <b>".$user_name."</b></p>
					<p>Your website <a href='".$web_link."'>".$web_name."</a> pinged by <b>".$name."</b></p>
					<p>Please visit to his/her profile and give him chance to writerite a content for your website.</p>
					<a href='https://www.mayankal.ml/user-profile.php?uid=".$uid."' type='button' class='button button1'>Visit Profile</a><br><br></i>
					<h5><i>Thankyou</i></h5>
					<h5><i><b>Mayankal team</b></i></h5><br>
					</div>
					
				</body>
				</html>";
		if(mail($user_email,$sub,$msg,$headers)){
			echo "<script>alert('Your ping request is send the website owner')</script>";
			header('location:../top_web.php?estatus=done');
		}else{
			
			header('location:../top_web.php');
		}
	}


	}else{
		?>
		<script>
		alert("you are not login.please login");
		windows.location="../top_web.php"
		</script>
		<?php
	}


 ?>