<section class="section bg-primary border-0 m-0">
				<div class="container">
					<div class="row justify-content-center text-center text-lg-left py-4">
						<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter">
							<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0">
								<div class="feature-box-icon">
									<i class="icon-location-pin icons text-color-light"></i>
								</div>
								<div class="feature-box-info pl-1">
									<h5 class="font-weight-light text-color-light opacity-7 mb-0">ADDRESS</h5>
									<p class="text-color-light font-weight-semibold mb-0">A Close, 5th Avenue, Gwarimpa Estate,
Abuja, Nigeria<br>MON - FRI: 10:00am - 6:00pm
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter"
							data-appear-animation-delay="200">
							<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0 px-xl-4 mx-lg-5">
								<div class="feature-box-icon">
									<i class="icon-call-out icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h5 class="font-weight-light text-color-light opacity-7 mb-0">CALL US NOW</h5>
									<a href="tel:+2347013669823"
										class="text-color-light font-weight-semibold text-decoration-none">7013669823</a>
								</div>
							</div>
						</div>
						<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter"
							data-appear-animation-delay="400">
							<div class="feature-box feature-box-style-2 d-block d-lg-flex">
								<div class="feature-box-icon">
									<i class="icon-share icons text-color-light"></i>
								</div>
								<div class="feature-box-info pl-1">
									<h5 class="font-weight-light text-color-light opacity-7 mb-0">FOLLOW US</h5>
									<p class="mb-0">
										<span class="social-icons-facebook"><a href="https://www.facebook.com/"
												target="_blank" class="text-color-light font-weight-semibold"
												title="Facebook"><i class="mr-1 fab fa-facebook-f"></i>
												FACEBOOK</a></span>
										<span class="social-icons-twitter pl-3"><a href="https://www.twitter.com/"
												target="_blank" class="text-color-light font-weight-semibold"
												title="Twitter"><i class="mr-1 fab fa-twitter"></i> TWITTER</a></span>
										<span class="social-icons-instagram pl-3"><a href="https://www.linkedin.com/"
												target="_blank" class="text-color-light font-weight-semibold"
												title="Linkedin"><i class="mr-1 fab fa-instagram"></i>
												INSTAGRAM</a></span>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<footer id="footer" class="mt-0">
			<div class="footer-copyright">
				<div class="container py-2">
					<div class="row py-4">
						<div class="col d-flex align-items-center justify-content-center">
							<p><strong>GreyLux</strong> - © Copyright 2020. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
	<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
	<script src="master/style-switcher/style.switcher.js" id="styleSwitcherScript" data-base-path=""
		data-skin-src=""></script>
	<script src="vendor/popper/umd/popper.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/common/common.min.js"></script>
	<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
	<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
	<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
	<script src="vendor/isotope/jquery.isotope.min.js"></script>
	<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="vendor/vide/jquery.vide.min.js"></script>
	<script src="vendor/vivus/vivus.min.js"></script>

	<script src="js/theme.js"></script>

	<script src="js/views/view.contact.js"></script>

	<script src="js/theme.init.js"></script>

	<script src="js/examples/examples.portfolio.js"></script>
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date(); a = s.createElement(o),
				m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-42715764-5', 'auto');
		ga('send', 'pageview');
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAo8OvgRYpgZfqovgbnfLSphkjgRe78gS4"></script>
	<script>

		/*
		Map Settings

			Find the Latitude and Longitude of your address:
				- https://www.latlong.net/
				- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

		*/

		// Map Markers
		var mapMarkers = [{
			address: "New York, NY 10017",
			html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
			icon: {
				image: "img/pin.png",
				iconsize: [26, 46],
				iconanchor: [12, 46]
			}
		}];

		// Map Initial Location
		var initLatitude = 40.75198;
		var initLongitude = -73.96978;

		// Map Extended Settings
		var mapSettings = {
			controls: {
				draggable: (($.browser.mobile) ? false : true),
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: true,
				streetViewControl: true,
				overviewMapControl: true
			},
			scrollwheel: false,
			markers: mapMarkers,
			latitude: initLatitude,
			longitude: initLongitude,
			zoom: 5
		};

		var map = $('#googlemaps').gMap(mapSettings),
			mapRef = $('#googlemaps').data('gMap.reference');

		// Map text-center At
		var mapCenterAt = function (options, e) {
			e.preventDefault();
			$('#googlemaps').gMap("centerAt", options);
		}

		// Styles from https://snazzymaps.com/
		var styles = [{ "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#e9e9e9" }, { "lightness": 17 }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 20 }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }, { "lightness": 17 }] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#ffffff" }, { "lightness": 29 }, { "weight": 0.2 }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 18 }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 16 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 21 }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#dedede" }, { "lightness": 21 }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 }] }, { "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#333333" }, { "lightness": 40 }] }, { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#f2f2f2" }, { "lightness": 19 }] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#fefefe" }, { "lightness": 20 }] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#fefefe" }, { "lightness": 17 }, { "weight": 1.2 }] }];

		var styledMap = new google.maps.StyledMapType(styles, {
			name: 'Styled Map'
		});

		mapRef.mapTypes.set('map_style', styledMap);
		mapRef.setMapTypeId('map_style');

	</script>
</body>

</html>