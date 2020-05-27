<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/home.css" rel="stylesheet" />
  <style>
   
  </style>

  <title>AG Videos</title>
</head>

<body>
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
        <li><a href="index.php" >Home</a></li>
        <li><a href="videos.php" class="active">Videos</a></li>
        <li><a href="#">How It Works</a></li>
        <li><a href="#">Course</a></li>
      </ul>
    </div>
  </div>
</nav>
  <br>
  <section>
 
    
    <?php
      $API_key    = 'AIzaSyAI8-V0F7VfKD5Q9TBtvVoNjPaEwKBtDSE';
      $channelID  = 'UCoO866nvw6Q2KSc1v0y1Arg';
      $maxResults = 20;
      
      $videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));

      foreach($videoList->items as $item){
        //Embed video
        if(isset($item->id->videoId)){
            echo '<div class="youtube-video">
                    <iframe width="720" height="480" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
                    <h2>'. $item->snippet->title .'</h2>
                </div>';
        }
    }      


    ?>
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



  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <script async defer src="https://apis.google.com/js/api.js" onload="this.onload=function(){};handleClientLoad()" onreadystatechange="if (this.readyState === 'complete') this.onload()">
  </script>
</body>

</html>