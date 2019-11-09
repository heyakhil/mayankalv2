<?php include '../assets/connect.php' ?>
<?php include '../assets/check.php' ?>
<?php 
	$sql="SELECT * FROM `coins_earn` WHERE `uid`='$uid'";
	$run=mysqli_query($conn,$sql);
	$result=mysqli_fetch_assoc($run);
	$rs=$result['coin_earn']/100;
	
		
	if (isset($_POST['num']) && isset($_GET['mobdata'])) {
		if($rs >= 20){
			$number=$_POST['mno'];
			$ifsc=0;
			$bank=0;
		
			$mode = $_POST['select1'];
			if($mode == '1'){
				$mode="G Pay";
			}elseif ($mode == '2') {
				$mode="Paytm";
			}else{
				$mode="PhonePay";
			}
			$sql="INSERT INTO `withdraw`( `uid`, `name`, `ifsc_code`, `bank_acc`, `mobile_no`,`mode`,`money`) VALUES('$uid','$name','$ifsc','$bank','$number','$mode','$rs')";
			$run=mysqli_query($conn,$sql);
			// update coins 
			$sql="UPDATE `coins_earn` SET `uid`='$uid',`coin_earn`='0' WHERE `uid`='$uid'";
			mysqli_query($conn,$sql);
	
			header('location:../dashboard/withdraw.php');
		}else{
			?>
				<script type="text/javascript">
					alert("You can Transfer Minimum 20rs");
					window.location.replace("../dashboard/withdraw.php");
				</script>

			<?php

		}
	
	
	}else
		
		{
		  if (isset($_POST['submit']) && isset($_GET['bank'])) {
			if ($rs >= 50) {
			
			$acno=$_POST['acno'];
			$ifsc=$_POST['ifsccode'];
			$name=$_POST['name'];
			$mode="BankAccount";
			$sql="INSERT INTO `withdraw`(`uid`, `name`, `ifsc_code`, `bank_acc`, `mobile_no`, `mode`,`money`) VALUES ('$uid','$name','$ifsc','$acno','0','$mode','$rs')";
			
			$run=mysqli_query($conn,$sql);
	
		// update the coins
			$sql="UPDATE `coins_earn` SET `uid`='$uid',`coin_earn`='0' WHERE `uid`='$uid'";
			mysqli_query($conn,$sql);
	
			header('location:../dashboard/withdraw.php');
		}
		else{
			?>
				<script type="text/javascript">
					alert("You can Transfer Minimum 50rs");
					window.location.replace("../dashboard/withdraw.php");
				</script>

			<?php
		}
	
		}
	}
	

		
 ?>