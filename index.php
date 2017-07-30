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
				<p id="user-heading"><sm></sm></p>
			    <input type="password" class="form-control" id="pwd" placeholder="Enter your password">
			  </div>
			  <div class="row" id="mid">
			  	<div class="col-xs-6 col-sm-6">
				  <div class="checkbox" id="check">
				    <label><input type="checkbox"> Keep me signed in</label>
				  </div>
				</div>
				<div class="col-xs-6 col-sm-6">
					<a href="#" id="forgot" class="hvr-underline-from-center-2" data-toggle="modal" data-target="#forgotPassword">forgot password?</a>
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

	<!-- Begin Sign Up -->
	<div id="signup-content">
	<img src="img/avatar.jpg" class="img-responsive" alt="image">
		<div class="form-section">
		<form autocomplete="off">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<label for="mail"><sm>EMAIL</sm></label>
					<input type="email" class="form-control" id="mailing" placeholder="Enter your email">
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label for="password"><sm>PASSWORD</sm></label>
					<input type="password" class="form-control" id="password" placeholder="Enter your password">
				</div>
				<div class="col-xs-12 col-sm-6">
					<label for="confirmpwd"><sm>PASSWORD</sm></label>
					<input type="password" class="form-control" id="confirmpwd" placeholder="Confirm your password">
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<label for="cname"><sm>COMPANY</sm></label>
					<input type="name" class="form-control" id="cname" placeholder="Enter company name">
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<label for="add"><sm>ADDRESS</sm></label>
					<input type="address" class="form-control" id="caddress" placeholder="Enter company's address">
				</div>
			</div>

			<div class="row">
				<center>
				  <button type="button" class="btn btn-sign-up-center">SIGN UP</button>
				</center>
			</div>
		</div>
		</form>
	</div><!-- End sign up -->

	</div>

	<?php include "core/firebase-includes.php"; ?>
	<script type="text/javascript" src="js/firebase/sign-in.js">

	</script>

	</script>
</div>
</div>

<<<<<<< Updated upstream
<!-- Forgot password modal-->
  <!-- Modal -->
 <div class="modal fade" id="forgotPassword" role="dialog">
  <div class="modal-dialog modal-sm" id="forgot-password-modal-position">
    <div class="modal-content" id="forgot-password-modal-content">
        <div class="modal-body" id="forgot-password-modal-body">
          <div class="row">
				<div class="col-xs-12 col-sm-12">
				<div class="input-group">
					<input type="email" class="form-control" id="fgtpwd" placeholder="Enter email">
					<span class="input-group-addon btn">Send</span>
				</div>
				</div>
			</div>
        </div>
     </div>
    </div>
  </div>
</div>

<?php include "footer.php" ?>
=======
<?php include "footer.php" ?>
>>>>>>> Stashed changes
