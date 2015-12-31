<!DOCTYPE html>
<html>
<head>
  <title>Prambanan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="text/css" href="images/icon2.png">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <script src="css/bootstrap/jq/jquery-2.1.4.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
  <style type="text/css">
      img{
        width: 20px;
        height: 20px;
      }
  </style>
</head>
<body>
<!--header -->
<div id="wrap">
<nav class="navbar navbar-custom navbar-inverse navbar-fixed-top" id="topNav">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Sidarman
         </a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Map GIS<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="?pilih=1"><img src="icon/prambanan.png">City ​​Region</a></li>
            <li><a href="?pilih=2"><img src="icon/position-icon.png">City Position</a></li>
            <li><a href="?pilih=3"><img src="icon/scholl.png">City Scholls</a></li>
            <li><a href="?pilih=0"><img src="icon/map-icon.png">Route</a></li>
          </ul>
        </li>
        <li><a href="?pilih=">Contacs</a></li>
        <li><a href="?pilih=6">About</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
   <?php
        $pil=$_GET['pilih'];
            switch($pil){
              case 0:
                    include("home.php"); 
                       break;
              case 1:
                    include("wilayah.html");
                      break;
              case 2:
                  include("posisi.php");
                    break;
              case 3:
                  include("makeMarker.php");
                    break;
              case 4:
                   include("rute/index.php");
                     break;
              case 5:
                  include("Contacs.php");
                     break;
              case 6:
                 include("about.php");
                  break;
                            }
                          ?> 
</div>
<!--header end-->
<?php
  
?>
<!--footer -->
  <div class="panel-footer">
       copyright@2015 prambanan city. All reserved
  </div>
  <!--end footer-->
</body>
</html>