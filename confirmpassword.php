<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mayankal-Free Guest Post Writting</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        .form-gap {
    padding-top: 100px;
}
    </style>
</head>
<body>
    <?php $email=$_GET['email']; 
    if(!empty($email)){
        ?>
   <center> <div class="form-gap"></div>
      <div>
        <h1 style="font-family:fantasy;">Mayankal</h1>
      </div>
    <div class="container" style="background-color:rgb(252, 241, 227); width: 500px;">
        <!-- <div class="row"> -->
            <div class="col-md-10 col-md-offset-6">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="text-center"style="align-center"><br>
                      <h2 class="text-center">Forgot Password</h2>
                      <p>
                        Please enter your new password twice. So we can verify you typed it correctly.
                    </p>
                      <div class="panel-body">
                        <form id="register-form" role="form" autocomplete="off" class="form" action="confirmprocess.php?email="<?php $email; ?>  method="post"> 
                          <div class="form-group">
                            <div class="input-group">  
                              <input id="New Password" name="NewPassword" placeholder="New Password " class="form-control"  type="Password">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">  
                              <input id="Confirm Password" name="ConfirmPassword" placeholder="Confirm Password" class="form-control"  type="Password">
                            </div>
                          </div>
                          <div class="form-group">
                            <input name="recover-submit" class="btn btn-lg btn-primary btn-block" name="submit" value="Change Password" type="submit"><br>
                          </div>
                        </form>
                      </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</center>
<?php
    }else{
        header('location:index.php');
    }
?>
</body>
</html>
