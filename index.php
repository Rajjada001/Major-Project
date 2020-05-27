<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/home.css" rel="stylesheet" />
</head>

<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h1>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h1>
    	<p style="float: right"> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>


<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a href="" class="navbar-brand" href="#"><img src="img/w3newbie.png" alt="Logo"></a>

    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-main">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="" class="active">Home</a></li>
        <li><a href="videos.php">Videos</a></li>
        <li><a href="#">How It Works</a></li>
        <li><a href="#">Course</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="home">
  <div class="landing-text">
    <h1>AG ACADEMY</h1>
    <h3>Learn the insights of Agriculture.</h3>
    <a href="#" class="btn btn-default btn-lg">Get Started</a>
  </div>
</div>

<div class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <img src="img/bootstrap.png">
      </div>
      <div class="col-sm-6 text-center">
        <h2>All About Using AG Academy.</h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nam doloremque,  minima nesciunt explicab, sed ab.</p>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nam doloremque perferendis, sed ab.</p>

      </div>
    </div>
  </div>
</div>



<div class="padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <h4>Built with the support of NAARM</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam minus totam amet laboriosam distinctio in laudantium perferendis commodi facere dolorum?</p>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <img src="img/sass.png" alt="" class="img-responsive">
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <h4>And Less</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat ratione excepturi labore sapiente, eligendi voluptatem incidunt quibusdam deleniti dolorem iusto!</p>

      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <img src="img/less.png" alt="" class="img-responsive">
      </div>
    </div>
  </div>
</div>
<div id="fixed"></div>

<div class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 ">
        <h4>Here's the cool thing about Ag Academy.</h4>
        <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nam doloremque,  minima nesciunt explicabo blanditiis reiciendis in, autem assumenda omnis perferendis, sed ab.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nam doloremque,  minima nesciunt explicabo blanditiis reiciendis in, autem assumenda omnis perferendis, sed ab.</p>
        </div>
        <div class="col-sm-6">
        <img src="img/bootstrap2.png" alt="">
      </div>
    </div>
  </div>
      
</div>
<footer class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-4">
    <p class="font-weight-lighter">
        Copyright &copy; AG Academy by ICAR-NAARM and Adepto GeoInformatics
    </p>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse-main">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="">ABOUT</a></li>
        <li><a href="">TERMS AND CONDITIONS</a></li>
        <li><a href="#">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</footer>



</body>
</html>
	