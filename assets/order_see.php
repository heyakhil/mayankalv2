<?php 
	include 'connect.php';
	include 'check.php';

	if ($_GET['uid'] != "") {
		
		$uid = $_GET['uid'];
		$sql = "UPDATE order_complete SET seen='1' WHERE `uid`='$uid'";

		if (mysqli_query($conn, $sql)) {
		    header("location:../dashboard/sidebar.php");
		} else {
		    echo "Error updating record: " . mysqli_error($conn);
		}


	}


 ?>