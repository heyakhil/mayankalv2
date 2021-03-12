<?php    
    include('assets/connect.php');
    // this page for store the review
       $uid=$_GET['uid'];
       $review= mysqli_real_escape_string($conn,$_POST['review']);
       $rating=$_POST['check'];
       $reviewid=rand();
       $sql="INSERT INTO `mayankalreview`(`uid`, `reviewid`, `rating`, `review`) VALUES ('$uid','$reviewid','$rating','$review')";
       if(mysqli_query($conn,$sql)){
           header('location:redirectsec.php');
       }else{
           ?>
            <script>
            
                alert("Some Problem is occur.Please go to the Review Page and give review");
                location.replace("http://localhost/project/mayankalv2/ReviewForm.php?uid=".<?php echo $uid; ?>);
            </script>
           <?php
       }
      




?>