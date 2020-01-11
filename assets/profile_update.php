<?php 
	include_once '../assets/connect.php';
	include_once '../assets/check.php';
	
	if (isset($_POST['save'])) {
		$profile = $_FILES['profile-pic'];
		$name = $_POST['fname'] . " " . $_POST['lname'];
		$mobi = $_POST['mob'];
		$email = $_POST['email'];
		$skill = $_POST['skills'];
		$attach = $_FILES['attach']['name'];
		$tg = $_POST['tagline'];
		$country = $_POST['nation'];
		if($_POST['cur_pass'] != ""){
			$cpass = md5($_POST['cur_pass']);
			$npass = md5($_POST['npass']);
			$repass = md5($_POST['rnpass']);
		}
		$fb = $_POST['fblink'];
		$insta = $_POST['insta'];
		$twitter = $_POST['twit'];
		$yt = $_POST['yt'];
		$about =mysqli_real_escape_string($conn,$_POST['intro']);
	$work = 0;
 if($_FILES["profile-pic"]["name"]!=''){
 		$target_dir = "../dashboard/img/";
 		$target_file = $target_dir . basename($_FILES["profile-pic"]["name"]);
 		$file_naam = basename($_FILES["profile-pic"]["name"]);
 		if (move_uploaded_file($_FILES["profile-pic"]["tmp_name"], $target_file)) {
        		$sql = "UPDATE user_info SET profile_pic='$file_naam'WHERE `uid`='$uid'";
 			if (mysqli_query($conn, $sql)) {
 				?>
			    	<script type="text/javascript">
 			    		window.open("../dashboard/dashboard-settings.php", "_self")
 			    		alert("Your Profile-pic is Successfully Uploaded");
 			    	</script>
 			    <?php
 			} else {
 			    echo "Error updating record: " . mysqli_error($conn);
 			}

 	    } else {
 	        echo "Sorry, there was an error uploading your file.";
 	    }
 	}


if ($name !="" || $mobi != "" || $email !="") {
	$x = 0;
	if ($name != "") {
		$sql = "UPDATE user SET name='$name' WHERE unique_id='$uid'";
		if (mysqli_query($conn, $sql)) {
		    $x++;
		} else {
		    echo "Error updating record: " . mysqli_error($conn);
		}
	}
	if ($mobi != "") {
		$sql = "UPDATE user_info SET mob_no='$mobi' WHERE uid='$uid'";
		if (mysqli_query($conn, $sql)) {
		    $x++;
		} else {
		    echo "Error updating record: " . mysqli_error($conn);
		}
	}
	if ($email != "") {
		$sql = "UPDATE user SET email='$email' WHERE unique_id='$uid'";
		if (mysqli_query($conn, $sql)) {
		    $x++;
		} else {
		    echo "Error updating record: " . mysqli_error($conn);
		}
	}

 	if ($x>0) {
 		?>	
 	   		<script type="text/javascript">
 	   			window.open("../dashboard/dashboard-settings.php", "_self");
 	   			alert("Your Profile is Updated");
 	   		</script>
 	   	<?php
 	}
 }

 	if ($cpass != "" && $npass != "" && $repass != "") {
	    	$sql = "SELECT * FROM user WHERE `unique_id` ='$uid'";
 			$result = $conn->query($sql);
 			if ($result->num_rows > 0) {
 			    // output data of each row
 			    while($row = $result->fetch_assoc()) {
 			       if ($row['pass'] === $cpass && $npass == $repass) {
 				       	 $sql = "UPDATE user SET pass='$npass' WHERE `unique_id`='$uid'";

 						if (mysqli_query($conn, $sql)) {
 						    ?>
 						    <script type="text/javascript">
 						    	window.open("../dashboard/dashboard-settings.php", "_self");
 						    	alert("Your Password is updated");
 						    </script>
 						    <?php
						} else {
 						    echo "Error updating record: " . mysqli_error($conn);
 						}
 			       }else{
 			       	?>	
 			       		<script type="text/javascript">
 			       			window.open("../dashboard/dashboard-settings.php", "_self");
 			       			alert("Sorry! Rentered a wrong Password");
 			       		</script>
 			       	<?php
 			       }
 			    }
 			} else {
 			    ?>	
 		       		<script type="text/javascript">
 		       			window.open("../dashboard/dashboard-settings.php", "_self");
 		       			alert("Sorry! You entered a wrong Password");
 		       		</script>
 		       	<?php
 			}
 	    }

	if ($coresite != '' OR $country != '' OR $fb != '' OR $insta != '' OR $twitter !='' OR $yt !='') {
    	$sql = "SELECT natinality, facebook, instagram, twitter, youtube FROM user_info WHERE `uid` = '$uid'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		       $sql = "UPDATE user_info SET natinality = '$country', facebook ='$fb', instagram = '$insta', twitter='$twitter', youtube='$yt' WHERE `uid`='$uid'";

				if (mysqli_query($conn, $sql)) {
 				    ?>	
 		       		<script type="text/javascript">
 		       			window.open("dashboard-settings.php", "_self");
 		       			alert("Your Profile is Updated Successfully");
 		       		</script>
 		       	<?php
 				} else {
 				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
		    }

		} else {
		    echo "0 results";
		}
    }

    if ($skill != '') {
     	$sql = "SELECT skills FROM user_info WHERE `uid` = '$uid'";
		 $result = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($result) > 0) {
		     // output data of each row
		     while($row = mysqli_fetch_assoc($result)) {
		         $take_val = $row['skills'];
		         $value = $skill . "," . $take_val;
		      	
		        $sql = "UPDATE user_info SET skills='$value' WHERE `uid`='$uid'";

		 		if (mysqli_query($conn, $sql)) {
 		 		    ?>	
 		        		<script type="text/javascript">
 		        			window.open("dashboard-settings.php", "_self");
 		        			alert("Your Skill is Updated Successfully");
 		        		</script>
 		        	<?php
 				} else {
 		 		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 		 		}
 		     }
 	 } else {
 		     echo "0 results";
 		 }
      }
 		

