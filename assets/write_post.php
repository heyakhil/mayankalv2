<?php 
	include 'connect.php';
	include 'check.php';

	if (isset($_POST['submit'])) {
		$title = $_POST['title'];
		$written_post = mysqli_real_escape_string($conn, $_POST['editor']);
		$da = date("Y-m-d");
		$order_id = $_POST['order_id'];
		$customer = $_POST['customer'];

		$sql = "INSERT INTO `order_complete`(`name`, `product_id`, `uid`, `orderof_uid`, `title`, `post`, `date`) VALUES ('$name','$order_id','$uid','$customer','$title','$written_post','$da')";

		if (mysqli_query($conn, $sql)) {
		    $sql = "DELETE FROM orders WHERE `order_id`='$order_id'";
					if (mysqli_query($conn, $sql)) {
					    ?>
					    <script type="text/javascript">
				 			window.open("../dashboard/allorders.php", "_self");
				 			alert("Congratullation You Post Is Sent");
						</script>
				<?php
					} else {
			 	    echo "Error deleting record: " . mysqli_error($conn);
			 	}
				 } else {
				     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				 }

	}else{
		header("location:logout.php");
	}


 ?>