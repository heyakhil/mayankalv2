<?php   
       include('assets/connect.php');
       $email=$_POST['email'];
        if(!empty($email)){
          $sql="SELECT * FROM `user` WHERE `email`='$email'";
          $run=mysqli_query($conn,$sql);
		  if(mysqli_num_rows($run) > 0){
				
                $to = $email;
				$subject = "Mayankal Account Verification";
				$message = "Hello User! Your Reset Password link: https://localhost/project/mayankalv2/confirmpassword.php?email=".<?php $email; ?>.">Click Here</a> <br> Here you can easily Reset Your password.....";
				$from = "team@mayankal.ml";
				$headers = "From:" . $from;
				if(mail($to,$subject,$message,$headers)){
                ?>
                    <script>
                            alert("Your Reset Password link will be send to the your given E-mail.Please check your E-mail..");
                            window.open("forgotpassword2.php", "_self");
                    </script>
                <?php 
                }
                else{
                    ?>
                    <script>
                            alert("Again! Enter the Email...");
                            window.open("forgot_password.php", "_self");
                    </script>
                <?php 

                }   
         }else{
            ?>
                <script>
                            alert("Enter the Registered Email.....");
                            window.open("forgot_password.php", "_self");
                    </script>
            <?php
         }
       }

?>