if ($_FILES['attach']['tmp_name'] != '') {
	$extension = explode(".", $attach);
	$ch = $extension[1];
	if ($ch == 'pdf' || $ch == 'PDF') {
		$target_dir = "../dashboard/attachment/";
		$target_file = $target_dir . basename($_FILES["attach"]["name"]);
 		$file_naam = basename($_FILES["attach"]["name"]);
 		if (move_uploaded_file($_FILES["attach"]["tmp_name"], $target_file)) {
        		$sql = "UPDATE user_info SET attach='$attach'WHERE `uid`='$uid'";

 			if (mysqli_query($conn, $sql)) {
 				?>
 			    	<script type="text/javascript">
 			    		window.open("../dashboard/dashboard-settings.php", "_self")
 			    		alert("Your File is Successfully Uploaded");
 			    	</script>
 			    <?php
 			} else {
 			    echo "Error updating record: " . mysqli_error($conn);
 			}
 	    } else {
 	    	?>
		<script type="text/javascript">
			window.open("../dashboard/dashboard-settings", "_self")
			alert("Sorry, there was an error uploading your file.")
		</script>
		<?php
 	       
 	    }
	}else{
		?>
		<script type="text/javascript">
			window.open("../dashboard/dashboard-settings", "_self")
			alert("Please Upload PDF files Only")
		</script>
		<?php
	}
}

  
    if ($tg != '' || $country != '') {
     	$sql = "SELECT skills, tagline FROM user_info WHERE `uid` = '$uid'";
		 $result = mysqli_query($conn, $sql);

		 $sql = "UPDATE user_info SET tagline='$tg', natinality='$country' WHERE `uid`='$uid'";

 		if (mysqli_query($conn, $sql)) {
	 		    ?>	
	        		<script type="text/javascript">
	        			window.open("dashboard-settings.php", "_self");
	        			alert("Your Profile is Updated Successfully");
	        		</script>
	        	<?php
			} else {
	 		    ?>
		<script type="text/javascript">
			window.open("../dashboard/dashboard-settings", "_self")
			alert("There is any error we will come over soon");
		</script>
		<?php
	 		}
      }

     if ($about != '') {
        $sql = "UPDATE user_info SET about_me='$about' WHERE `uid`='$uid'";

 		if (mysqli_query($conn, $sql)) {
 		    ?>	
        		<script type="text/javascript">
       			window.open("../dashboard/dashboard-settings.php", "_self");
       			alert("Your About Me is Updated Successfully");
        		</script>
        	<?php
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}    
	} 



}else{
		session_destroy();
		header("location:../index.php");
}
	
 ?>