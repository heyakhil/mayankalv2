<?php 
		include_once 'connect.php';
		include_once 'check.php';

		if (isset($_GET['status']) && isset($_GET['dates'])) {
			$t_day = date("Y-m-d");
			$stat = $_GET['status'];
			$day = $_GET['dates'];
			if ($stat == "verify" && $day == $t_day) {
				if (isset($_COOKIE['entry'])) {
			      if ($_COOKIE['entry'] > 3){
			        ?>
			        <script>
			          window.open("https://mayankal.ml", "_self");
			          alert("You can Earn Coin Only 3 Times a Day");
			        </script>
			        <?php
			      }else{
			      $entry = $_COOKIE['entry'];
			      $get = $entry+1;
			      setcookie('entry', $get, time()+86400);
		      		$sql = "SELECT * FROM coins_earn WHERE `uid`='$uid'";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
					        $pre_value = $row['coin_earn'];
					        $value = $pre_value+40;
					        $sql = "UPDATE coins_earn SET coin_earn='$value' WHERE `uid`='$uid'";

							if (mysqli_query($conn, $sql)) {
							    header("location:https://www.mayankal.ml/dashboard/earning.php");
							} else {
							    echo "Error updating record: " . mysqli_error($conn);
							}
					    }
					} else {
					    echo "0 results";
					}
			      }
			    }else{
			      setcookie('entry', 1);
			      $sql = "SELECT * FROM coins_earn WHERE `uid`='$uid'";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
					        $pre_value = $row['coin_earn'];
					        $value = $pre_value+40;
					        $sql = "UPDATE coins_earn SET coin_earn='$value' WHERE `uid`='$uid'";

							if (mysqli_query($conn, $sql)) {
								header("location:https://www.mayankal.ml/dashboard/earning.php");
							} else {
							    echo "Error updating record: " . mysqli_error($conn);
							}
					    }
					} else {
					    echo "0 results";
					}
			    }
			}else{
				?>
				<script type="text/javascript">
					window.open("https://www.mayankal.ml", "_self");
					alert("Sorry Your Are Doing a Invalid Entry");
				</script>
				<?php
			}
		}else{
			header("location:https://www.mayankal.ml");
		}


	 ?>