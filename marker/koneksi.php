<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect("localhost","u290636511_herii","purnama");
	if (!$con) 
		die("Tidak dapat melakukan koneksi");
	mysql_select_db("u290636511_sig",$con);
?>