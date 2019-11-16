<?php 
include 'connect.php'; 
include 'check.php';
include 'notification.php';

	if ($_GET['uid'] != '' && $_GET['to'] != '') {
		
		$this_user = $_GET['uid'];
		$to_user = $_GET['to'];
		$msg = "The User has pinged you to order him some work";
		//Send notification to the user whom user is pinging for purpose

		if (notification($to_user, $msg, $this_user)) {
		    header("location:../user-profile.php?uid=$to_user");
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

?>