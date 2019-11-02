<?php 

	if ($_POST['find']) {
		$order = $_POST['order'];
		$mode = $_POST['mode'];
		if ($mode == "wr") {
			header("location:../dashboard/write_post.php?mode=wr&or=$order");
		}elseif ($mode == "google") {
			header("location:../dashboard/write_post.php?mode=google&or=$order");
		}else{
			header("location:../dashboard/write_post.php?mode=zip&or=$order");
		}
	}else{
		header("location:../dashboard/index.php");
	}
	
 ?>