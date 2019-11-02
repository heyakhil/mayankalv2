<?php 
	include_once 'connect.php';
	include_once 'check.php';

	$sql = "SELECT * FROM user WHERE `unique_id`='$uid'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        if ($row['verify']==1) {
	        	echo '<a href="#" class="button ripple-effect">Verified</a>';
	        }else{
	        	echo '<a href="../assets/get_verified.php?uid='.$uid.'" class="button ripple-effect">Verify <i class="icon-material-baseline-mail-outline"></i></a>';
	        }
	    }
	} else {
	    echo "0 results";
	}

 ?>