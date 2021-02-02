<?php
    include ('common.php');
    outputHeader("Welcome at Middlesex Electronics!");
    outputBannerNavigation("Home");
?>

        <!-- Registry form -->
        
    <div class="registerContainer">
  		<form name="registerForm">
			<div class="col-12">
				<div class="row">

					<div class="col-6 form-group lead">
    					<label for="firstNameInput">First Name</label>
    					<input type="text" class="form-control" name="firstName" placeholder="First Name" required>
					</div>

					<div class="col-6 form-group lead">
    					<label for="lastNameInput">Last Name</label>
    					<input type="text" class="form-control" name="lastName" placeholder="Last Name" required>
					</div>

  					<div class="col-6 form-group lead">
    					<label for="emailInput">E-mail Address</label>
    					<input type="email" class="form-control" name="email" placeholder="E-mail" required>
					</div>

					<div class="col-6 form-group lead">
    					<label for="phone">Phone Number</label>
    					<input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
					</div>
				
  					<div class="col-6 form-group lead">
    					<label for="pwdInput">Password</label>
    					<input type="password" class="form-control" name="pwd" placeholder="Password" required>
					</div>

					<div class="col-6 form-group lead">
    					<label for="pwdRepeat">Repeat Password</label>
    					<input type="password" class="form-control" name="pwdRepeat" placeholder="Password" required>
					</div>

					<div class="col-12 form-group lead">
    					<label for="address">Street Address</label>
    					<textarea type="text" class="form-control" name="address" placeholder="Address" required></textarea>
					</div>

					<div class="col-7 form-group lead">
    					<label for="city">City</label>
    					<input type="text" class="form-control" name="city" placeholder="City" required>
					</div>

					<div class="col-5 form-group lead">
    					<label for="post">Post Code</label>
    					<input type="text" class="form-control" name="post" placeholder="Post Code" required>
					</div>

					<div class="col-12 text-right registerBtn">
						<button type="submit" class="btn btn-info btn-lg">Register</button>
					</div>
			</div> 
		</form>
    </div>

<?php
        outputFooter("Home");
?>
