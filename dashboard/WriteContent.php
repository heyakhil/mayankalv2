<?php 
  include '../assets/connect.php';
  $customer = $_GET['customer'];
  $or_id = $_GET['or_id'];
  
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
  
<div class="fluid-container">
  <div style="margin-right:500px; margin-left:200px;">
    <div class="form-group" class="col-xm-10">
    <form action="../assets/write_post.php" method="POST">
      <h3>Title</h3>
      <input type="text" class="form-control" id="usr" placeholder="Enter the title" name="title">
      <hr>
    <textarea class="ckeditor" name="editor"></textarea><br> 
    <input type="hidden" name="order_id" value="<?php echo $or_id; ?>">
    <input type="hidden" name="customer" value="<?php echo $customer; ?>">
    <input type="submit" class="btn btn-primary" value="Submit" name="submit" style="width:100px;">
  </form>
<!-- </div> -->
  <!-- <div class="col-sm-4 col-md-4" style="height: 700px;"> -->

<!-- right-side -->

 <div class="container" style="width:300px;">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 3</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
      </div>
    </div>
  </div> 
</div>
 <!-- End Right-side -->
 </div>
  <!-- <?php 

  $sql = "SELECT * FROM orders WHERE `order_id`='$or_id'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          ?>
          <p style="font-size: 20px;"><span style="font-size: 25px;"><b><u>Catagory</u></b> :</span> <?php echo strtoupper($row['post_cat']); ?></p>
          <p style="font-size: 20px;"><span style="font-size: 25px;"><b><u>Order Id</u></b> :</span> <?php echo $row['order_id']; ?></p>
          <p style="font-size: 20px;"><span style="font-size: 25px; color: red;"><b><u>Notes</u></b> :</span> <?php echo $row['imp_not']; ?></p>
          <p style="font-size: 20px;"><span style="font-size: 25px;"><b><u>No. of Words</u></b> :</span> <?php echo $row['min_word']; ?></p>
          <p style="font-size: 20px;"><span style="font-size: 25px;"><b><u>Description</u></b> :</span> <?php echo $row['descrip']; ?></p>
          <?php
      }
  } else {
      echo "0 results";
  }


   ?> -->
    
  <!-- </div> -->


  </div>
</body>
</html>