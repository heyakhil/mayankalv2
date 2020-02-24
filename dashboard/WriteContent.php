<?php 
  include '../assets/connect.php';
  $customer = $_GET['customer'];
  $or_id = $_GET['or_id'];
  
 ?>
 <?php
          $sql = "SELECT * FROM orders WHERE `order_id`='$or_id'";
          $result = mysqli_query($conn, $sql);
        
          if (mysqli_num_rows($result) > 0) {
            $row=mysqli_fetch_assoc($result);
           $catagory= strtoupper($row['post_cat']);
           $order_id=$row['order_id'];
           $notes=$row['imp_not'];
           $min_words=$row['min_word'];
           $descrip=$row['descrip'];

          }
          if(empty($notes)){
            $notes="Nothing";
          }
          if(empty($descrip)){
            $descrip="Nothing";
          }



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Writing Content : Mayankal</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">-->
  <script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color:#F3ECEC;">
  
<div class="fluid-container" style="margin-left: 200px; margin-right: 70px;" >
  <!-- <div style="margin-right:500px; margin-left:200px;"> -->
    <div class="row">
      <div class="col-lg-8">
        <div class="form-group">
          <form action="../assets/write_post.php" method="POST">
          <h3>Title</h3>
          <input type="text" class="form-control" id="usr" placeholder="Enter the title" name="title">
          <hr>
            <textarea class="ckeditor" name="editor"></textarea><br> 
            <input type="hidden" name="order_id" value="<?php echo $or_id; ?>">
          <input type="hidden" name="customer" value="<?php echo $customer; ?>">
          <input type="submit" class="btn btn-primary" value="Submit" name="submit" style="width:833px;">
          </form>
        </div>
      </div>
      <!-- without write any data in editer does not submit button work -->
      <script>
        CKEDITOR.replace( 'editor' );
        $("form").submit( function(e) {
            var messageLength = CKEDITOR.instances['editor'].getData().replace(/<[^>]*>/gi, '').length;
            if( !messageLength ) {
                alert( 'Please write content then submit' );
                e.preventDefault();
            }
        });
    </script>
      <!--  Right Side-->
      <div class="col-lg-1"></div>

    <div class="col-lg-3" style="margin-top: 55px;">
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">----Category----</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">
            <?php echo $catagory; ?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">----Order Id----</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
            <?php echo $order_id;  ?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">----No. of Words----</a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
            <?php echo $min_words; ?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">----Description----</a>
            </h4>
          </div>
          <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body">
            <?php  echo $descrip; ?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">----Notes----</a>
            </h4>
          </div>
          <div id="collapse5" class="panel-collapse collapse">
            <div class="panel-body">
            <?php  echo $notes;  ?>
            </div>
          </div>
        </div>
        
        
        
  </div> 
</div>
 
 </div>
</div>
<!-- End Right-side -->
      


  </div>
</body>
</html>