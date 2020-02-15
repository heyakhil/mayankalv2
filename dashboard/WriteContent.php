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

</head>
<body style="background-color:#F3ECEC;">
  
<div class="row">
  <div style="margin-right:500px; margin-left:250px;">
    <div class="form-group" style="margin: 20px;">
    <form action="../assets/write_post.php" method="POST">
      <h3>Title</h3>
      <input type="text" class="form-control" id="usr" placeholder="Enter the title" name="title">
      <hr>
    <textarea class="ckeditor" name="editor" style="height:200px;"></textarea><br> 
    <input type="hidden" name="order_id" value="<?php echo $or_id; ?>">
    <input type="hidden" name="customer" value="<?php echo $customer; ?>">
    <input type="submit" class="btn btn-primary" value="Submit" name="submit" style="width:100px;">
  </form>
</div>
</div>
  <!-- <div class="col-sm-4 col-md-4" style="border-left: 2px solid black; height: 700px;"> -->

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
    
  </div>
 

  
</body>
</html>