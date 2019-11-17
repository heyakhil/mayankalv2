<?php 
	include 'check.php';
	include 'connect.php';
	include 'notification.php';

	if (isset($_GET['link']) AND isset($_GET['to'])) {
		$web_id = $_GET['link'];
		$to = $_GET['to'];
		$sql = "SELECT * FROM web_info WHERE `id`='$web_id'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		        $user_uid = $row['web_uid'];
		    }
		} else {
		    echo "";
		}

		$sql = "SELECT * FROM user WHERE `unique_id`='$user_uid'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		        $user_email = $row['email'];
		        $user_name = $row['name'];
		    }
		} else {
		    echo "";
		}
		$sub = "Someone Pinged to write Content on your website";
		$msg = "Hello ".$user_name."
				".$name." has Pinged your website to write a beautyfull content on you website please visit to his profile ".." to order him some article
				Thankyou";
		if(mail($user_email, $sub, $msg)){
			echo ""
		}else{
			echo "problem";
		}

	}	


 ?>