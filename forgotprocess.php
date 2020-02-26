<?php   
       include('assets/connect.php');
       $email=$_POST['email'];
       $randomnum=rand();
        if(!empty($email)){
          $sql="SELECT * FROM `user` WHERE `email`='$email'";
          $run=mysqli_query($conn,$sql);

		  if(mysqli_num_rows($run) > 0){
				
            $to = $email;
        
            $message='<html>
                    <head>
                    <style>
                      .button {
                        background-color: #4CAF50; /* Green */
                        border: none;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 22px;
                        margin: 8px 2px;
                        cursor: pointer;
                      }
                      
                     
                            </style>
                    </head>
                    <body>';
                    $message .=' <div class="container">
                                <br><br><center>';
                    $message .="<h1 style='width: 300px;'><i>Mayankal</i></h1>
                        <h3><i>Hey There hope you entered this valid email and your password will be reset soon and please enter the strong passwords which you can remember easily and anybody not able to guess it out<br>
                        Thankyou <br>Mayankal Team .</i></h3>
                        <img src='https://cdn.pixabay.com/photo/2015/09/04/23/28/wordpress-923188_1280.jpg' style='width: 600px; height: 250px;'><br><br>
                        <a href='https://mayankal.ml/confirmpassword.php?email=".$email."&verify=".$randomnum."' class='button' style='width:200px;color:white;box-shadow: 0 15px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);'>Reset Password</a>";
                    $message .=' </center></div></body></html>';
                    $subject = 'Reset Password';
                    $from="team@mayankal.ml";
                    $headers = "From: ".$from."\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                if(mail($to,$subject,$message,$headers)){
                        ?>
                    <script>
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