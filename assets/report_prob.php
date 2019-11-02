<?php 
	include_once 'connect.php';
	include_once 'check.php';
	if (isset($_POST['report'])) {
		$sub = $_POST['sub'];
		$link = $_POST['link'];
		$problem = $_POST['prob_desc'];
		if (strstr($link, "uid")) {
			$sql = "INSERT INTO report (uid, profile_link, title, problem_stat)
			VALUES ('$uid', '$sub', '$link', '$problem')";

			if (mysqli_query($conn, $sql)) {
			    ?>
			    <script type="text/javascript">
			    	window.open("../dashboard/dashboard-report.php", "_self");
			    	alert("You Report is Submitted and we will take action in 24 hrs");
			    </script>
			    <?php
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}else{
			?>
		    <script type="text/javascript">
		    	window.open("../dashboard/dashboard-report.php", "_self");
		    	alert("You have given a invalid link");
		    </script>
		    <?php
		}
	
}else{
	header("location:../index.php");
 }
?>
