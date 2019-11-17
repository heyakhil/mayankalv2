<?php 
	include_once 'connect.php';
	include_once 'check.php';

	$sql = "SELECT * FROM orders WHERE `uid`='$uid'";
	$result = mysqli_query($conn, $sql);
	$orders =mysqli_num_rows($result);


	$sql = "SELECT * FROM review WHERE `reciver_uid`='$uid'";
	$result = mysqli_query($conn, $sql);
	$tot_reviews =mysqli_num_rows($result);
 ?>