<?php 
	$pass = substr(md5(uniqid(mt_rand(), true)) , 0, 26);

 ?>
<!doctype html>
<html>
<head>
	<title>Registration Form </title>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
	
	<center><h2><b>Register Your Websites</b></h2></center>
		<div class="container">
		    <form action="../assets/webdata.php" method="post">
				<div class="form-group">
					<label for="Websitename">Website Name:</label>
					<input type="text"  name ="websitename" class="form-control" required>
					<label for="link">Link:</label>
					<input type="text"  name="link" class="form-control" required>
				</div>
				
				<div class="form-group">
					<label for="Traffic">Traffic:(per Month)</label>
					<input type="text"  name="traffic" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="Noofposttilldate">No of Post on this site till Date:</label>
					<input type="number"  name="post" class="form-control" required>

				</div>
				<div class="form-group">
					<label for="DA">D.A.:</label>
					<input type="number"  name="DA" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="PA">P.A.:</label>
					<input type="number"  name="PA" class="form-control" required>
				</div>
				<div   class="form-group">
					<label for="catagory">Category:</label>
					
						<select for="catagory" name="catagory" class="form-control" required>
  								<option value="">Select Category</option>
  								<option value="Entertainment">Entertainment</option>
  								<option value="Sports">Sports</option>
  								<option value="Politics">Politics</option>
  								<option value="Food">Food</option>
  								<option value="Education">Education</option>
  								<option value="Personal">Personal</option>
  								<option value="Fashion">Fashion</option>
  								<option value="Bussiness">Bussiness</option>
  								<option value="Games/Movies">Games/Movies</option>
  								<option value="Fitness/Health">Fitness/Health</option>
  								<option value="Lifestyle">Lifestyle</option>
  								<option value="Pets">Pets</option>
  								<option value="Photography">Photography</option>
  								<option value="Website Tools">Websites Tools</option>
  								<option value="Home & Garden">Home & Garden</option>
  								<option value="Other">Other</option>
						</select>
				
				</div>
				<div class="form-group">
					<label for="niche">Niche:</label>
					<input type="text"  name="niche" class="form-control">
				</div>
				<div class="form-group">
					<label for="niche">Verify your website : <b>(Paste this to your Homepage of your Website)</b></label>
					<textarea rows="2" cols="150" name="ver_code" value="<?php echo $pass; ?>"><meta name="name" content="<?php echo $pass; ?>"></textarea>
				</div>
				
				<div class="container btn">
					<button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
	            </div>
			</form>
		</div><br><br>
			
</body>
</html>
