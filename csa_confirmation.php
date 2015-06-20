<?php
ob_start();
require_once'Rconnect.php';
$title = "Thank you for submitting your CSA form to Dome Grown Produce";
$metad = "Redmond, Oregon organic farm thanks you for submitting your CSA signup form | Dome Grown Produce";
require_once'header.php';
?>
				
			
					<div class="hero" id="hero">

						<img src="photos/flowering-vegetables-farm-redmond.jpg" alt="Local produce for CSA shares in Redmond, OR">
						
					</div>
				
<?php require_once'cta.php'; ?>			

		</header>
				
				
					<div class="row1-content cf">
						<div class="left-65 left-row-1">
							<?php
								if(isset($_POST['verify'])) {
									echo"<h1><span>Thank You For Submitting</span></h1>
										<p>Thank you for singing up for our CSA packages. We will be contacting you shortly about payment. We will redirect
										you to the homepage.</p>";
									$name = mysqli_real_escape_string($dbh, trim($_POST['name']));
									$address = mysqli_real_escape_string($dbh, trim($_POST['address']));
									$city = mysqli_real_escape_string($dbh, trim($_POST['city']));
									$state = mysqli_real_escape_string($dbh, trim($_POST['state']));
									$zip = mysqli_real_escape_string($dbh, trim($_POST['zip']));
									$phone = mysqli_real_escape_string($dbh, trim($_POST['phone']));
									$email = mysqli_real_escape_string($dbh, trim($_POST['email']));
									$csaShare = mysqli_real_escape_string($dbh, trim($_POST['csaShare']));
									$eggs = mysqli_real_escape_string($dbh, trim($_POST['eggs']));
									$total = mysqli_real_escape_string($dbh, trim($_POST['total']));

									
									$msg = "Thank you for signing up for our CSA share program. We will be contacting you \r\n Name: ".$name."\r\n Address: ".$address."\r\n City: ".$city."\r\n State: ".$state."\r\n Zip: ".$zip."\r\n Phone: ".$phone."\r\n Email: ".$email."\r\n CSA Share: ".$csaShare."\r\n Eggs: ".$eggs."\r\n Total: ".$total;
									$msg = wordwrap($msg, 70);
									$headers = "FROM: DomeGrownProduce";

										$sql = "INSERT INTO csa(name, address, city, state, zip, phone, email, csaShare, eggs, total) VALUES ('$name', '$address', '$city', '$state', '$zip', '$phone', '$email', '$csaShare', '$eggs', '$total')";
										$result = mysqli_query($dbh, $sql) or die ("Already submitted once");
										mail("amanda@domegrown.org", "CSA Signup Confirmation", $msg, $headers);
										mail($email, "CSA Signup Confirmation", $msg, $headers);

										header('Refresh: 4;url=index.php');
										

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