<?php 
	session_start();
	if (isset($_SESSION['uid'])) {
		$name = $_SESSION['naam'];
		$uid = $_SESSION['uid'];
	}else{
		header("location:http://localhost/Akhil/Mayankalv2/index.php");
	}
 ?>