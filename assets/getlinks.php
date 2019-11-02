<?php 
	include_once '../assets/connect.php';
	include_once '../assets/check.php';
    
	if (isset($_GET['act'])) {
		$act = $_GET['act'];
		if ($act == "byclick") {
			$sql = "SELECT * FROM link ORDER BY RAND() LIMIT 1";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			    	$links = $row['link'];
			    	if($_SESSION['uuid']=$uid){
			    	    //echo $_COOKIE["uuid"];
			    	    header("location:$links");			    	    
			    	}else{
			    	    echo  "Now working....";
			    	}
			    }
			} else {
			    header("location:https://mayankal.ml");
			}
		}
	

	}else{
		header("location:https://mayankal.ml");
	}


 ?>