<?php 
        //test update by neha on 2nd sep 2019
	include_once 'connect.php';
	include_once 'check.php';
	$order_id = $_GET['order_id'];
	$sql = "SELECT * FROM orders WHERE `order_id`='$order_id'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	       $order_of = $row['orderof_uid'];
	    }
	} else {
	    echo "0 results";
	}
	if (isset($_POST['post'])) {
		$da = date("Y-m-d");
		$hpost = $_POST['wpost'];
		$sql = "INSERT INTO `order_complete`(`name`, `product_id`, `uid`,`orderof_uid`, `mode`, `post`, `doc_link`, `zip`, `date`) VALUES ('$name','$order_id','$uid','$order_of','POST','$hpost',' ',' ','$da')";

		if (mysqli_query($conn, $sql)) {
		    $sql = "DELETE FROM orders WHERE `order_id`='$order_id'";
					if (mysqli_query($conn, $sql)) {
					    ?>
					    <script type="text/javascript">
				 			window.open("../dashboard/write_post.php?mode=check", "_self");
				 			alert("Congratullation You Post Is Sent");
						</script>
				<?php
					} else {
			 	    echo "Error deleting record: " . mysqli_error($conn);
			 	}
				 } else {
				     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				 } 
	}elseif (isset($_POST['link'])) {
		$da = date("Y-m-d");
		$glink = $_POST['glink'];
		$sql = "INSERT INTO `order_complete`(`name`, `product_id`, `uid`, `orderof_uid`,`mode`, `post`, `doc_link`, `zip`, `date`) VALUES ('$name','$order_id','$uid','$order_of','LINK','','$glink',' ','$da')";

		if (mysqli_query($conn, $sql)) {
		    $sql = "DELETE FROM orders WHERE `order_id`='$order_id'";
					if (mysqli_query($conn, $sql)) {
					    ?>
					    <script type="text/javascript">
				 			window.open("../dashboard/write_post.php?mode=check", "_self");
				 			alert("Congratullation You Doc Link Is Sent");
						</script>
				<?php
					} else {
			 	    echo "Error deleting record: " . mysqli_error($conn);
			 	}
				 } else {
				     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				 } 
	}elseif (isset($_POST['zipfile'])) {
		$da = date("Y-m-d");
	$filename = $_FILES["zip"]["name"];
	$source = $_FILES["zip"]["tmp_name"];
	$type = $_FILES["zip"]["type"];
	
	$name1 = explode(".", $filename);
	$accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
	foreach($accepted_types as $mime_type) {
		if($mime_type == $type) {
			$okay = true;
			break;
		} 
	}
	
	$continue = strtolower($name1[1]) == 'zip' ? true : false;
	if(!$continue) {
		?>
	    <script type="text/javascript">
 			window.open("../dashboard/write_post.php?mode=check", "_self");
 			alert("The file you are trying to upload is not a .zip file. Please try again.");
		</script>
		<?php
	}else{
		$target_path = "../dashboard/upload_zip/".$filename;  // change this to the correct site path
	if(move_uploaded_file($source, $target_path)) {
		$sql = "INSERT INTO `order_complete`(`name`, `product_id`, `uid`,`orderof_uid`, `mode`, `post`, `doc_link`, `zip`, `date`) VALUES ('$name','$order_id','$uid','$order_of','ZIP','','','$filename','$da')";

		if (mysqli_query($conn, $sql)) {
		    $sql = "DELETE FROM orders WHERE `order_id`='$order_id'";
					if (mysqli_query($conn, $sql)) {
					    ?>
					    <script type="text/javascript">
				 			window.open("../dashboard/write_post.php?mode=check", "_self");
				 			alert("Congratullation You ZIP is Uploaded and Sent");
						</script>
				<?php
					} else {
			 	    echo "Error deleting record: " . mysqli_error($conn);
			 	}
				 } else {
				     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				 } 
	} else {	
		$message = "There was a problem with the upload. Please try again.";
	}

	}
	}else{
		header("location:../dashboard/write_post.php?mode=check");
	}
 ?>
