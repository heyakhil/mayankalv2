<?php
        include('assets/connect.php');
        // if(isset($_POST['submit'])){
            $email=$_GET['email'];
            $npass=md5($_POST['NewPassword']);
            $cpass=md5($_POST['ConfirmPassword']);
            if(!empty($npass) && !empty($cpass)){
                if($npass===$cpass){
                    $sql="UPDATE `user` SET `pass`='$npass' WHERE `email`='$email'";
                    if(mysqli_query($conn,$sql)){
                    ?>
                        <script>
                                    alert("Your Password will be Changed......");
                                    window.open("index.php","_self");
                        </script>
                    <?php
                    }
                }else{
                    ?>
                        <script>
                                    alert("Enter Both Password Same.You does not Entered same password ");
                                    window.open("confirmpassword.php?email=<? echo $email; ?>","_self");
                        </script>
                    <?php

                }
            }else{
                ?>
                        <script>
                                    alert(" Enter the Password both password.You does not Entered the password");
                                    window.open("confirmpassword.php?email=<? echo $email; ?>","_self");
                        </script>
                    <?php

            }

        // }else{
        //     header('location:confirmpassword.php');
        // }



?>