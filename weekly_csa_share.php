<?php
require_once'Rconnect.php';
$title = "Weekly CSA shares | Dome Grown Produce";
$metad = "These are the weekly CSA shares you will be getting at the CSA farm in Redmond.";

require_once'header.php';
require_once'populatephotos.php';

?>
				
				
					<ul class="hero" id="hero">
						
						
						<li><img src="photos/purple-flower-redmond-local-farm.jpg" alt="Local produce in Bend, OR"></li>
						
					</ul>
				
<?php require_once'cta.php'; ?>		


		</header>
				
				
					<div class="row1-content cf">
						<div class="left-row-1 full">
								<h1><span>Your Weekly CSA Share</span></h1>
									<!--<p>Here is a picture and desctription of the veggies you will be recieving this week.</p> -->
								

									<div id="weekly-csa">	
									<?php 
										weeklyList("photogallery", $dbh, "weekly-csa", "Veggie Description");


									?>
									</div>
							

							
							

					
						</div>
								<div class="right-35 right-row-1 center ">

									
									
								</div>

					</div>
				



			
<?php require_once'footer.php' ?>			
					

	</div>
							
</body>
</html>