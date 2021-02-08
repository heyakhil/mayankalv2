<?php
	include 'connect.php';
	include 'check.php';

	$webname=$_POST['websitename'];
	$link=$_POST['link'];
	$traf=$_POST['traffic'];
	$no_post=$_POST['post'];
	$da=$_POST['DA'];
	$pa=$_POST['PA'];
	$catag=$_POST['catagory'];
	$niche=$_POST['niche'];
	$verify_code = $_POST['ver_code'];

	if ($traf >= 1000000) {
		$ntraffic = 10;
	}else if ($traf >= 500000 && $traf < 1000000) {
		$ntraffic = 9;
	}else if ($traf >= 100000 && $traf < 500000 ) {
		$ntraffic = 8;
	}else if ($traf >= 50000 && $traf < 100000 ) {
		$ntraffic = 7;
	}else if ($traf >= 20000 && $traf < 50000 ) {
		$ntraffic = 6;
	}else if ($traf >= 10000 && $traf < 20000 ) {
		$ntraffic = 5;
	}else if ($traf >= 5000 && $traf < 10000 ) {
		$ntraffic = 4;
	}else if ($traf >= 1000 && $traf < 5000 ) {
		$ntraffic = 3;
	}else if ($traf >= 500 && $traf < 1000 ) {
		$ntraffic = 2;
	}else{
		$ntraffic = 1;
	}

	if ($da >= 100) {
		$nda = 10;
	}else if ($da >= 90 && $da < 100) {
		$nda = 9;
	}else if ($da >= 80 && $da < 90) {
		$nda = 8;
	}else if ($da >= 70 && $da < 80) {
		$nda = 7;
	}else if ( $da >= 60 && $da < 70) {
		$nda = 6;
	}else if ($da >= 50 && $da < 60) {
		$nda = 5;
	}else if ($da >= 40 && $da < 50) {
		$nda = 4;
	}else if ($da >= 30 && $da < 40) {
		$nda = 3;
	}else if ($da >= 20 && $da < 30) {
		$nda = 2;
	}else{
		$nda = 1;
	}

	if ($pa >= 100) {
		$npa = 10;
	}else if ($pa >= 90 && $pa < 100) {
		$npa = 9;
	}else if ($pa >= 80 && $pa < 90) {
		$npa = 8;
	}else if ($pa >= 70 && $pa < 80) {
		$npa = 7;
	}else if ( $pa >= 60 && $pa < 70) {
		$npa = 6;
	}else if ($pa >= 50 && $pa < 60) {
		$npa = 5;
	}else if ($pa >= 40 && $pa < 50) {
		$npa = 4;
	}else if ($pa >= 30 && $pa < 40) {
		$npa = 3;
	}else if ($pa >= 20 && $pa < 30) {
		$npa = 2;
	}else{
		$npa = 1;
	}


	$sql="INSERT INTO `web_info`(`web_uid`, `web_name`, `web_link`, `web_traffic`, `web_post`, `da`, `pa`, `catagory`, `niche`, `code`) VALUES ('$uid', '$webname','$link','$ntraffic','$no_post','$nda','$npa','$catag','$niche', '$verify_code')";
	$run=mysqli_query($conn,$sql);
	if ($run) {
	
		$sql = "SELECT `no_web` FROM `user_info` WHERE `uid`='$uid'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		        $noweb = $row['no_web'];
		        $noweb = $noweb+1;
		        $sql = "UPDATE user_info SET no_web='$noweb' WHERE `uid`='$uid'";

				if (mysqli_query($conn, $sql)) {
					
				    ?>
					<script>
						window.open("../dashboard/dashboard-settings.php", "_self");
						alert("Your Website is Submited For Review");
					</script>
					<?php
				} else {
				    echo "Error updating record: " . mysqli_error($conn);
				}
		    }
		} else {
		    echo "0 results";
		}
	}else{
		echo "not";
		?>
		<script>
			window.open("../dashboard/dashboard-settings.php", "_self");
			alert("Sorry There is some problem Submit later");
		</script>
		<?php
	}
?>