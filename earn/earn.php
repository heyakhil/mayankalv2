<?php 
	include_once '../assets/connect.php';
	include_once '../assets/check.php';
if (isset($_GET['uuid'])) {
	$uid = $_GET['uuid'];

	$sql = "SELECT * FROM coins_earn";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $sum = $row['coin_earn']+30;
	       $sql = "UPDATE coins_earn SET coin_earn='$sum' WHERE `uid`='$uid'";
			if (mysqli_query($conn, $sql)) {
			    header("location:../dashboard/index.php?verify=ok&process=compelete");
			} else {
			    echo "Error updating record: " . mysqli_error($conn);
			}
		}
	} else {
	    echo "0 results";
	}

} ?>