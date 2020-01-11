<?php 
	include_once 'connect.php';
	include_once 'check.php';

if (isset($_GET['uid'])) {
	$verify_code = substr(md5(uniqid(rand(), true)), 16, 16);
	$sql = "SELECT * FROM user WHERE `unique_id`='$uid'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	$email_reg = $row['email_reg'];
	    	if ($row['verification_code']=='') {
	    		$verify_code = $row['verification_code'];
	    		$to = $email;
				$subject = "Mayankal Account Verification";
				$message = "<html>
							<body>
								Hello User Thanks for making account on Mayankal <br> Here you can easily get verify your email and become a verified member of Mayankal So that you can easily work with Us without any problem So finally the link is below <br> Verification Link : <a href='user_verified.php?verify=".$verify_code."&status=ok'>Click Here</a>
							</body>
							</html>" ;
				$from = "akhilsri28121999@gmail.com";
				$headers = "From:" . $from;
				if(mail($to,$subject,$message,$headers)){
					$sql = "INSERT INTO user (verification_code)
				VALUES ('$verify_code')";

				if (mysqli_query($conn, $sql)) {
				    ?>
					<script type="text/javascript">
						window.open("https://mayankal.ml/dashboard/index.php", "_self");
						alert("The Verification link is Send. Please Check your email")
					</script>
					<?php
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				}else{
					?>
					<script type="text/javascript">
						window.open("https://mayankal.ml/dashboard/index.php", "_self");
						alert("Email is unable to send please. Try again Later");
					</script>
					<?php
				}
	    	}else{
	    		$sql = "SELECT * FROM user WHERE `unique_id`='$uid'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				    while($row = mysqli_fetch_assoc($result)) {
				        $verify_code = $row['verification_code'];
				      	$to = $email;
						$subject = "Mayankal Account Verification(Resend)";
						$message = "Hello User Thanks for making account on Mayankal <br> Here you can easily get verify your email and become a verified member of Mayankal So that you can easily work with Us without any problem So finally the link is below <br> Verification Link : <a href='".$row['verification_code']."'>Click Here</a>";
						$from = "akhilsri28121999@gmail.com";
						$headers = "From:" . $from;

						if(mail($to,$subject,$message,$headers)){
								?>
								<script type="text/javascript">
									window.open("http://mayankal.ml/dashboard/index.php", "_self");
									alert("The Verification link is re-Send. Please Check your email")
								</script>
								<?php
							}else{
								?>
								<script type="text/javascript">
									window.open("http://mayankal.ml/dashboard/index.php", "_self");
									alert("Email is unable to re-send please. Try again Later");
								</script>
								<?php
							}
				    }
				} else {
				    echo "";
				}
	    	}
			if (mysqli_query($conn, $sql)) {
			    echo "";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
	    }
	} else {
	    echo "";
	}
}else{
	header("location:index.php");
}

 ?>