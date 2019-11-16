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
<body>
  
<div class="row">
  <div class="col-sm-8 col-md-8">
    <div class="form-group" style="margin: 10px;">
    <form action="../assets/write_post.php" method="POST">
      <h3>Title</h3>
      <input type="text" class="form-control" id="usr" placeholder="Enter the title" name="title">
      <hr>
    <textarea class="ckeditor" name="editor" style="height:100%; margin-left: 2px;"></textarea><br> 
    <input type="hidden" name="order_id" value="<?php echo $or_id; ?>">
    <input type="hidden" name="customer" value="<?php echo $customer; ?>">
    <input type="submit" class="btn btn-primary" value="Submit" name="submit" style="margin-left: 8px;">
  </form>
</div>
  </div>
  <div class="col-sm-1 col-md-1" style="border-left: 2px solid black; height: 700px;">

    <h2><b>Category:</b>Entertainment</h2>
    <h2><b>OrderId:</b>12345<h2>
    <h2><b>Notes:</b>==============</h2>
    <h2><b>No of Words:</b>500</h2>
    <h2><b>Discription:</b>==============</h2>
    
   



  </div>
 

  
</body>
</html>