<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Refresh" content="4;url=http://localhost/project/mayankalv2/">
    <title>Mayankal-Free Guest Post</title>
    <style>
       p{
           font-size: large;
           font-family: cursive;
       }
    </style>
</head>
<body>
    <center><h1>You will be redirected in : <span id="countdown">5</span>s</h1></center> 
    <p id="demo"></p>
    <center>
        <img src="animation.gif" width="550px" height="400px">
        <div>
            <h1>Thanks for your review.</h1>
            <p>Your review is very important for us.On the basis of your feedback we will continuously improve our service <br> Please come again on mayankal. <br><b style="font-size:xx-large;">Thank you</b></p>
        </div>
    </center> 
    

    <script> 
  
        var seconds = document.getElementById("countdown").textContent;
      var countdown = setInterval(function(){
          seconds--;
          //(seconds == 1) ? document.getElementById("plural").textContent = "" : document.getElementById("plural").textContent = "s";
          document.getElementById("countdown").textContent = seconds;
          if (seconds <= 0) clearInterval(countdown);
      },1000);
      </script> 
</body>
</html>