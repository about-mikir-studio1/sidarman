<!DOCTYPE html>
<html>
<head>
  <title>Prambanan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="text/css" href="images/b.png">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <script src="css/bootstrap/jq/jquery-2.1.4.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<!--header -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="?pilih=1"><img src="images/b.png" width="40" height="35">
         </a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="?pilih=1">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="?pilih=2">Page 2</a></li>
        <li><a href="?pilih=3">Page 3</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
   <?php
                            $pil=$_GET['pilih'];
                            switch($pil){
                            case 1:
                                include("home.php"); 
                                break;
                            case 2:
                                include("hlaman2.php");
                                break;
                            case 3:
                                include("posisi.php");
                                break;
                            }
                          ?> 
</div>
  <!--header end-->
<!--footer -->
  <div class="panel-footer">
       copyright@2015 prambanan city All reserved
  </div>
  <!--end footer-->
</body>
</html>