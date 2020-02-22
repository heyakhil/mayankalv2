
<?php  
    if(!isset($_GET['uid'])){
      header('location:mayanka.ml');
    }
    $uid=$_GET['uid'];
?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styl.css">
</head>
<body>

    <center>
        <div class="container" style="background-color:rgb(241, 241, 237); width: 600px;height: 650px; margin-top: 40px;">
         <h3 style="margin-top: 50px;"><i>What is it like to work at Mayankal?</i></h3>  
         <form action="reviewstore.php?uid=<?php echo $uid; ?>" method="post">
         <div class="wrapper">
         <input type="checkbox" id="st5" value="5" name="check" />
            <label for="st5"></label>
            <input type="checkbox" id="st4" value="4" name="check" />
            <label for="st4"></label>
            <input type="checkbox" id="st3" value="3" name="check" />
            <label for="st3"></label>
            <input type="checkbox" id="st2" value="2" name="check" />
            <label for="st2"></label>
            <input type="checkbox" id="st1" value="1" name="check"/>
            <label for="st1"></label>
            
            
           
            
          </div>
         <textarea cols="70px" rows="10px" id="abc"style="border-radius:8px;" name="review" placeholder="Write Review Here........"></textarea><br><br>
        <button type="submit" class="btn btn-primary" style="width:530px;" name="submit">Leave Review</button><br><br>
        <a href="https://www.mayankal.ml/index.php" style="font-size:large;">Visit Website</a>
        </div>
      </form>
  </center>   
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');

</script>
</body>
</html>