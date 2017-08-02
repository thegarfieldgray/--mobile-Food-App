<?php include "header.php" ?>

<div class="container-fluid">
	<div class="animated fadeIn contain">
		<div class="navigation">
			<ul>
				<li>
					<a href="#" class="active" id="signin">SIGN IN</i></a>
				</li>
				<li>
					<a href="#" id="signup">SIGN UP</a>
				</li>
			</ul>
		</div>

		<div id="signin-content">
		<!-- Avatar image -->
			<img src="img/salad.svg" class="img-responsive logo-img" alt="logo">
		<!-- END Avatar -->

		<!-- Form Section -->
		<div class="form-section">
			<form autocomplete="off">
			  <div class="form-group">
			    <label for="username"><sm>USERNAME</sm></label>
			    <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
			  </div>
			    <label for="pwd"><sm>PASSWORD</sm></label>
			    <input type="password" class="form-control" id="pwd" placeholder="Enter your password" required>
			  <div class="row" id="mid">
			  	<div class="col-xs-12 col-sm-6">
				  <div class="checkbox" id="check">
				    <label><input type="checkbox"> <div style="margin-top: -3px;color:black; opacity: 0.71;">Keep me signed in</div></label>
				  </div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<a href="#" id="forgot" class="hvr-underline-from-center-2" data-toggle="modal" data-target="#forgotPassword">forgot password?</a>
				</div>
			  </div>
			  <div class="row">
				<center>
				  <button type="button" class="btn btn-sign-in-center">SIGN IN <i class="fa-li fa fa-spinner fa-spin"></i></button>
				</center>
			   </div>
			</form>
		</div>
		<!-- End form section -->
	</div><!-- End sign in -->

	<!-- Begin Sign Up -->
	<div id="signup-content">
	<img src="img/salad.svg" class="img-responsive" alt="logo">
		<div class="form-section">
		<form autocomplete="off">

			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<label for="companyNameInputLabelId"><sm>COMPANY</sm></label>
					<input type="name" class="form-control" id="companyNameInputLabelId" placeholder="Enter company name" required>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<label for="mail"><sm>EMAIL</sm></label>
					<input type="email" class="form-control" id="emailInputLabelId" placeholder="Enter your email" required>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label for="rePasswordInputLabelId"><sm>PASSWORD</sm></label>
					<input type="password" class="form-control" id="rePasswordInputLabelId" placeholder="Confirm your password" required>
				</div>
			</div>

			<div class="row">
				<center>
				  <button type="button" class="btn btn-sign-up-center" onclick="signUpNewMerchant();">SIGN UP</button>
				</center>
			</div>
		</div>
		</form>
	</div>

	</div><!-- End sign up -->

	<!-- ====================================================== -->
	<!--  firebase include files -->
	<?php include "core/firebase-includes.php"; ?>
	<script type="text/javascript" src="js/firebase/sign-up.js"></script>
	<!-- ====================================================== -->

</div>
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
