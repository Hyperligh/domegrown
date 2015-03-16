<?php
$title = "Get in contact with the organic local farm in Redmond, OR | Dome Grown Produce";
$metad = "Get in contact with Dome Grown Produce about the organic farm that has CSA share signups";
require_once'header.php'; 

?>
				
			
					<div class="hero" id="hero">

						<img src="photos/stormy-night-in-redmond-local-farms.jpg" alt="Local produce for CSA shares in Redmond, OR">
						
					</div>
				
<?php require_once'cta.php'; ?>			

		</header>
				
				
					<div class="row1-content cf">
						<div class="left-65 left-row-1">
							<h1><span>Contact Dome Grown Produce</span></h1>
								
								<form class="form" action="csa_signup.php" method="POST">
								<p><label for="name">Name:&nbsp;</label><input type="text" name="name" id="name"></p>
								<p><label for="address">Address:&nbsp;</label><input type="text" name="address" id="address"></p>
								<p><label for="city">City:&nbsp;</label><input type="text" name="city" id="city"></p>
								<p><label for="state">State:&nbsp;</label><input type="text" name="state" id="state"></p>
								<p><label for="zip">Zip:&nbsp;</label><input type="text" name="zip" id="zip"></p>
								<p><label for="phone">Phone:&nbsp;</label><input type="tel" name="phone" id="phone"></p>
								<p><label for="email">Email:&nbsp;</label><input type="email" name="email" id="email"></p>
								<p><input type="submit" name="submit" value="Submit Form"></p>
								</form>
							

					
						</div>
								<div class="right-35 right-row-1 center ">
									
									
									
								</div>

					</div>
				

							


			
<?php require_once'footer.php' ?>
				<?php
					if(isset($_POST['verify'])){
						$name = $_POST['name'];
					}

				?>	

	</div>
</body>
</html>