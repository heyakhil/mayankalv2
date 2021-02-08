<?php 
	require 'connect.php';
	if (isset($_POST['register'])) {
		$name = preg_replace("/[^a-zA-Z ]/", "", $_POST['name-register']);
		$email = preg_replace("/[^a-zA-Z0-9 @.]/", "", $_POST['emailaddress-register']);
		$pass = md5(preg_replace("/[^a-zA-Z0-9 @.]/", "", $_POST['password-register']));
		$uid = date('y').uniqid().mt_rand(1, 999);
		$da = date("Y-m-d");
		if(filter_var($email, FILTER_VALIDATE_EMAIL)
		&& preg_match('/\A[\w.-]*+@[\w.-]*+\z/',$email)){
		$sql = "SELECT email FROM user WHERE `email`='$email'";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
			?>
				<script type="text/javascript">
					window.open("../index.php", "_self");
					alert("You have already created the account");
				</script>
			<?php
		    }
		 else {
		    $sql = "INSERT INTO user (name, email, pass, unique_id, date_reg)
			VALUES ('$name', '$email', '$pass', '$uid', '$da')";

			if (mysqli_query($conn, $sql)) {
				$sql = "INSERT INTO coins_earn(uid, coin_earn)
				VALUES ('$uid', '0.0')";

				if (mysqli_query($conn, $sql)) {
				    $sql = "INSERT INTO user_info (uid)
					VALUES ('$uid')";

					if (mysqli_query($conn, $sql)) {
					    ?>
			    	<script type="text/javascript">
			    		window.open("../index.php", "_self");
			    		alert("You are Registered Successfully");
			    	</script>
				    <?php
					} else {
					    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
		
	}else{
		?>
			<script>
						alert("You Enter the Special Charecter in your email");
						window.location.replace("../index.php");
			</script>
		<?php
	}
	}
 ?>