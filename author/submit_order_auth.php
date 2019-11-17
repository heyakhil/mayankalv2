<?php 
	include_once '../assets/connect.php';
	include_once '../assets/check.php';
	include_once '../assets/coin_er.php';
	include_once '../assets/notification.php';
	include_once 'coin_reductionauth.php';

	if ($_GET['psu']!='') {
		$uuid = $_GET['psu'];
		
	}else{
		header("location:../index.php");
	}
	if (isset($_POST['submit'])) {
		$cata = $_POST['post_cat'];
		
		
		$describe = mysqli_real_escape_string($conn, $_POST['describe']);
		$order_id = date("d-m").mt_rand(1000, 99999).date("Y");
		$sql="SELECT * FROM `coins_earn` WHERE  `uid`='$uid'";
		$run=mysqli_query($conn,$sql);
		$result=mysqli_fetch_assoc($run);

		$coins_red = $result['coin_earn'];
		if ($coins_red < 150) {
            ?>
            <script type="text/javascript">
                window.open("expertprofile.php?authid=<?php echo $uuid; ?>", "_self");
                alert("Sorry! you have very less coins, Earn Some");
            </script>
            <?php
        }else{
        $sql = "INSERT INTO `author_orders`(`auth_uid`, `orderof_uid`, `post_cat`, `descrip`, `order_id`) VALUES ('$uuid','$uid','$cata','$describe','$order_id')";
		$msg = "You have a new order of ".$cata." catagory please check it out";
        if (mysqli_query($conn, $sql)) {
            notification($uuid, $msg, $uid);
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		$coins_red=150;
		 if(coin_reduce($uid, $coins_red) == "yes"){
			 ?>
			<script type="text/javascript">
				window.open("expertprofile.php?authid=<?php echo $uuid; ?>", "_self");
             	alert("Your Order is send successfully");
            </script>
			<?php
		 }else{
			echo "../error404.php";
		 }
        }
	}else{
		header("location:../index.php");
	}


 ?>