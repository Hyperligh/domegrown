

<?php
require_once'Rconnect.php';

										


?>
<?php
$title = "Seasonal recipes to help you cook with your CSA package vegetables from Dome Grown Produce";
$metad = "Dome Grown Produce has special recipes to help you with your organic CSA packages in Redmond, OR";
require_once'header.php';
?>
				
			
					<div class="hero" id="hero">

						<img src="photos/stormy-night-in-redmond-local-farms.jpg" alt="Local produce for CSA shares in Redmond, OR">
						
					</div>
				
<?php require_once'cta.php'; ?>			

		</header>
				
				
					<div class="row1-content cf">
						<div class="left-65 left-row-1">
								<h1><span>Recipes for seasonal vegetables</span></h1>
								

							<p>Check back soon to get recipces for your vegetables you get through our CSA.
							</p>
							

					
						</div>
								<div class="right-35 right-row-1 center ">
									
									
									
								</div>

					</div>
				

							
							


			
<?php require_once'footer.php' ?>
					

	</div>
<?php
	$sql = "INSERT INTO csa (name, address, city, state, zip, phone, email, csaShare) VALUES ('hello', '1234', 'bend', 'or', '97701', '123', '145', 'csa-share')";
										$result = mysqli_query($dbh, $sql) or die ("Already submitted once");

										?>
</body>
</html>