<?php    
    include('assets/connect.php');




       $uid=$_GET['uid'];
       $review= $_POST['review'];
       $rating=$_POST['check'];
       $reviewid=rand();
       $sql="INSERT INTO `mayankalreview`(`uid`, `reviewid`, `rating`, `review`) VALUES (1232,34535,5,'kjdfhjdfjsdf')";
       if(mysqli_query($conn,$sql)){
           echo "hello12";
       }
      




?>