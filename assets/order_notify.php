<?php 
		include_once 'connect.php';
		$msg = "You have a new order of ".$cata." catagory please check it out";
	$sql = "INSERT INTO notification (uid, notify, send_by)
	VALUES ('$uuid', '$msg', '$uid')";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
 ?>