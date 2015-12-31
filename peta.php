<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KARAWANG MENDUNIA</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=drawing&geometry"></script>
    <script src="app.js"></script>
    <link rel="icon" href="images/icon.png" class="img-circle">
    <style type="text/css">
        body{
            color:black;
        }
    </style>
</head>
<body onload="peta_awal()" >
    <div class="body">
   
    <div class="container">
        <div class="row">
           <div class="col-lg-12">
                <?php require('info_rute.php'); ?>
                <h2>Sistem Informasi Geografis Kabupaten Karawang, Provinsi Jawa Barat, Indonesia</h2>
            	<table class="table" border="0">
            		<tr>
                		<td>
                    		<select name="kecamatan" id="kecamatan" class="form-control">
    	                		<option value="">Silahkan Pilih Kecamatan</option>
    		                	<?php 
        		                	$sql = mysql_query("SELECT * FROM `direction`");
        		                	while($val = mysql_fetch_array($sql)) {
        		                		echo '<option value="'.$val['id'].'">'.$val['nama'].'</option>';
        		                	}
    		                	?>
                    		</select>
                		</td>
                		<td>
                    		<select name="status" id="status" class="form-control">
    	                		<option value="">Silahkan Pilih Status</option>
    		                	<?php 
        		                	$sql = mysql_query("SELECT * FROM `direction`");
        		                	while($val = mysql_fetch_array($sql)) {
        		                		echo '<option value="'.$val['id'].'">'.$val['nama'].'</option>';
        		                	}
    		                	?>
                    		</select>
                		</td>
                		<td>
                			<button type="button" id="search" class="btn btn-primary">Cari Lokasi Lahan</button>
                		</td>
                    </tr>
            	</table>
                <div id="map-canvas" style="width:100%; height:700px;"></div>
            </div>
        </div>
        <hr>
    </div>
         </div>
   </body>
</html>
