<?php 
	  include 'assets/connect.php';
	 
	  include 'assets/check.php';
	  include 'assets/notification.php'; 
?>

<?php
						
						$prof_uid=$_GET['prof_uid'];
						$currentDateTime = date('Y-m-d');
						$sql1="SELECT * FROM `report` WHERE `report_uid`='$prof_uid'";
						$run=mysqli_query($conn,$sql1);
						$num=mysqli_num_rows($run);

						
						if($num == 0 )
							{

								$sql="INSERT INTO `report`(`uid`, `report_uid`, `date`) VALUES ('$uid','$prof_uid','$currentDateTime')";
							if(mysqli_query($conn,$sql)){
								$s="You are Reported by someone";
								notification($uid, $s, $prof_uid);
								?>
								<script>
										alert("Report Send To Team");
										window.location="user-profile.php?uid=<?php echo  $prof_uid; ?>";

								</script>
								<?php
							}
						}
						else
						{
							?>
							<script>
									alert("You are Already Reported this User");
									window.location="user-profile.php?uid=<?php echo  $prof_uid; ?>";

							</script>

							<?php

						}
						
						?>

				