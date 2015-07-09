<?php
	function populatePhotos($table, $dbh, $category) {
		$sql = "SELECT * FROM $table WHERE category = '$category' AND archive = 1  ORDER BY path ASC;";
		$results = mysqli_query($dbh, $sql) or die ("No photos available at this time. Thank you for understanding");
											
			while($row = mysqli_fetch_assoc($results)){
				echo"<img src='{$row['path']}' alt='{$row['caption']}'>";
				}

	}

	function listPhotos($table, $dbh, $category, $altText) {
		$sql = "SELECT * FROM $table WHERE category = '$category'  GROUP BY path ASC";
		$results = mysqli_query($dbh, $sql) or die ("No photos available at this time. Thank you for understanding");
				echo"<table><tr><th>Photo</th><th>{$altText}</th><th>Archive(0 = hide, 1 = show)</th><th>Change Picture information</th></tr>";							
			while($row = mysqli_fetch_assoc($results)){
				echo"<form id='photolist' class='photo-list' action='_config.php' method='GET'><tr><td><img id='listThumbs' src='{$row['path']}' alt='{$row['caption']}'></td><td><input type='text' name='alt' value='".$row['caption']."'></td><td><input type='text' name='archive' value='".$row['archive']."'></td><td><input type='hidden' name='path' value='".$row['path']."'><input class='center' id='submit' type='submit' name='archivesubmit'></td></tr></form>";
				}
				echo "</table>";


					if(isset($_GET['archivesubmit'])) {
						$path = $_GET['path'];
						$archive = $_GET['archive'];
						$altText = $_GET['alt'];

						$sql = "UPDATE $table set archive = '$archive', caption = '$altText' WHERE path = '$path'";
						$result = mysqli_query($dbh, $sql) or die ("Incorrect Value");
						
						header('Refresh: .1;url=_config.php');

						if(isset($GET['archivesubmit'])){
							echo"<p>You have updated!</p>";
						}
					}
	}



	function weeklyList($table, $dbh, $category, $altText) {
		$sql = "SELECT * FROM $table WHERE category = '$category' AND archive = 1  GROUP BY path ASC";
		$results = mysqli_query($dbh, $sql) or die ("No photos available at this time. Thank you for understanding");
				echo"<table><tr><th>Name</th><th>{$altText}</th><th>Photo</th></tr>";							
			while($row = mysqli_fetch_assoc($results)){
				echo"<tr><td>".$row['title']."<td>".$row['caption']."</td></td><td><img id='listThumbs' src='{$row['path']}' alt='{$row['caption']}'></td></tr>";
				}
				echo "</table>";


					
	

	

	}			


?>