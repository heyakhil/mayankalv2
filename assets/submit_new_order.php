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
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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