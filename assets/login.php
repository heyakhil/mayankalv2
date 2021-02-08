<?php 
session_start();
	require 'connect.php';

	if (isset($_POST['login'])) {
		$email = $_POST['emailaddress'];
		$pass = md5($_POST['password']);
		if(filter_var($email, FILTER_VALIDATE_EMAIL)
		&& preg_match('/\A[\w.-]*+@[\w.-]*+\z/',$email)){

		$sql = "SELECT `name`, `email`, `pass`, `unique_id`, `date_reg`, `verify` FROM `user` WHERE `email`='$email' AND `pass`='$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    	 while($row = mysqli_fetch_assoc($result)) {
		    	 	$_SESSION['naam'] = $row['name'];
		    	 	$_SESSION['uid'] = $row['unique_id'];
		    	 	header("location:../home.php");
    			}
		} else {
		    ?>
		    	<script type="text/javascript">
		    		window.open("../index.php", "_self");
		    		alert("Sorry Your are not registered OR Wrong password Or Entered Wrong Email address");
		    	</script>
		    <?php
		}
		}
}
 ?>