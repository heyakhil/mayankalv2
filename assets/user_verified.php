<?php 
	include_once 'connect.php';
	include_once 'check.php';

		if (isset($_GET['verify']) && isset($_GET['status'])) {
			$verify_c = $_GET['verify'];
			$sql = "SELECT * FROM user WHERE `unique_id`='$uid'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			    	$ver_c = $row['verification_code']
			        if ($row['verification_code']==$verify_c) {
			        	$sql = "UPDATE user SET verify='1' WHERE verification_code=$ver_c";
						if (mysqli_query($conn, $sql)) {
						    ?>
							<script type="text/javascript">
								window.open("../dashboard/index.php", "_self");
								alert("You Got Verified Thanks")
							</script>
							<?php
						} else {
						    echo "Error updating record: " . mysqli_error($conn);
						}
			        }else{
			        	?>
					<script type="text/javascript">
						window.open("../dashboard/index.php", "_self");
						alert("Sorry You clicked a wrong link")
					</script>
					<?php
			        }
			    }
			} else {
			    echo "0 results";
			}
		}else{
			header("location:index.php");
		}

 ?>