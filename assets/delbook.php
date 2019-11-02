<?php 
	include 'connect.php';
	include 'check.php';
	if (isset($_GET['cid'])) {
		$chid = $_GET['cid'];
		$sql = "DELETE FROM `bookmark` WHERE `book_user`='$chid'";
		if (mysqli_query($conn, $sql)) {
		    header("location:../user.php");
		} else {
		    echo "Error deleting record: " . mysqli_error($conn);
		}
	
	}


 ?>