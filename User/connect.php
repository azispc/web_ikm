<?php
	$database_name= 'ikmlapan';
	$connect = mysqli_connect("localhost", "root", "", "ikmlapan")
	or die ("Gagal koneksi ke server".mysqli_error());
	if(!isset($_SESSION)){ 
    session_start();
}
?>