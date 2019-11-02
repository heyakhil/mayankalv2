<?php 
	include_once 'connect.php';
	include_once 'check.php';
	
	$sql = "SELECT profile_pic FROM user_info WHERE `uid`='$uid'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $pic_name = $row['profile_pic'];
	    }
	} else {
	    echo "0 results";
	}
	if ($pic_name == "") {
		$pp = "../images/download.jpg";
	}else{
		$pp = "../dashboard/img/".$pic_name;
	}

	$sql = "SELECT about_me,skills, mob_no, tagline, natinality FROM user_info WHERE `uid`='$uid'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $aboutme = $row['about_me'];
	        $skills = $row['skills'];
	        $trskill = explode(",", $skills);
	        $mobile = $row['mob_no'];
	        $tgl = $row['tagline'];
	    }
	} else {
	    echo "0 results";
	}

	if ($mobile == "") {
		$mob = "Enter Mobile Number";
	}else{
		$mob = $mobile;
	}

	if ($tgl == "") {
		$tags = "Enter you Tagline";
	}else{
		$tags = $tgl;
	}
	if ($tgl == "") {
		$tags = "--Tagline--";
	}else{
		$tags = $tgl;
	}

 ?>