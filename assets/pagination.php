<?php 
	include_once 'connect.php';

	$results_per_page = 75;

	$sql = "SELECT * FROM user";
	$result = mysqli_query($conn, $sql);
	$number_of_results = mysqli_num_rows($result);
	$number_of_pages = ceil($number_of_results/$results_per_page);
 ?>