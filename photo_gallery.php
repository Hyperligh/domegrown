<?php 
require_once'Rconnect.php';
$title = "Beautiful organic farm in Redmond, OR | Dome Grown Produce";
$metad = "Local organic farm has CSA packages available in Redmond, OR | Dome Grown Produce";
require_once'header.php'; 
require_once'populatephotos.php';
?>
				
			
					<div class="hero" id="hero">

						<img src="photos/vegetable-leaf-redmond-farm.jpg" alt="Local produce for CSA shares in Redmond, OR">
						
					</div>
				
<?php require_once'cta.php'; ?>			

		</header>
				
				
					<div class="row1-content cf">
						<div class="left-65 left-row-1">
								<h1><span>Our Photos</span></h1>
								
						
						<ul class="hero border-right" id="hero">

							<?php
								populatePhotos("photogallery", $dbh, 'gallery');
							?>


							
							
						</ul>
						

					
						</div>
						<div class="right-35 right-row-1 center ">
									
							<h3 class="center">Community Supported Agriculture</h3>
								<p>
									Sign up here for CSA packages by downloading the brochure. Just print and mail today.</p>
								<p><a class="anchor" href="pdf/dome-grown-produce-csa-signup-brochure.pdf" target="_blank">Download Brochure Here.</a></p><br />
								<p>Pick up on Wednesday and Friday at the farm from 2-6pm</p>
								<p><em>or</em></p>
								<p>Pick up at Central Oregon Locavore on Thursdays from 3-6pm at</p>
													<p>1216 NE 1st St, Bend, OR 97701</p><br />
							<h4>View our archived photos on Facebook</h4>
							<h4>Coming Soon!</h4>
								<p><a href="#" class="anchor">March 2015</a></p>
								<p><a href="#" class="anchor">April 2015</a></p>
								<p><a href="#" class="anchor">May 2015</a></p>
								<p><a href="#" class="anchor">June 2015</a></p>
								<p><a href="#" class="anchor">July 2015</a></p>
	

												
									
								</div>
								

					</div>
				

						



			
<?php require_once'footer.php' ?>
					

	</div>
	<script>
								$(function () {
								      $(".hero").responsiveSlides({
								        maxwidth: 1194,
								        speed: 1500,
								        timeout: 6800,
								        nav: true

								      });

								    });
	</script>

</body>
</html>