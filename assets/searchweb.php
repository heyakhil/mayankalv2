<?php 
include 'connect.php';
//include 'check.php';
	if (isset($_GET['submit'])) {

		$cat = $_GET['catagory'];
		$traffic = $_GET['optradio'];
		$dp = $_GET['dapa'];
		$mp = $_GET['mpoints'];

	if (!empty($cat)) {	
		$tcat = count($cat);
		$sql = "SELECT * FROM web_info WHERE catagory LIKE '%$cat[0]%';";
		 for ($i=1; $i<$tcat; $i++) { 
		 $sql .= "SELECT * FROM web_info WHERE catagory LIKE '%$cat[$i]%';";
		 }
		if (mysqli_multi_query($conn, $sql)) {
			do {
			    /* store first result set */
			    if ($result = mysqli_store_result($conn)) {
			        while ($row = mysqli_fetch_array($result)) 
					/* print your results */    
					{
					//echo $row['web_uid'];
						echo '<a href="'.$row['web_link'].'" class="task-listing" target="_blank">
							<!-- Job Listing Details -->
							<div class="task-listing-details">

								<!-- Details -->
								<div class="task-listing-description">
									<h3 class="task-listing-title">'.$row['web_name'].'</h3>
									<ul class="task-icons">
										<li><b>Niche: </b></li>'.$row['niche'].'</li>
										<li><b>Total Post: </b>'.$row['web_post'].' / month</li>
									</ul>
								</div>

							</div>

							<div class="task-listing-bid">
								<div class="task-listing-bid-inner">
									<div class="task-offers">
										<strong>'.$row['catagory'].'</strong>
										<span><strong>Mpoints: '.$row['mpoint'].'</strong></span>
									</div>
									<span class="button button-sliding-icon ripple-effect">Ping1 <i class="icon-material-outline-arrow-right-alt"></i></span>
								</div>
							</div>
						</a>';
					}
					mysqli_free_result($result);
					}   
					} while (mysqli_next_result($conn));
					}
				}
				if (!empty($traffic) || !empty($dp) || !empty($mp)) {
					 $fil = array();
					 $tafil = array();
					if (!empty($traffic)) {
						array_push($fil, "optradio");
						array_push($tafil, "web_traffic");
					}
					if (!empty($dp)) {
						array_push($fil, "dapa");
						array_push($tafil, "da");
					}
					if (!empty($mp)) {
						array_push($fil, "mpoints");
						array_push($tafil, "mpoint");
					}
					for ($i=0; $i<count($fil) ; $i++) { 
						if ($_GET[$fil[$i]] == "9") {
							$sql1 .= "SELECT * FROM web_info WHERE $tafil[$i] >= 9;";
						}else if ($_GET[$fil[$i]] == "7") {
							$sql1 .= "SELECT * FROM web_info WHERE $tafil[$i] >= 7 AND $tafil[$i]<=8;";
						}else if ($_GET[$fil[$i]] == "5") {
							$sql1 .= "SELECT * FROM web_info WHERE $tafil[$i] >= 5 AND $tafil[$i]<=6;";
						}else if ($_GET[$fil[$i]] == "3") {
							$sql1 .= "SELECT * FROM web_info WHERE $tafil[$i] >= 3 AND $tafil[$i]<=4;";
						}else{
							$sql1 .= "SELECT * FROM web_info WHERE $tafil[$i] <= 2";
						}
					}
			if (mysqli_multi_query($conn, $sql1)) {
			do {
			    /* store first result set */
			    if ($result = mysqli_store_result($conn)) {
			        while ($row = mysqli_fetch_array($result)) 
					/* print your results */    
					{
					//echo $row['web_uid'];
						echo '<a href="'.$row['web_link'].'" class="task-listing" target="_blank">
							<!-- Job Listing Details -->
							<div class="task-listing-details">

								<!-- Details -->
								<div class="task-listing-description">
									<h3 class="task-listing-title">'.$row['web_name'].'</h3>
									<ul class="task-icons">
										<li><b>Niche: </b></li>'.$row['niche'].'</li>
										<li><b>Total POst: </b>'.$row['web_post'].' / month</li>
									</ul>
								</div>

							</div>

							<div class="task-listing-bid">
								<div class="task-listing-bid-inner">
									<div class="task-offers">
										<strong>'.$row['catagory'].'</strong>
										<span><strong>Mpoints: '.$row['mpoint'].'</strong></span>
									</div>
									<span class="button button-sliding-icon ripple-effect">Ping1 <i class="icon-material-outline-arrow-right-alt"></i></span>
								</div>
							</div>
						</a>';
					}
					mysqli_free_result($result);
					}   
					} while (mysqli_next_result($conn));
					}

				}

		}else{
			$sql = "SELECT * FROM `web_info` ORDER BY RAND()";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
					        echo '<a href="'.$row['web_link'].'" class="task-listing" target="_blank">
									<!-- Job Listing Details -->
									<div class="task-listing-details">

										<!-- Details -->
										<div class="task-listing-description">
											<h3 class="task-listing-title">'.$row['web_name'].'</h3>
											<ul class="task-icons">
												<li><b>Niche: </b></li>'.$row['niche'].'</li>
												<li><b>Total POst: </b>'.$row['web_post'].' / month</li>
											</ul>
										</div>

									</div>

									<div class="task-listing-bid">
										<div class="task-listing-bid-inner">
											<div class="task-offers">
												<strong>'.$row['catagory'].'</strong>
												<span><strong>Mpoints: '.$row['mpoint'].'</strong></span>
											</div>
											<span class="button button-sliding-icon ripple-effect">Ping <i class="icon-material-outline-arrow-right-alt"></i></span>
										</div>
									</div>
								</a>';
					    }
					} else {
					    echo "0 results";
					}
		}


 ?>