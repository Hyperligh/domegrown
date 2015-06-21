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
								

							<div id="gmap" class="gmap"></div>
						<div class="canvas_map" id="canvas_map" ></div>
						<div class="gm-style"  class="gm-style"></div>
						<div class="map_canvas" id="map_canvas"></div>

							
							</p>
							

					
						</div>
								<div class="right-35 right-row-1">
									<h3>Driving directions to our farm in Redmond, OR</h3>
									<p><strong>From South US 97</strong></p>
										<ul class="indent">
											<li>Head North on US-97</li>
											<li>Turn left onto 61st</li>
											<li>Follow that until you arrive at Dome Grown Produce</li>
											<li>7858 Sw 61st St</li>
										</ul><br />

										<p><strong>From North US 97</strong></p>
										<ul class="indent">
											<li>Head South on US-97</li>
											<li>Turn right onto 61st</li>
											<li>Follow that until you arrive at Dome Grown Produce</li>
											<li>7858 Sw 61st St</li>
										</ul>

									
									
									
								</div>

					</div>
				



			
<?php require_once'footer.php' ?>

	<script>
$('#map_canvas').gmap().bind('init', function(ev, map) {
	
	$('#map_canvas').gmap('addMarker', {'position': '44.203198,-121.243131', 'bounds': true}).click(function() {
		$('#map_canvas').gmap('openInfoWindow', {'content': '7858 Sw 61st St. Redmond, OR 97756'}, this);


	});
	$('#map_canvas').gmap('option', 'zoom', 15);
});
</script>


				

	</div>
</body>
</html>