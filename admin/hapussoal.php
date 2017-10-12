<?php
	include "connect.php";

	$id=$_GET['id'];


	$query1 = mysqli_query($connect,"SELECT id_kategoriS FROM soal where id_soal='$id'");
	$hasil1 = mysqli_fetch_array($query1, MYSQLI_ASSOC);
	$idk=$hasil1['id_kategoriS'];

	$query2 = mysqli_query($connect,"SELECT id_kategori FROM kategori where id_kategori='$idk'");
	$hasil2 = mysqli_fetch_array($query2, MYSQLI_ASSOC);
	$id_kategori=$hasil2['id_kategori'];

	$query = mysqli_query($connect, "DELETE FROM soal WHERE id_soal ='$id'");
	$hasil = mysqli_query($connect,$query);

	if($hasil!=true)
		{
	?>
			<script language="javascript">alert("Berhasil Menghapus Soal");</script>
			<script>document.location.href='daftarsoal.php?id=<?php echo $id_kategori;?>';</script>	
	<?php	
		} else
		{
	?>
			<script language="javascript">alert("Gagal Menghapus Soal");</script>
			<script>document.location.href='daftarsoal.php?id=<?php echo $id_kategori;?>';</script>
	<?php
		}
		include 'footer.php';
	?>