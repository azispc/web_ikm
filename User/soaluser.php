<!DOCTYPE html>
<?php
	include'connect.php';
  require 'sideuser.php';
  $id_respondensend=$_GET['id_respondensend'];
  $query1 = mysqli_query($connect,"SELECT * from responden WHERE id_responden='$id_respondensend'");
  while ($data1 =mysqli_fetch_array($query1)) {?>
  <?php $idkategoriResponden= $data1 ['id_kategoriResponden'];}
?>

<html lang="en">
<head>
  <title>lapan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link type="text/css" href="css/css.css" rel="stylesheet">  
</head>

<body style="height: 100%">
  <?php include 'navbar.php'; ?>

		<div class="container">
			<center><h4 style="text-transform: uppercase;"><b>

			<?php 
				include 'connect.php';
				 $query = mysqli_query($connect,"select nama_kategori from kategori WHERE id_kategori='$idkategoriResponden'");
				 while ( $data = mysqli_fetch_array($query) ) { ?><?php $kategori = $data ['nama_kategori'];
				 echo "survei <div>$kategori</div>";?><?php } ?></b></h4></center>
			  
			 <div class="panel-group">
				<div class="panel panel-info">
					  <div class="panel-heading"><center>Pertanyaan</center></div>
								                    		<?php
											                     include 'connect.php';											
                                            $query = mysqli_query($connect,"SELECT * FROM soal join jawaban where id_kategoriS='$idkategoriResponden' AND id_soal=id_soalj");
                                            $no=1; ?>
                                            <form class="well form-horizontal" action="prosessoal.php?idrespondensend=<?php echo $id_respondensend;?>" method="post"  id="survei_list">
                                            <?php 
                                            while ( $data = mysqli_fetch_array($query)) { ?>
                                            <tr>
                                                <td><?php echo $no;?>.</td>
                                                <td><?php echo $data['soal'];?></td></tr></br>
                                           			<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="jawaban<?php echo $no;?>"><label>&nbsp;<?php echo $data['jawaban1'];?></label><br></td>
                                           			<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="2" name="jawaban<?php echo $no;?>"><label>&nbsp;<?php echo $data['jawaban2'];?></label><br></td>
                                           			<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="3" name="jawaban<?php echo $no;?>"><label>&nbsp;<?php echo $data['jawaban3'];?></label><br></td>
                                           			<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="4" name="jawaban<?php echo $no++;?>"><label>&nbsp;<?php echo $data['jawaban4'];?></label><br></td>
                                                  </tr><br>
                                            <?php } 
                                            ?>
                                            <div class="form-group">
                                                <div class="bg-primary"><label>&nbsp;&nbsp;&nbsp;Komentar dan Saran</label></div>
                                                <textarea class="form-control"  col="4" rows="4" name="komentar"></textarea>
                                            </div>
                                            <div class="container">
                          											 <center> <input type="submit" class="btn btn-info" value="Selanjutnya"></center>
                          											</div>
                                            </form>       
						
						<div class="panel-body"></div>
				</div>			
			</div>
		</div>
<div id="footer">
  <center><h6><b class="copyright">~ copyright © 2017 Lembaga Penerbangan Dan Antariksa</b></h6></center>
</div>
</body>
</html>
