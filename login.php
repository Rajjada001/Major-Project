<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="registration.css">
    <link rel="stylesheet" href="css/all.min.css"></head>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
  <div class="form-container sign-in-container">

  <form method="post" name="form" autocomplete="off" onsubmit="Validate_Login();">
  	<?php include('errors.php'); ?>
  
        <!-- Sign In form code goes here -->
        <h1>Sign in</h1>
        <div class="social-container">
        <a href="#" class="social" style="background-color: blue;color:#fff;"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social" style="background-color: red;color:#fff;"><i class="fab fa-google-plus-g" ></i></a>
            <a href="#" class="social" style="background-color: blue; color:#fff"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span>or use your account</span> <br>
        <input type="email" name="email" id="email" placeholder="Email" /> 
        <p class="error" id="error"></p>
        <input type="password" id="password" name="password" placeholder="Password" />
        <p class="error" id="error"></p>
  		<button type="submit" name="login_user">Login</button>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  </div>
  <div class="overlay-container">
        <!-- The overlay code goes here -->
    <div class="overlay">
        
        <div class="overlay-panel overlay-right">
            <h1>Welcome Back!</h1>
            <p>To keep connected with us please login with your personal info</p>
            <button class="ghost" id="signUp">
				<a href="register.php">Sign Up</a>
				</button>
        </div>
    </div>
</div>


  
<script src="validation.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>