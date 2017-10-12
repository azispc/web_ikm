<?php
	include 'connect.php';
	
	 $id_respondensend=$_GET['idrespondensend'];

	  #1
   	if(!isset($_POST['jawaban1'])){
   	 	$jawaban1=0;
   	}else{
   	 	$jawaban1=$_POST['jawaban1'];
   	}

   	#2   	
   	if(!isset($_POST['jawaban2'])){
   	 	$jawaban2=0;
   	}else{
   	 	$jawaban2=$_POST['jawaban2'];
   	}

   	#3   	
   	if(!isset($_POST['jawaban3'])){
   	 	$jawaban3=0;
   	}else{
   	 	$jawaban3=$_POST['jawaban3'];
   	}

   	#4   	
   	if(!isset($_POST['jawaban4'])){
   	 	$jawaban4=0;
   	}else{
   	 	$jawaban4=$_POST['jawaban4'];
   	}

   	#5   	
   	if(!isset($_POST['jawaban5'])){
   	 	$jawaban5=0;
   	}else{
   	 	$jawaban5=$_POST['jawaban5'];
   	}
   	#6   	
   	if(!isset($_POST['jawaban6'])){
   	 	$jawaban6=0;
   	}else{
   	 	$jawaban6=$_POST['jawaban6'];
   	}

   	#7   	
   	if(!isset($_POST['jawaban7'])){
   	 	$jawaban7=0;
   	}else{
   	 	$jawaban7=$_POST['jawaban7'];
   	}

   	#8	
   	if(!isset($_POST['jawaban8'])){
   	 	$jawaban8=0;
   	}else{
   	 	$jawaban8=$_POST['jawaban8'];
   	}

   	$komentar=$_POST['komentar']; ?>

<?php
    $sql = mysqli_query($connect, "INSERT INTO jawaban_user (id_jawaban_user,jawaban1,jawaban2,jawaban3,jawaban4,jawaban5,jawaban6,jawaban7,jawaban8,id_respondenj,komentar)VALUES('','$jawaban1','$jawaban2','$jawaban3','$jawaban4','$jawaban5','$jawaban6','$jawaban7','$jawaban8','$id_respondensend','$komentar')");

    if ($sql == TRUE) {
		?>
			<script language="javascript">alert("Survei Berhasil Terekam, Terima Kasih Atas Partisipasi Anda.");</script>
			<script>document.location.href='index.php'</script>
<?php	
	} else {
		?>
			<script language="javascript">alert("Survei ada yang belum terisi");</script>
			<script>document.location.href='soaluser.php?idrespondensend=<?php echo $id_respondensend;?>'</script>
		<?php
		}	?>