<?php
ob_start();
require_once'connect.php';
$title = "About Dome Grown Produce in Redmond, OR";
$metad = "Local oragnic farm in Redmond, OR offers CSA | Dome Grown Produce";
require_once'header.php';

?>
				
			
					<div class="hero" id="hero">

						<img src="photos/winter-dome-grown-farm-redmond-oregon.jpg" alt="Local produce for CSA shares in Redmond, OR">
						
					</div>
				
		

		</header>
				
				
					<div class="row1-content cf">
						<div class="left-row-1">
								<h1><span>Photo gallery Upload</span></h1>
								
									<form action="_config.php" method="post" enctype="multipart/form-data">

										<label for="caption">Alt text:</label>
										<input type="text" name="caption" id="caption"><br>

										<label for="title">Title:</label>
										<input type="text" name="title" id="title"><br>

										<label for="file">File:</label>
										<input type="file" name="file" id="file"><br>

										<input type="submit" name="submit" value="Submit">
									</form>

						
					<?php 
						if(isset($_POST['submit'])) {
							$category = "photogallery";
							$title = $_POST['title'];
							$caption = $_POST['caption'];
							require_once'class.fileupload.php';
							$myFile = new FileUpload('photos/gallery/');
							$myFile->upload(current($_FILES), $dbh, $title, $caption, $category);
						}
						require_once'populatephotos.php';

						listphotos("photogallery", $dbh);






					?>


					
						</div>
								

					</div>

					<div class="row2-content cf">

								<div class="left-65">
									<h1><span>Weekly CSA Upload</span></h1>

								</div>
										<div class="right-35 right-row-2 center">
											
										</div>
					</div>
				

							


			
<?php require_once'footer.php' ?>
					

	</div>
</body>
</html>