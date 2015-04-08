<?php
ob_start();
require_once'Rconnect.php';
$title = "Thank you for contacting Dome Grown Produce";
$metad = "Redmond, Oregon organic farm thanks you for contacting Dome Grown Produce";
require_once'header.php';
?>
				
			
					<div class="hero" id="hero">

						<img src="photos/weekly-csa-vegetables-redmond-farm.jpg" alt="Local produce for CSA shares in Redmond, OR">
						
					</div>
				
<?php require_once'cta.php'; ?>			

		</header>
				
				
					<div class="row1-content cf">
						<div class="left-65 left-row-1">
							<?php
								if(isset($_POST['verify'])) {
									echo"<h1><span>Thank You For Submitting</span></h1>
										<p>Thank you for contacting Dome Grown Produce. We will be contacting you shortly. We will redirect
										you to the homepage.</p>";
									$name = mysqli_real_escape_string($dbh, trim($_POST['name']));
									$address = mysqli_real_escape_string($dbh, trim($_POST['address']));
									$city = mysqli_real_escape_string($dbh, trim($_POST['city']));
									$state = mysqli_real_escape_string($dbh, trim($_POST['state']));
									$zip = mysqli_real_escape_string($dbh, trim($_POST['zip']));
									$phone = mysqli_real_escape_string($dbh, trim($_POST['phone']));
									$email = mysqli_real_escape_string($dbh, trim($_POST['email']));
									$msg = "Thank you for contacting Dome Grown Produce. \r\n Name: ".$name."\r\n Address: ".$address."\r\n City: ".$city."\r\n State: ".$state."\r\n Zip: ".$zip."\r\n Phone: ".$phone."\r\n Email: ".$email;
									$msg = wordwrap($msg, 70);
									$headers = "FROM: DomeGrownProduce";


										$sql = "INSERT INTO contact(name, address, city, state, zip, phone, email) VALUES ('$name', '$address', '$city', '$state', '$zip', '$phone', '$email')";
										$result = mysqli_query($dbh, $sql) or die ("Already submitted once");
										mail("amanda@domegrown.org", "Thank you for contacting Dome Grown Produce", $msg, $headers);
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