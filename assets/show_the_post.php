<?php 
	include_once 'connect.php';
	include_once 'check.php';
	$ord = $_GET['order'];
	$sql = "SELECT * FROM order_complete WHERE `product_id`='$ord'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        echo $row['post'];
	    }
	} else {
	    echo "0 results";
	}


 ?>