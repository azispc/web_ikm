<?php
	include 'connect.php';
	
	$id = $_GET['id'];
	$idres = $_POST['id_responden']
	$jawab = $_POST['jawaban'];


	$form1 = mysqli_query($connect,"INSERT INTO jawaban_user (id_jawaban_user,soal1,soal2,soal3,soal4,soal5,soal6,soal7,soal8,id_kategori,id_responden)VALUES('','$jawaban','$jawaban','$jawaban','$jawaban','$jawaban','$jawaban','$jawaban','$jawaban','$id','$idres')");

	
	