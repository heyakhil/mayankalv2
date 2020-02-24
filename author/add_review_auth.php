<?php 
include_once '../assets/connect.php';
if (isset($_GET['send']) AND isset($_GET['receive'])) {
	$rate = $_POST['rating'];
	$name = $_POST['name'];
	if ($name == '') {
		$name = "Anonymous";
	}
	$date = date("M Y");
	$title = $_POST['reviewtitle'];
	$msg = $_POST['message'];
	$receive = $_GET['receive'];
	$send = $_GET['send'];

	
		$sql = "INSERT INTO `review`(`sender_uid`, `Name`,`title`,`re_msg`, `rating`, `date`,`reciver_uid`) VALUES ('$send','$name','$title','$msg','$rate','$date','$receive')";
		if (mysqli_query($conn, $sql)) {
			$sql = "SELECT SUM(rating) FROM review WHERE `reciver_uid`='$receive'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        $rate_val = $row['SUM(rating)'];
			        if ($rate_val>1 && $rate_val<100) {
			        	$data_rate = 1;
			        }elseif ($rate_val>100 && $rate_val<500) {
			        	$data_rate = 2;
			        }elseif ($rate_val>500 && $rate_val<1000) {
			        	$data_rate = 3;
			        }elseif ($rate_val>1000 && $rate_val<5000) {      	
			        	$data_rate = 4;
			        }else {
			        	$data_rate = 5;
			        }
			       $sql = "UPDATE author SET rating='$data_rate' WHERE `auth_id`='$receive'";
					if (mysqli_query($conn, $sql)) {
					    ?>
				    <script type="text/javascript">
				    	window.open("expertprofile.php?authid=<?php  echo $receive; ?>", "_self");
				    	alert("Your Review is submitted Successfully");
				    </script>
				    <?php
					} else {
					    echo "Error updating record: " . mysqli_error($conn);
					}
			    }
			} else {
			    echo "0 results";
			}

		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
	
}

 ?>