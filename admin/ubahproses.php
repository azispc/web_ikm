<?php
	include 'connect.php';

	$id_kategorisend= $_GET['idkategorisend'];
	$nama_kategori = $_POST['nama'];
	$persyaratan = $_POST['penjelasan'];

	if(!isset($_POST['status'])){
   	 	$status=0;
   	}else{
   	 	$status=$_POST['status'];
   	}
	
	$query = "UPDATE kategori SET nama_kategori = '$nama_kategori', persyaratan = '$persyaratan', status = $status WHERE id_kategori = '$id_kategorisend'" ;


	$hasil = mysqli_query($connect,$query);
	if($hasil==true)
		{
	?>
		<script language="javascript">alert("Edit Kategori Berhasil.");</script>
		<script>document.location.href='PageAdmin.php';</script>
	<?php	
		} else
		{
	?>
		<script language="javascript">alert("Edit Kategori Gagal !");</script>
		<script>document.location.href='editkategori.php?idkategorisend=<?php echo $id_kategorisend;?>';</script>
	<?php
		}
		include 'footer.php';
	?>