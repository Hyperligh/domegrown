<?php 
$title = "CSA signup in Redmond, OR local organic farm | Dome Grown Produce";
$metad = "Dome Grown Produce CSA signup to get fresh local vegetables for pickup | Call us for more information at 541-678-3064";
$flag = false;
require_once'header.php'; 
?>
				
			
					<div class="hero" id="hero">

						<img src="photos/stormy-night-in-redmond-local-farms.jpg" alt="Local produce for CSA shares in Redmond, OR">
						
					</div>
				
<?php require_once'cta.php'; ?>			

		</header>
				
				
					<div class="row1-content cf">
						<div class="left-65 left-row-1">
								<h1><span>CSA Signup in Redmond, OR</span></h1>
								<p>The farm is offering a few different share options so you pick the one that is right for you. 
								Simply fill out this form online and pay through PayPal 
								or <a class="anchor" href="pdf/dome-grown-produce-csa-signup-brochure.pdf">download the sign up form</a> and mail to the farm 
								with your payment.</p><br />
								<p>Shares can be made in 2 payments. Half by March 1st and the remainder by June 1st. Month Shares must be paid 
								at the 1st of each month. Pick-up on Wednesday and Friday at the farm from 2-6pm.</p>
								
						</div>
								<div class="right-35 ">
									
									<img src="photos/organic-farm-redmond-or-sunset.jpg">
									
								</div>
					</div>

						<div class="row2-content cf">

							<div class="left-65">
								
									
									<form  class="form" id="form" action="csa_signup.php" method="GET">
										<div class="customer-information">
											<p><label for="name">Name:&nbsp;</label><input type="text" name="name" id="name"><span class="required">*</span></p>
											<p><label for="address">Address:&nbsp;</label><input type="text" name="address" id="address"><span class="required">*</span></p>
											<p><label for="city">City:&nbsp;</label><input type="text" name="city" id="city"><span class="required">*</span></p>
											<p><label for="state">State:&nbsp;</label><input type="text" name="state" id="state"><span class="required">*</span></p>
											<p><label for="zip">Zip:&nbsp;</label><input type="text" name="zip" id="zip"></p>
											<p><label for="phone">Phone:&nbsp;</label><input type="tel" name="phone" id="phone"></p>
											<p><label for="email">Email:&nbsp;</label><input type="email" name="email" id="email"><span class="required">*</span></p>
											<p><span class="required">*</span>&nbsp; Required field</p>
										</div>
									
											<div class="share-options">
											
												<p><h3>Share Options:<span class="required">*</span></h3></p>
													<p>Check the box of your choice <br />CSA runs approximately 22 weeks.</p>
														<ul>
															<fieldset>
															<li><h4>Large Family Share - $600</h4>
																<p class="indent">8-10 items weekly, 3-4 people</p>
																<input type="radio" name="csa-share" id="csa-share1" value="Large Family Share - $600" class="csa-share"></li>

															<li><h4>Small Family Share - $350</h4>
																<p class="indent">6-8 items weekly, 1-2 people</p>
																<input type="radio" name="csa-share" id="csa-share2" value="Small Family Share - $350" class="csa-share"></li>

															<li><h4>Month to Month Share - $125</h4>
																<p class="indent">good option for someone who travels or doesn't need the whole season</p>
																<input type="radio" name="csa-share" class="last-child csa-share" id="csa-share3" value="Month to Month Share - $125"></li>
																</fieldset>
														</ul>
													<p><input type="submit" name="submit" value="Add to Cart"></p>
													

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
			if(validateName() && validateAddress() && validateCity() && validateState() && validateEmail() && validateCheckBox()) {
				$('#verfiy-window').html("<form method='GET' action='csa_confirmation.php'><div id='verify-div'><h4>Name:</h4>"+ "<p>" + 
					$('#name').val() + "</p>" + "<h4>Address:</h4>"+ "<p>" + $('#address').val() + "</p>" +
					"<h4>City:</h4>"+ "<p>" + $('#city').val() + "</p>" + "<h4>State:</h4>"+ "<p>" + $('#state').val() + "</p>" + 
					"<h4>Zip:</h4>"+ "<p>" + $('#zip').val() + "</p>" + "<h4>Phone:</h4>"+ "<p>" + $('#phone').val() + "</p>" + 
					"<h4>Email:</h4>" + "<p>" + $('#email').val() + "</p>" + "<h4>CSA Packages:</h4>" + "<p id='verify-last'>" + $('input[name=csa-share]:checked').val() +

					"</p><input type='submit' name='verify' id='verify' class='submit' value='Verify and Submit'>" + 
					"<input type='hidden' name='name' value='" + $('#name').val() + "'>" +
					"<input type='hidden' name='address' value='" + $('#address').val() + "'>" +
					"<input type='hidden' name='city' value='" + $('#city').val() + "'>" +
					"<input type='hidden' name='state' value='" + $('#state').val() + "'>" +
					"<input type='hidden' name='zip' value='" + $('#zip').val() + "'>" +
					"<input type='hidden' name='phone' value='" + $('#phone').val() + "'>" +
					"<input type='hidden' name='email' value='" + $('#email').val() + "'>" +
					"<input type='hidden' name='csa-share' value='" + $('input[name=csa-share]:checked').val() + "'>" +


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
</html>