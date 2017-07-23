<?php include "header.php" ?>

<div class="container-fluid">
	<div class="animated fadeIn contain">
		<div class="navigation">
			<ul>
				<li>
					<a href="#" class="active" id="signin">SIGN IN</a>
				</li>
				<li>
					<a href="#" id="signup">SIGN UP</a>
				</li>
			</ul>
		</div>

		<div id="signin-content">
		<!-- Avatar image -->
			<img src="img/avatar.jpg" class="img-responsive logo-img" alt="image">
		<!-- END Avatar -->

		<!-- Form Section -->
		<div class="form-section">
			<form autocomplete="off">
			  <div class="form-group">
			    <label for="email"><sm>USERNAME</sm></label>
			    <input type="text" class="form-control" id="username" placeholder="Enter your username">
			  </div>
			  <div class="form-group">
			    <label for="pwd"><sm>PASSWORD</sm></label>
			    <input type="password" class="form-control" id="pwd" placeholder="Enter your password">
			  </div>
			  <div class="row" id="mid">
			  	<div class="col-xs-6 col-sm-6">
				  <div class="checkbox" id="check">
				    <label><input type="checkbox"> Keep me signed in</label>
				  </div>
				</div>
				<div class="col-xs-6 col-sm-6">
					<a href="#" id="forgot" class="hvr-underline-from-center-2" data-toggle="modal" data-target="#myModal">forgot password?</a>
				</div>
			  </div>	  
			  <div class="row">
				<center>
				  <button type="button" class="btn btn-sign-in-center">SIGN IN</button>
				</center>
			   </div>
			</form>
		</div>
		<!-- End form section -->
	</div><!-- End sign in -->

	<div id="signup-content"><!-- Begin Sign Up -->
	<img src="img/avatar.jpg" class="img-responsive logo-img" alt="image">
		<div class="form-section">
		<form autocomplete="off">
			<div class="row">
				<div class="col-xs-6 col-sm-6">
					<label for="fname"><sm>FIRSTNAME</sm></label>
					<input type="name" class="form-control" id="firstname" placeholder="Enter your first name">
				</div>
				<div class="col-xs-6 col-sm-6">
					<label for="lname"><sm>LASTNAME</sm></label>
					<input type="name" class="form-control" id="lastname" placeholder="Enter your last name">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<label for="password"><sm>PASSWORD</sm></label>
					<input type="password" class="form-control" id="password" placeholder="Enter your password">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<label for="confirmpwd"><sm>PASSWORD</sm></label>
					<input type="password" class="form-control" id="confirmpwd" placeholder="Confirm your password">
				</div>
			</div>
		</div>
		</form>
	</div><!-- End sign up -->

	</div>
</div>
</div>

<?php include "footer.php" ?>