<?php 
	include_once 'connect.php';
	include_once 'check.php';
	if (isset($_GET['orid'])) {
		$or = $_GET['orid'];
		$d = date("Y-m-d");
		$sql = "SELECT * FROM orders WHERE `order_id`='$or'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		        $ubiid = $row['orderof_uid'];
		        $cat = $row['post_cat'];
		    }
		} else {
		    echo "0 results";
		}
		$msg = "Your Order is deleted of Catagory ".$cat. " on ".$d."";
		$sql = "INSERT INTO `deleted_orders`(`uid`, `order_id`, `order_of`, `cata`, `dateofor`) VALUES ('$uid','$or','$ubiid','$cat','$d')";
		$sql1 = "INSERT INTO notification (uid, notify, send_by)
		VALUES ('$ubiid', '$msg', '$uid')";

		if (mysqli_multi_query($conn, $sql) && mysqli_multi_query($conn, $sql1)) {
		    $sql = "DELETE FROM orders WHERE `order_id`='$or'";

			if (mysqli_query($conn, $sql)) {
			    ?>
			    <script>
			    	window.open("../dashboard/write_post.php?mode=check", "_self");
			    	alert("The Orders is Deleted Successfully");
			    </script>
			    <?php
			} else {
			    echo "Error deleting record: " . mysqli_error($conn);
			}
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	
	}else{
		header("location:../index.php");
	}
	

 ?>