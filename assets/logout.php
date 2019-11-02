<?php 
	include_once 'check.php';
	if (isset($_GET['logout'])) {
		$_SESSION['naam'] = '';
		$_SESSION['uid'] = '';
		session_destroy();
		header("location:../index.php");
	}else{
		echo "Just Go from Here <br> Upload Virus To Your Computer ....";
	}

 ?>