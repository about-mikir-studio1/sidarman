<!DOCTYPE html>

<head>
    <title>Route</title>
       <link rel="icon" href="images/icon.png" class="img-circle">
</head>
<body>
    Ini adalah sebuah Informasi Route dari candi ke candi didaerah Prambanan dan sekitarnya.<br />
    Silahkan Masukkan Route Yang Dicari:
    <?php
//tabel : penanda
//field : id int, nama varchar_30), lintang float, bujur float
include "koneksi.php";
$x=mysql_query("select id,nama,lintang,bujur from direction");
?>
<form method="GET"  action="rute/info_rute.php">
<b> Asal </b>
    <select name="asal" >
    <?php
    while($y=mysql_fetch_array($x))
    {
    $id=$y['id'];   $nama=$y['nama'];
    echo  " <option value=$id >$nama</option>";
    }
    ?>
    </select>
    <b>Tujuan </b>
    <select name="tujuan" >
    <?php
$x=mysql_query("select id,nama,lintang,bujur from direction");

    while($y=mysql_fetch_array($x))
    {
    $id=$y['id'];   $nama=$y['nama'];
    echo  " <option value=$id >$nama</option>";
    }
    ?>
    </select>
    <input type="submit" value="CARI">
 </form>
 <?php
     include 'rute/info_rute.php';
 ?>
</body>
</html>
