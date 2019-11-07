<?php 
	include_once 'connect.php';
	include_once 'check.php';
	if ($_GET['psu']!='') {
		$uuid = $_GET['psu'];

	}else{
		header("location:../index.php");
	}
	if (isset($_POST['submit'])) {
		$cata = $_POST['post_cat'];
		$min_word = $_POST['mword'];
		$imp_n = $_POST['notice'];
		$describe = $_POST['describe'];
		$order_id = date("d-m").mt_rand(1000, 99999).date("Y");
		include_once 'coin_reduction.php';
			
	}else{
		header("location:../index.php");
	}


 ?>