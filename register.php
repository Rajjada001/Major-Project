<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/all.min.css">
  </head>
    
<body>
<div class="container" id="container">
  <div class="form-container sign-in-container" onsubmit="return Validate_Register()">
  <form method="post" action="register.php" autocomplete="off">
    <?php include('errors.php'); ?>
	    <h1>Create Account</h1>
        <div class="social-container">
            <a href="#" class="social" style="background-color: blue;color:#fff;"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social" style="background-color: red;color:#fff;"><i class="fab fa-google-plus-g" ></i></a>
            <a href="#" class="social" style="background-color: blue; color:#fff"><i class="fab fa-linkedin-in"></i></a>
        </div>
    <input type="text" name="username" id="fn" value="<?php echo $username; ?>" placeholder="First Name:" required>
    <p class="error"></p>
			<input type="text" name="lastname" id="ln" value="<?php echo $lastname; ?>" placeholder="Last Name:" required>
      <input type="text" name="email" id="email"  value="<?php echo $email; ?>" placeholder="Email:" required>
      <p class="error"></p>
     <input type="text" name="organization" id="org" value="<?php echo $organization; ?>"required placeholder="Organization:">
     <p class="error"></p>
      <input type="text" name="country" id="country" value="<?php echo $country; ?>" required placeholder="Country">
  	  <input type="text" name="address" id="address" value="<?php echo $address; ?>" required placeholder="Address">
    <input type="password" id="password_1" name="password_1" placeholder="Password" required>
    <p class="error"></p>
		 <input type="password" id="password_2" name="password_2" placeholder="Confirm password" required>
  	   <button type="submit"  name="reg_user" class="register-btn" onclick="Validate_Register()">Register</button>
  
  </form>
  </div>

  
    <div class="overlay-container">
        <!-- The overlay code goes here -->
    <div class="overlay">
        
        <div class="overlay-panel overlay-right">
             <h1>Hello, Friend!</h1>
            <h5>
            <p>Enter your personal details and start journey with us</p>
            </h5>
			<button class="ghost" id="signIn">
			<a href="login.php" class="button">Sign Up</a>
			</button>
		
		</div>
		
    </div>
</div>



<script src="registration.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>