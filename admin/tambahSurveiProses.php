<?php
	include 'connect.php';
	$nama_kategori = $_POST['nama'];
	$deskripsi = $_POST['penjelasan'];
	$membuatacaraquery = mysqli_query($connect, "INSERT INTO kategori VALUES('','$nama_kategori','$deskripsi','')");
	$query = mysqli_query($connect,"SELECT id_kategori FROM kategori where nama_kategori='$nama_kategori'");
	$hasil = mysqli_fetch_array($query, MYSQLI_ASSOC);
	$idk=$hasil['id_kategori'];
	if($membuatacaraquery== TRUE)
	{
?>
	<script language="javascript">alert("Tambah Kategori Berhasil");</script>
	<script>document.location.href='tambahsoalbaru.php?id=<?php echo $idk;?>';</script>
<?php	
	} else
	{
?>
	<script language="javascript">alert("Maaf Kategori Yang Anda Masukkan Sudah Terdaftar !");</script>
	<script>document.location.href='tambahkategori.php';</script>
<?php
	}
	include 'footer.php';
?>