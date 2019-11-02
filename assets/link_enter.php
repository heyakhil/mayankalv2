<?php 
	include_once 'connect.php';
	if (isset($_POST['submit'])) {
		$link = $_POST['link'];
		$pag = $_POST['pagen'];

		$sql = "INSERT INTO link (link, page)
		VALUES ('$link', '$pag')";

		if (mysqli_query($conn, $sql)) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

 ?>
	
<!DOCTYPE html>
<html>
<head>
	<title>Enter links</title>
</head>
<body>
	<form action="link_enter.php" method="post">
		<input type="text" name="link"><br>
		<input type="text" name="pagen"><br>
		<input type="submit" name="submit">

	</form>
</body>
</html>