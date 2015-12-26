<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navbar</title>

    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    
   
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </div>
</nav>

 <form action="" method="post">
<input type="checkbox" name="check1" value="Batas">Batas<br/>
<input type="checkbox" name="check2" value="Posisi">Posisi<br/>
<input type="checkbox" name="check3" value="Semangka"><br/>
<input type="checkbox" name="check4" value="Salah">Salak<br/>
<input type="submit" name="enter" value="Enter">
</form>
                </td>
                   <td>
   <?php  
 if(isset($_POST['enter']))  
 {  
  echo "Pilihan Anda anda:<br/>";  
  if (isset($_POST['check1'])) {  
      echo $_POST['check1'];
  include("batas.php");
  }  
  if (isset($_POST['check2'])) {  
      echo $_POST['check2'];
 include("posisi.php"); 
  }  
  if (isset($_POST['check3'])) {  
  echo $_POST['check3']." <br/>";  
  }  
  if (isset($_POST['check4'])) {  
  echo $_POST['check4']." <br/>";  
  }  
 }  
 ?>

  </body>
</html>