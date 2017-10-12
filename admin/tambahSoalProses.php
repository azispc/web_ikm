<?php
	include 'connect.php';

	$id = $_GET['id'];
	$soal = $_POST['soal'];
	$jwbA=$_POST['jwbA'];
	$jwbB=$_POST['jwbB'];
	$jwbC=$_POST['jwbC'];
	$jwbD=$_POST['jwbD'];

	$sqlsoal = mysqli_query($connect, "INSERT INTO soal(id_soal,soal,id_kategoriS) VALUES ('','$soal','$id')");
	$query = mysqli_query($connect,"SELECT id_soal FROM soal WHERE id_kategoriS=$id and soal='$soal'");
	$hasil = mysqli_fetch_array($query, MYSQLI_ASSOC);
	$idj=$hasil['id_soal'];

	$sqljawaban = mysqli_query($connect, "INSERT INTO jawaban(id_jawaban,jawaban1,jawaban2,jawaban3,jawaban4,id_soalj) VALUES ('','$jwbA','$jwbB','$jwbC','$jwbD','$idj')");

	if($sqlsoal && $sqljawaban == TRUE)
	{
?>
	<script language="javascript">alert("Tambah Soal Berhasil");</script>
	<script>document.location.href='daftarsoal.php?id=<?php echo $id;?>';</script>
<?php	
	} else
	{
?>
	<script language="javascript">alert("Tambah Kategori Gagal");</script>
	<script>document.location.href='#';</script>
<?php
	}
	
?>