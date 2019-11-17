<?php 
declare(strict_types=1);
	//include 'check.php';
		
	function addcoins($coin, $uid)
		{
			include 'connect.php';
			$sql = "SELECT * FROM `coins_earn` WHERE `uid`='$uid'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        $present_coin = $row['coin_earn'];
			        $new_coin = $present_coin + $coin;
			    }
			} else {
			    echo "0 results";
			}

			$data=date("Y-m-d");
			$sql = "UPDATE coins_earn SET coin_earn='$new_coin', Datess = '$data' WHERE `uid`='$uid'";

			if (mysqli_query($conn, $sql)) {
			    return "ok";
			} else {
			    echo "Error updating record: " . mysqli_error($conn);
			}
		}
	






 ?>