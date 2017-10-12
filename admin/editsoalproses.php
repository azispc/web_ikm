<?php
	include 'connect.php';
	$id_soalsend= $_GET['id'];
	$soal = $_POST['soal'];
	$jwbA=$_POST['jwbA'];
	$jwbB=$_POST['jwbB'];
	$jwbC=$_POST['jwbC'];
	$jwbD=$_POST['jwbD'];

	$query = "UPDATE soal join jawaban SET soal = '$soal', jawaban1 = '$jwbA', jawaban2 = '$jwbB', jawaban3 = '$jwbC', jawaban4 = '$jwbD' WHERE id_soal = '$id_soalsend' AND id_soalj='$id_soalsend'";

             
    $query2 = mysqli_query($connect,"SELECT * from soal WHERE id_soal='$id_soalsend'");
        while ($data2 =mysqli_fetch_array($query2)) {?>
            <?php 
            	$id_kategorisend= $data2 ['id_kategoriS'];
            }?>

<?php
	$hasil = mysqli_query($connect,$query);
	if($hasil==true){?>

		<script language="javascript">alert("Edit Soal Berhasil.");</script>
		<script>document.location.href='daftarsoal.php?id=<?php echo $id_kategorisend;?>';</script>
	
	<?php	
		} else{?>

		<script language="javascript">alert("Edit Soal Gagal !");</script>
		<script>document.location.href='editsoal.php?id=<?php echo $id_kategorisend;?>';</script>	
	<?php
		}
		include 'footer.php';
	?>