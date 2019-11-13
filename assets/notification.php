<?php include 'connect.php' ?>
<?php  

	function notification($uid,$msg,$send_by)
		{
			$sql="INSERT INTO `notification`(`uid`, `notify`, `send_by`) VALUES ('$uid','$msg','$send_by')";
			mysqli_query($conn,$sql);
		}

?>