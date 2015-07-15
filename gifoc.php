<?php
require_once'Rconnect.php';
ob_start();
$title = "About Dome Grown Produce in Redmond, OR";
$metad = "Local oragnic farm in Redmond, OR offers CSA | Dome Grown Produce";
require_once'header.php';

?>
<style type="text/css">
	#container {
		max-width: 1194px;
		min-width: 1194px;
	}
</style>

			
					<div class="hero" id="hero">

						<img src="photos/winter-dome-grown-farm-redmond-oregon.jpg" alt="Local produce for CSA shares in Redmond, OR">
						
					</div>
	
		

		</header>

				
					<div class="row1-content cf">
						<div class="left-row-1 full">
							<nav>
								<ul id="config-nav">
									<li><a name="nav" value="photo-upload" href="">Photo Upload</a></li>
									<li><a href="" name="">Weekly CSA</a></li>
									<li><a href="">Photo Gallery Photos</a></li>
									<li><a href="">Home Slideshow Photos</a></li>
									<li><a href="">Leads</a></li>

								</ul>
							</nav><br /><br />
					<?php		
					require_once'populatephotos.php';
					//if(isset($_POST['nav']) ) {
						
					//}
					//else {
						

							require_once'photo-upload.php';
							echo"<br /><br /><h1>Weekly CSA Vegetables</h1>";
					
						listphotos("photogallery", $dbh, "weekly-csa", "Veggie Description");


							echo"<br /><br /><h1>Photo Gallery</h1>";
						listphotos("photogallery", $dbh, "gallery", "Alt Text");

							echo"<br /><br /><h1>Home Slideshow Photos</h1>";
						listphotos("photogallery", $dbh, "home-slideshow", "Alt Text");

						echo"<h1>Leads</h1>";
							
						//}



						








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