
								<h1><span>Photo Upload</span></h1><br />
								
									<form action="config2.php" method="post" enctype="multipart/form-data">

									<p>Gallery deminsions: 1000px X 549px</p>
									<p>Hero deminnsions: 1600px X 615px</p>
									<p>Weekly CSA deminsions: 220px x 200px</p><br /><br />

										<label for="caption">Alt text/Veggie Description:</label>
										<input type="text" name="caption" id="caption"><br>

										<label for="title">Photo Title/Veggie Name:</label>
										<input type="text" name="title" id="title"><br>

										<label for="file">Category:</label>
										<select name="category">
											<option name="category" value="gallery">gallery</option>
											<option name="category" value="home-slideshow">home-slideshow</option>
											<option name="category" value="weekly-csa">weekly-csa</option>
										</select><br>

										<label for="file">File:</label>
										<input type="file" name="file" id="file"><br>

										<input type="submit" name="submit" value="Submit">
									</form>

						
<?php 
						if(isset($_POST['submit'])) {
							$category = "photogallery";
							$title = $_POST['title'];
							$caption = $_POST['caption'];
							$category = $_POST['category'];
							require_once'class.fileupload.php';

							$myFile = new FileUpload('photos/'.$category.'/');
							$myFile->upload(current($_FILES), $dbh, $title, $caption, $category);
						}

?>