<?php include 'header.php'; ?>

<div class="contain">
	<div id="map" onclick="updateAddressField();"></div>
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
							<input type="address" value="" class="form-control" id="companyAddressInputLabelId" placeholder="Enter company's address" required>
						</div>
				</div>
			</div>
		</form>
	</div>
</div>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApjP_pSamKpO3Sdj0C8GDSkePyFIqTY4Q&callback=initialize"></script>

<?php include 'footer.php'; ?>
