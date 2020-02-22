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
				$name=$row['name'];
	    		$verify_code = $row['verification_code'];
				$to = $email;
				$subject = 'Verify Mayankal Account';
				$from="team@mayankal.ml";
				$headers = "From: ".$from."\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				$message='<!doctype html>
								<html>
									<head>
										<title>E-mail template</title>
										
										<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
									</head>
									<body>
										<center><h1 style="margin-top: 30px;"><i>Mayankal</i></h1></center>
										<div class="container" style="background-color:#F3ECEC; font-size:20px;" >
										<p style="margin-top: 10px;"><i>Hello <b>'.$name.'</b></i></p>
										<p><i>Thanks to create an account of <b style="color: rgb(238, 36, 10);">Mayankal.</b></i></p>
										<p><i>Please verify your account by click on the button below.</i></p>
										<a href= "http://localhost/project/mayankalv2/assets/user_verified.php?verify='.$verify_code.'&status=ok" type="button" class="btn btn-success" style="width:90px;">Verify</a><br><br>
										<h5><i>Thankyou</i></h5>
										<h5><i><b>Mayankal team</b></i></h5><br>
										</div>
									</body>
								</html>';

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
						$name=$row['name'];
						$to = $email;
						$subject = 'Verify Mayankal Account';
						$from="team@mayankal.ml";
						$headers = "From: ".$from."\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
						$message='<!doctype html>
										<html>
											<head>
												<title>E-mail template</title>
												
												<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
											</head>
											<body>
												<center><h1 style="margin-top: 30px;"><i>Mayankal</i></h1></center>
												<div class="container" style="background-color:#F3ECEC; font-size:20px;" >
												<p style="margin-top: 10px;"><i>Hello <b>'.$name.'</b></i></p>
												<p><i>Thanks to create an account of <b style="color: rgb(238, 36, 10);">Mayankal.</b></i></p>
												<p><i>Please verify your account by click on the button below.</i></p>
												<a href= "http://localhost/project/mayankalv2/assets/user_verified.php?verify='.$verify_code.'&status=ok" type="button" class="btn btn-success" style="width:90px;">Verify</a><br><br>
												<h5><i>Thankyou</i></h5>
												<h5><i><b>Mayankal team</b></i></h5><br>
												</div>
											</body>
										</html>';
		
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