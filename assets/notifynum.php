<?php 
	include 'connect.php';
	if(isset($_GET['uid'])){
    //connect to the db etc...
		$uid  = $_GET['uid'];
    $sql = "UPDATE notification SET seen='1' WHERE `send_by`='$uid'";

	if (mysqli_query($conn, $sql)) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}
	  
}

 ?>