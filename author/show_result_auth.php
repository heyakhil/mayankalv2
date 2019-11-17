<?php 
	include '../assets/connect.php';
	
	$authid=$_GET['authid'];
	$sql = "SELECT profile_pic FROM author WHERE `auth_id`='$authid'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $pic_name = $row['profile_pic'];
	    }
	}
	if ($pic_name == "") {
		$pp = "../images/download.jpg";
	}else{
		$pp = "../images/".$pic_name;
	}

	

 ?>