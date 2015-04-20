<?php
$title = "Get in contact with the organic local farm in Redmond, OR | Dome Grown Produce";
$metad = "Get in contact with Dome Grown Produce about the organic farm that has CSA share signups";
require_once'header.php'; 

?>
				
			
					<div class="hero" id="hero">

						<img src="photos/weekly-csa-vegetables-redmond-farm.jpg" alt="Local produce for CSA shares in Redmond, OR">
						
					</div>
				
<?php require_once'cta.php'; ?>			

		</header>
				
				
					<div class="row1-content cf">
						<div class="left-65 left-row-1">
							<h1><span>Contact Dome Grown Produce</span></h1>
								<p>Fill this form out and Dome Grown Produce will contact you soon.</p>
										
						</div>
								<div class="right-35 ">
									
									
									
								</div>
					</div>

						<div class="row2-content cf">

							<div class="left-65">
								
									
									<form  class="form" id="form" action="csa_signup.php" method="POST">
										<div class="customer-information">
											<p><label for="name">Name:&nbsp;</label><input type="text" name="name" id="name"><span class="required">*</span></p>
											<p><label for="address">Address:&nbsp;</label><input type="text" name="address" id="address"><span class="required">*</span></p>
											<p><label for="city">City:&nbsp;</label><input type="text" name="city" id="city"><span class="required">*</span></p>
											<p><label for="state">State:&nbsp;</label><input type="text" name="state" id="state"><span class="required">*</span></p>
											<p><label for="zip">Zip:&nbsp;</label><input type="text" name="zip" id="zip"></p>
											<p><label for="phone">Phone:&nbsp;</label><input type="tel" name="phone" id="phone"></p>
											<p><label for="email">Email:&nbsp;</label><input type="email" name="email" id="email"><span class="required">*</span></p>
											<p><span class="required">*</span>&nbsp; Required field</p>
											<p><input class="submit" type="submit" name="submit" value="Submit"></p>
										</div>
									
			

									</form>
						
						</div>
						
										<div class="right-35 right-row-2 ">
											
												
											<div id="error"></div>
											<div id="verfiy-window"> 
												
											</div>
	
										</div>

						</div>
	
<?php require_once'footer.php' ?>
<script src="js/form_validation.js"></script>					

	</div>
	<script>
		$(document).ready(function() {

			$('.form').submit(function(){
			if(validateName() && validateAddress() && validateCity() && validateState() && validateEmail()) {
				$('#verfiy-window').html("<form method='POST' action='contact_confirmation.php'><div id='verify-div'><h4>Name:</h4>"+ "<p>" + 
					$('#name').val() + "</p>" + "<h4>Address:</h4>"+ "<p>" + $('#address').val() + "</p>" +
					"<h4>City:</h4>"+ "<p>" + $('#city').val() + "</p>" + "<h4>State:</h4>"+ "<p>" + $('#state').val() + "</p>" + 
					"<h4>Zip:</h4>"+ "<p>" + $('#zip').val() + "</p>" + "<h4>Phone:</h4>"+ "<p>" + $('#phone').val() + "</p>" + 
					"<h4>Email:</h4>" + "<p>" + $('#email').val() + "</p>" + 
					"</p><input type='submit' name='verify' id='verify' class='submit' value='Verify and Submit'>" + 
					"<input type='hidden' name='name' value='" + $('#name').val() + "'>" +
					"<input type='hidden' name='address' value='" + $('#address').val() + "'>" +
					"<input type='hidden' name='city' value='" + $('#city').val() + "'>" +
					"<input type='hidden' name='state' value='" + $('#state').val() + "'>" +
					"<input type='hidden' name='zip' value='" + $('#zip').val() + "'>" +
					"<input type='hidden' name='phone' value='" + $('#phone').val() + "'>" +
					"<input type='hidden' name='email' value='" + $('#email').val() + "'>" +
					"</form></div>"
						

					);
				return false;
			}
			else {
				return false;

			}

			});
		});
	</script>

</body>
</body>
</html>