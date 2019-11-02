<?php 
	include_once 'connect.php';
	include_once 'check.php';

	if (isset($_GET['or'])) {
			$or = $_GET['or'];
		$sql = "SELECT * FROM orders WHERE `order_id`='$or'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		        $catagory = $row['post_cat'];
		        $m_word = $row['min_word'];
		        $m_img = $row['min_image'];
		        $m_vid = $row['min_video'];
		        $imp = $row['imp_not'];
		        $des = $row['descrip'];	
		    }
	} else {
	    echo "0 results";
	}
	}else{
		error_reporting(0);
	}
	


 ?>