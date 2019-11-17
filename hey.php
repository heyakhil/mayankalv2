<?php 
include 'assets/connect.php';
include 'assets/check.php';

	$sql = "SELECT * FROM bookmark WHERE `book_uid`='$uid'";
	$result = mysqli_query($conn, $sql);
	$val = array();
	if (mysqli_num_rows($result) > 0) {
	// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			array_push($val, $row['book_user']) ;
		    //print_r($val[1]);
		}
	} else {
	echo "";
	}


	if (isset($_GET['uby']) || isset($_GET['skeys'])) {
		$name = $_GET['uby'];
		$skill = $_GET['skeys'];
	 if ($skill == "") {
		if ($name == "rating") {
				$sql1 = "SELECT * FROM user,user_info WHERE user.unique_id=user_info.uid  ORDER BY rating DESC ";
			}else if($name == "varification"){
				$sql1 = "SELECT * FROM user,user_info WHERE user.unique_id=user_info.uid AND `verify`='1'";
			}else if ($name == "websites") {
				$sql1 = "SELECT * FROM user,user_info WHERE user.unique_id=user_info.uid ORDER BY no_web DESC";
			}else{
				header("location:error404.php");
			}
		}else{
			$sql1 = "SELECT * FROM `user`,`user_info` WHERE user.unique_id=user_info.uid AND `skills` LIKE '%$skill%'";
		}
		//echo $sql1;
		$result = mysqli_query($conn, $sql1);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$chid = $row['uid'];
		    	$name = $row['name'];
		        $pro_pic = $row["profile_pic"];
		        $v = $row["verify"];
		        $about = substr($row["about_me"], 0, 183) . " ...";
		        $nation = $row["natinality"];
		        $date = $row["date_reg"];
		        if ($pro_pic == '') {
		        	$pic = "images/download.jpg";
		        }else{
		        	$pic = "dashboard/img/".$pro_pic;
		        }
		        if ($v == 0) {
		        	$vms = "Not Varified";
		        	$sp = "";
		        }else{
		        	$vms = "Varified";
		        	$sp = '<span class="verified-badge" title="Verified User" data-tippy-placement="top"></span>';
		        }

		        echo '<a href="user-profile.php?uid='.$chid.'" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="'.$pic.'" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">'.$vms.' '.$sp.'</h4>
							<h3 class="job-listing-title">'.$name.'</h3>
							<p class="job-listing-text">'.$about.'</p>
						</div>';
					if (in_array($chid, $val)) {
						echo '<span class="bookmark-icon selected-bookmarked bookmarked" id="'.$chid.'" onclick="del(this.id)"></span>';

					}else{
						echo '<span class="bookmark-icon" id="'.$chid.'" onclick="add(this.id)"></span>';
					}
			echo '</div><!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<ul>
							<li><i class="icon-material-outline-location-on"></i>'.$nation.'</li>
							<li><i class="icon-material-outline-access-time"></i>'.$date.'</li>
						</ul>
					</div>
				</a>';
		    }
		} else {
		    echo "<center><h3>Sorry No Data is Found</h3></center>";
		} 


	}else{

		$sql = "SELECT * FROM user,user_info WHERE user.unique_id=user_info.uid ORDER BY RAND()";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$chid = $row['uid'];
		    	$name = $row['name'];
		        $pro_pic = $row["profile_pic"];
		        $v = $row["verify"];
		        $about = substr($row["about_me"], 0, 183) . " ...";
		        $nation = $row["natinality"];
		        $date = $row["date_reg"];
		        if ($pro_pic == '') {
		        	$pic = "images/download.jpg";
		        }else{
		        	$pic = "dashboard/img/".$pro_pic;
		        }
		        if ($v == 0) {
		        	$vms = "Not Varified";
		        	$sp = "";
		        }else{
		        	$vms = "Varified";
		        	$sp = '<span class="verified-badge" title="Verified User" data-tippy-placement="top"></span>';
		        }

		        echo '<a href="user-profile.php?uid='.$chid.'" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="'.$pic.'" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">'.$vms.' '.$sp.'</h4>
							<h3 class="job-listing-title">'.$name.'</h3>
							<p class="job-listing-text">'.$about.'</p>
						</div>';
					if (in_array($chid, $val)) {
						echo '<span class="bookmark-icon selected-bookmarked bookmarked" id="'.$chid.'" onclick="del(this.id)"></span>';

					}else{
						echo '<span class="bookmark-icon" id="'.$chid.'" onclick="add(this.id)"></span>';
					}
			echo '</div><!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<ul>
							<li><i class="icon-material-outline-location-on"></i>'.$nation.'</li>
							<li><i class="icon-material-outline-access-time"></i>'.$date.'</li>
						</ul>
					</div>
				</a>';
		    }
		} else {
		    echo "<center><h3>Sorry No Data is Found</h3></center>";
		} 

		
	}
	

 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <script type="text/javascript">


 	function del(name){
 		$.ajax({

 			url : 'assets/delbook.php',
 			type : 'GET',
 			data : {cid : name},

 			success: function(data){
 				console.log('bookmark');
 			}

 		}); 		
 	}


 	function add(name){
 		$.ajax({

 			url : 'assets/addbook.php',
 			type : 'GET',
 			data : {addcid : name},

 			success: function(data){
 				console.log('add bookmark');
 			}

 		});
 	}
 </script>