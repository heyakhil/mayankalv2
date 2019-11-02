<?php 
	include 'connect.php';
	if(isset($_GET['uid'])){
    //connect to the db etc...
		$uid  = $_GET['uid'];
    $sql = "UPDATE notification SET seen='1' WHERE `uid`='$uid'";

	if (mysqli_query($conn, $sql)) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}
    //this'll send the new statistics to the jquery code

    //echo json_encode($results);
}

 ?>