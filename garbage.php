<?php
			$sql = "SELECT * FROM user,user_info WHERE user.unique_id=user_info.uid";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$name = $row["name"];
		        $pro_pic = $row["profile_pic"];
		        $v = $row["verify"];
		        $about = substr($row["about_me"], 0, 183) . " ...";
		        $nation = $row["natinality"];
		        $e = $row["email"];
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
		        	$sp = '<span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span>';
		        }
		        echo '<a href="single-job-page.html" class="job-listing">

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
						</div>

						<!-- Bookmark -->
						<span class="bookmark-icon"></span>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>';
		    }
		} else {
		    echo "0 results";
		} ?>