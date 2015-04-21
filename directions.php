<?php 
$title = "Directions to Dome Grown Produce in Redmond, Oregon";
$metad = "Redmond, OR local organic farm is easy to get to, just follow these directions";
require_once'header.php';
?>
		
			
					<div class="hero" id="hero">

						<img src="photos/stormy-night-in-redmond-local-farms.jpg" alt="Local produce for CSA shares in Redmond, OR">
						
					</div>
				
<?php require_once'cta.php'; ?>			

		</header>
				
				
					<div class="row1-content cf">
						<div class="left-65 left-row-1">
								<h1><span>Directions to Dome Grown Produce</span></h1>
								

							<div id="gmap"></div>
							<div id="controls"></div>
							
							</p>
							

					
						</div>
								<div class="right-35 right-row-1 center ">
									
									
									
								</div>

					</div>
				

							


			
<?php require_once'footer.php' ?>
<script src="js/maplace-0.1.3.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
	
<script type="text/javascript">
		$(function() {
    new Maplace({
        locations: [{44.1}, {-121.3}],
        controls_on_map: false
    }).Load();
});
</script>

				

	</div>
</body>
</html>