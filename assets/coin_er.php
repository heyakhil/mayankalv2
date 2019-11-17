<?php 
	//error_reporting(0);
	include 'connect.php';
	include 'check.php';

	$sql = "SELECT * FROM coins_earn WHERE `uid`='$uid'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $coins = $row['coin_earn'];
	        $_SESSION['coins'] = $coins;
	    }
	} else {
	    echo "0 results";
	}

 ?>