<?php
	include "connect.php";
	$id=$_GET['id'];

	$query = mysqli_query($connect, "DELETE FROM kategori WHERE id_kategori ='$id'");
	
	if($query==true){?>

			<script language="javascript">alert("Berhasil Menghapus Soal");</script>
			<script>document.location.href='pageAdmin.php';</script>	
	<?php	
		} else{
	?>
			<script language="javascript">alert("Gagal Menghapus Soal");</script>
			<script>document.location.href='pageAdmin.php';</script>
	<?php
		}
	?>