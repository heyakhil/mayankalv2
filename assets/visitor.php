<?php 
	include 'connect.php';
	include 'check.php';

	if (isset($_GET['uid'])) {
		$user_v = $_GET['uid'];
		$mon = date("M Y");
		$sql = "SELECT * FROM visitor WHERE `visitor_uid`='$user_v'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		        $take = $row['no_visit'];
		    }
		}


		$sql = "SELECT * FROM visitor WHERE `dates`='$mon' AND `visitor_uid`='$user_v'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    $take = $take + 1;
		    $sql = "UPDATE visitor SET no_visit='$take' WHERE `visitor_uid`='$user_v' AND `dates`='$mon'";
			if (mysqli_query($conn, $sql)) {
			    header("location:../user-profile.php?uid=$user_v");
			} else {
			    echo "Error updating record: " . mysqli_error($conn);
			}
		} else {
		    $sql = "INSERT INTO visitor (visitor_uid, dates, no_visit)
			VALUES ('$user_v', '$mon', '1')";

			if (mysqli_query($conn, $sql)) {
			    header("location:../user-profile.php?uid=$user_v");
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

		}
	}

 ?>