<?php
	include 'connect.php';
	
	$id_kategorisend=$_GET['id_kategorisend'];
	$tanggal = $_POST['date'];
	$nama = $_POST['nama'];
	$nip = $_POST['nip'];
	$umur = $_POST['umur'];
	
	if(isset($_POST['umur'])){
		$umur = $_POST['umur'];

	}else $umur="";


	if(isset($_POST['jkelamin'])){
		$jkelamin = $_POST['jkelamin'];

	}else $jkelamin="";


	if(isset($_POST['pendidikan'])){
		$pendidikan = $_POST['pendidikan'];

	}else $pendidikan="";

	if(isset($_POST['pekerjaan'])){
		$pekerjaan = $_POST['pekerjaan'];

	}else $pekerjaan="";


	if (ctype_digit($umur) && ctype_digit($jkelamin) && ($pendidikan != "") && ($pekerjaan != "")) {
	$form1 = mysqli_query($connect,"INSERT INTO responden (	id_responden,tanggal,nama,nip,umur,jenis_kelamin,pendidikan,pekerjaan,id_kategoriResponden)
	VALUES('','$tanggal','$nama','$nip','$umur','$jkelamin','$pendidikan','$pekerjaan','$id_kategorisend')");


		$query = mysqli_query($connect,"SELECT * from responden WHERE id_kategoriResponden='$id_kategorisend'");
		while ( $data = mysqli_fetch_array($query) ) { ?>
		<?php 
			$idrespondensend=$data['id_responden'];
	
		}?>

			<script language="javascript">alert("Data Anda Terekam");</script>
			<script>document.location.href='soaluser.php?id_respondensend=<?php echo $idrespondensend;?>'</script>

	<?php
		} else {
		?>

			<script language="javascript">alert("Mohon Isikan Data yang Wajib");</script>
			<script>document.location.href='formresponden.php?id_kategorisend=<?php echo $id_kategorisend;?>'</script>
		
		<?php

		}
		?>
		