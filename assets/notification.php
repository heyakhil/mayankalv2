
<?php  
	
	function notification($uid,$msg,$send_by)
		{
			include 'connect.php';
			$sql="INSERT INTO `notification`(`uid`, `notify`, `send_by`) VALUES ('$uid','$msg','$send_by')";
			if(mysqli_query($conn,$sql)){
				
			}else{	
				echo "not ok";
			}
		}

?>