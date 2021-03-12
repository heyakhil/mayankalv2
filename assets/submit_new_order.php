<?php 
error_reporting(0);
	include_once 'connect.php';
	include_once 'check.php';
	include_once 'coin_er.php';
	include_once 'notification.php';
	include_once 'coin_reduction.php';

	if ($_GET['psu']!='') {
		$uuid = $_GET['psu'];
		
	}else{
		header("location:../index.php");
	}
	if (isset($_POST['submit'])) {
		$cata = $_POST['post_cat'];
		$min_word = $_POST['mword'];
		$imp_n = $_POST['notice'];
		$describe = mysqli_real_escape_string($conn, $_POST['describe']);
		$order_id = date("d-m").mt_rand(1000, 99999).date("Y");
		$coins_red = round($min_word/15);
		$put_coins = round(($coins_red*40)/100);
		$dates = date("Y-m-d");
		if ($coins_red>=30) {
		if ($coins<$coins_red) {
            ?>
            <script type="text/javascript">
                window.open("../user-profile.php?uid=<?php echo $uuid; ?>", "_self");
                alert("Sorry! you have very less coins, Earn Some");
            </script>
            <?php
        }else{
        $sql = "INSERT INTO `orders`(`uid`, `orderof_uid`, `post_cat`, `min_word`, `imp_not`, `descrip`, `order_id`, `coins`, `dates`) VALUES ('$uuid','$uid','$cata','$min_word','$imp_n','$describe','$order_id', '$put_coins', '$dates')";
		$msg = "You have a new order of ".$cata." catagory please check it out";
	
        if (mysqli_query($conn, $sql)) {
			notification($uuid, $msg, $uid);
			$sql1="SELECT * FROM `user` WHERE `unique_id`='$uuid'";
			$result=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($result) > 0){
				$row=mysqli_fetch_assoc($result);
				$name=$row['name'];
				$email=$row['email'];
				$sql2="SELECT * FROM `user` WHERE `unique_id`='$uid'";
				$result1=mysqli_query($conn,$sql2);
				if(mysqli_num_rows($result1) > 0){
					$row1=mysqli_fetch_assoc($result1);
					$name1=$row1['name'];
					
					$to=$email;
					$subject = 'New Order';
					$from="team@mayankal.ml";
					$headers = "From: ".$from."\r\n";
					$headers .= "MIME-Version: 1.0\r\n";
					$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

					$message="<html>
					<head>
						<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
						</head>
					<body>
						<center><h1 style='margin-top: 30px;'><i>Mayankal</i></h1></center>
						<div class='container' style='background-color:#F3ECEC; font-size:20px;' >
						<p style='margin-top: 10px;'><i>Hello <b>".$name."</b></i></p>
						<p><i>Your got an order of order Id:<mark>".$order_id."</mark> by <b>".$name1.".</b></i></p>
						<p><i>Please check your order now and completed as fast as possible for better customer experience.</i></p>
						<p><i><b>Category :</b></i> Sport </p>
						<p><i><b>Discription : </b></i>".$describe."</p><br>
						<h5><i>Thankyou</i></h5>
						<h5><i><b>Mayankal team</b></i></h5><br>
						</div>
					</body>
					</html>";
					mail($to,$subject,$message,$headers);
				}
			}

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
		 if(coin_reduce($uid, $coins_red) == "yes"){
			 ?>
			<script type="text/javascript">
				window.open("../user-profile.php?uid=<?php echo $uuid; ?>", "_self");
             	alert("Your Order is send successfully");
            </script>
			<?php
		 }else{
			echo "../error404.php";
		 }
        
	    }else{
	    	 ?>
			<script type="text/javascript">
				window.open("../user-profile.php?uid=<?php echo $uuid; ?>", "_self");
             	alert("You should give order min 500 words");
            </script>
			<?php
	    }
	}else{
		header("location:../index.php");
	}
	
	

 ?>