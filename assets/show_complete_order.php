<?php 
	include_once 'connect.php';
	include_once 'check.php';
	include_once 'pagination.php';
	if (!isset($_GET['page'])) {
			$page = 1;
		}else{
			$page = $_GET['page'];
		}
		$this_page_first_result = ($page-1)*$results_per_page;
	$sql = "SELECT * FROM order_complete WHERE `orderof_uid`='$uid' ORDER BY id LIMIT ".$this_page_first_result."," .$results_per_page. "";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	$orid = $row['product_id'];
	        $naama = $row['name'];
	        $prod_id = $row['product_id'];
	        $mode = $row['mode'];
	        $post = $row['post'];
	        $doc = $row['doc_link'];
	        $zip = $row['zip'];
	        $dates = $row['date'];
	echo '<li>
			<!-- Job Listing -->
			<div class="job-listing">

				<!-- Job Listing Details -->
				<div class="job-listing-details">
					<!-- Logo -->
					<!-- Details -->
					<div class="job-listing-description">
						<h3 class="job-listing-title"><a href="../single-freelancer-profile.php?uid='.$row['uid'].'">BY:- '.$naama.'</a></h3>

						<!-- Job Listing Footer -->
						<div class="job-listing-footer">
							<ul>
								<li><i class="icon-material-outline-business"></i>Order No.'.$prod_id.'</li>
								<li><i class="icon-material-outline-location-on"></i>Date :- '.$dates.'</li>
								<li><i class="icon-material-outline-business-center"></i>'.$mode.'</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="buttons-to-right">';
				if ($mode=="POST") {
					echo '<a href="../assets/show_the_post.php?order='.$orid.'" class="button red ripple-effect ico" title="See Post" data-tippy-placement="left"><i class="fas fa-blog"></i></a>';
				}elseif ($mode=="LINK") {
					echo '<a href="'.$doc.'" target="_blank" class="button green ripple-effect ico" title="Doc Link" data-tippy-placement="left"><i class="fas fa-link"></i></a>';
				}elseif ($mode == "ZIP") {
					echo '<a href="../dashboard/upload_zip/'.$zip.'" class="button blue ripple-effect ico" title="Download ZIP File" data-tippy-placement="left"><i class="fas fa-file-archive"></i></a>';
				}else{
					echo'';
				}
		echo'</div>
		</li>';
		}
	} else {
	    echo "0 results";
	}

							

 ?>