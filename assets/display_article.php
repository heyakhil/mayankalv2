<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/colors/blue.css">

<?php 
	include 'connect.php';

	if ($_POST['ord_id'] != "") {
		$order_id = $_POST['ord_id'];
		$sql = "SELECT * FROM order_complete WHERE `product_id`='$order_id'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		        ?>
			<ul class="popup-tabs-nav">
				<h3 style="text-align: center;">"Just Copy The Title and Article"</h3>
			</ul>
			<div class="popup-tabs-container-fluid">
				<div class="container" ><br><h1><b>Title:</b><?php echo $row['title']; ?></h1><hr><br>
					<textarea rows="10" cols="30" ><?php echo strip_tags($row['post']); ?>
					</textarea>
				</div>
					<button class="button full-width button-sliding-icon ripple-effect" >Copy To Clipboard</button>
				</div>
	
		
	
		        <?php
		    }
		} else {
		    echo "0 results";
		}


	}	

 ?>

 <script src="../js/copyme.js"></script>
<script>
	$('button').click(function(){
	  $('textarea').copyme();
	
	});