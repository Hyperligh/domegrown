<?php
session_start();
ob_start();
require_once'connect.php';
$title = "Thank you for submitting your CSA form to Dome Grown Produce";
$metad = "Redmond, Oregon organic farm thanks you for submitting your CSA signup form | Dome Grown Produce";
require_once'header.php';
?>
				
			
					<div class="hero" id="hero">

						<img src="photos/stormy-night-in-redmond-local-farms.jpg" alt="Local produce for CSA shares in Redmond, OR">
						
					</div>
				
<?php require_once'cta.php'; ?>			

		</header>
				
				
					<div class="row1-content cf">
						<div class="left-65 left-row-1">
							<?php
								if(isset($_GET['verify'])) {
									echo"<h1><span>Thank You For Submitting</span></h1>
										<p>Thank you for singing up for our CSA packages. We will be contacting you shortly about payment. We will redirect
										you to the homepage.</p>";
									$name = mysqli_real_escape_string($dbh, trim($_GET['name']));
									$address = mysqli_real_escape_string($dbh, trim($_GET['address']));
									$city = mysqli_real_escape_string($dbh, trim($_GET['city']));
									$state = mysqli_real_escape_string($dbh, trim($_GET['state']));
									$zip = mysqli_real_escape_string($dbh, trim($_GET['zip']));
									$phone = mysqli_real_escape_string($dbh, trim($_GET['phone']));
									$email = mysqli_real_escape_string($dbh, trim($_GET['email']));
									$csaShare = mysqli_real_escape_string($dbh, trim($_GET['csa-share']));


										$sql = "INSERT INTO csa (name, address, city, state, zip, phone, email, csaShare) VALUES ('$name', '$address', '$city', '$state', '$zip, '$phone', '$email', '$csaShare')";
										$result = mysqli_query($dbh, $sql) or die ("Already submitted once");
										

								}
								else{
									echo "<h1>Not Authorized to be here</h4>";
									echo "<p>We will redirect you back home</p>";
									header('Refresh: 1;url=index.php');
								}
							?>
							
							

					
						</div>
								<div class="right-35 right-row-1 center ">
									
									
									
								</div>

					</div>
				

							


			
<?php require_once'footer.php' ?>
					

	</div>
</body>
</html>