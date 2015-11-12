<?php session_start() ?>
<?php
$imagen = 'logohome.png';
include 'tpl/header.tpl.html' ?>
			<div class="page-header" style="background-image:url(images/title-6.jpg)" data-stellar-background-ratio="0.2">
		        <div class="container">
		            <div class="row">
		            	<div class="col-sm-12">
							<ol class="breadcrumb">
							  <li><a href="index.php">Inicio</a></li>
							  <li class="active">Contacto</li>
							</ol>
						  <h1>Contáctenos</h1>
		            	</div>
					</div>
	            </div>
	        </div>
            <section id="contact">
                <div class="container">
                    <div class="row">
	                    <div class="col-sm-7">
							<form method="post" action="send.php">
                                <?php if (isset($_SESSION['MESSAGE'])): ?>
                                    <div class="alert alert-info alert-dismissible fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="font-size: 1.9em;">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <p><?php echo $_SESSION['MESSAGE'] ?></p>
                                    </div>
                                    <?php unset($_SESSION['MESSAGE']) ?>
                                <?php endif ?>
                                <div class="form-group">
                                    <label for="nombreApellido">Nombre y Apellido</label>
                                    <input type="text" class="form-control" id="nombreApellido" name="nombre">
                                </div>
								<div class="form-group">
								    <label for="msg-email">Correo Electrónico</label>
								    <input type="email" class="form-control" id="msg-email" name="correo">
								</div>
								<div class="form-group">
								    <label for="msg-email">Asunto</label>
									<input class="form-control" type="text" name="asunto">
								</div>
								<div class="form-group">
								    <label for="msg-text">Mensaje</label>
								    <textarea rows="6" class="form-control" id="msg-text" placeholder="Escriba su mensaje..." name="mensaje"></textarea>
								</div>

								<button class="btn btn-primary btn-lg btn-animated btn-style-1" type="submit">
    								<span class="btn-label">Enviar mensaje</span>
    								<span class="btn-icon fa fa-envelope"></span>
								</button>
							</form>
	                    </div>
                        <div class="col-sm-5">
                        	<h2>Visítenos</h2>
                        	<h3>Lima / La Victoria</h3>
                        	<p>
                        	     <span class="fa fa-map-marker primary bigger"></span> Jr: Abtao N° 1279 - alt. Cdra 8, Av. México
                                 <br>
                                 <i class="fa fa-phone"></i> 761-6376 &nbsp; <i class="fa fa-mobile fa-fw"></i> <span class="hidden-xs"> RPM: </span>#995510517 / <span class="hidden-xs"> RPM: </span>*855644 / <span class="hidden-xs"> RPC: </span>989024356
                        	</p>
                        	<h3>Lima / Cañete (Central)</h3>
                        	<p>
                        	     <span class="fa fa-map-marker primary bigger"></span> Fundo Santa Adela s/n Nuevo Imperial. (Frente a Senasa)<br>
                                 <i class="fa fa-phone"></i> 2847270 &nbsp; <i class="fa fa-mobile fa-fw"></i> 999926764  /  998114918
                        	</p>
                            <h3>Correo electrónico</h3>
                            <p> <i class="fa fa-mail-forward lg-fw"></i> dloscampos@hotmail.com</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="location">
	            <div id="map"></div>
            </section>

            <?php include 'tpl/footer.tpl.php' ?>
        </div>
    </div>

    <script type="text/javascript" src="src/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        $('[data-toggle="tooltip"]').tooltip();
    	var map;

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
            	// Disable mouse scroll
            	scrollwheel: false,

                // How zoomed in you want the map to start at (always required)
                zoom: 16,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(-12.072689, -77.021133),

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{"featureType":"road","stylers":[{"hue":"#5e00ff"},{"saturation":-79}]},{"featureType":"poi","stylers":[{"saturation":-78},{"hue":"#6600ff"},{"lightness":-47},{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"lightness":22}]},{"featureType":"landscape","stylers":[{"hue":"#6600ff"},{"saturation":-11}]},{},{},{"featureType":"water","stylers":[{"saturation":-65},{"hue":"#1900ff"},{"lightness":8}]},{"featureType":"road.local","stylers":[{"weight":1.3},{"lightness":30}]},{"featureType":"transit","stylers":[{"visibility":"simplified"},{"hue":"#5e00ff"},{"saturation":-16}]},{"featureType":"transit.line","stylers":[{"saturation":-72}]},{}]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(-12.072619, -77.021390),
                map: map,
                title: 'Vinos del campo'
            });
        }

        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        // Keep the map centered when resize
		google.maps.event.addDomListener(window, 'resize', function() {
		var center = map.getCenter();
    		google.maps.event.trigger(map, 'resize');
    		map.setCenter(center);
		});
    </script>
</body>
</html>