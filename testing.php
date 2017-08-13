<?php include 'header.php'; ?>

<div class="contain">
	<div id="map"></div>
	<div id="location">
		<h3>Almost done!</h3>
		<p>Use the map to select your restaurant's location<br>or use the input fields below:</p>
	</div>
	<hr style="width: 80%; margin-top: -2px;">
	<div class="location-form">
		<form>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<label for="companyAddressInputLabelId" id="companyAddress"><sm>ADDRESS</sm></label>
							<input type="address" value="" class="form-control" id="companyAddressInputLabelId" placeholder="Enter company's address" required disabled> <br>
							<button type="button" class="btn btn-sign-in-center">That's My Address <i class="fa-li fa fa-spinner fa-spin"></i></button>
							<button type="button" class="btn btn-sign-in-center" onclick="recenterMapToOriginalAddress();">Original Address <i class="fa-li fa fa-spinner fa-spin"></i></button>

							<br><br>
							<small style="color: gray;">The address that shows up, might not be the correct of your business. However, try to click the exact location where you think your restaurant might be located</small>

					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApjP_pSamKpO3Sdj0C8GDSkePyFIqTY4Q&callback=initialize"></script> -->
<?php include "core/firebase-includes.php"; ?>
<script type="text/javascript" src="js/location-service/google-geo-location.js"> </script>
<script type="text/javascript" src="js/map/sign-up-address-verification.js"></script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApjP_pSamKpO3Sdj0C8GDSkePyFIqTY4Q&callback=initMap">
</script>

<?php include 'footer.php'; ?>
