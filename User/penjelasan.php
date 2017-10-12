<!DOCTYPE html>
<?php 
	include'connect.php';
	require 'sideuser.php';
 	$id_kategorisend=$_GET['id_kategorisend'];
?>

<html lang="en">
<head>
  <title>lapan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/js.js" type="text/javascript"></script>
  <link type="text/css" href="css/css.css" rel="stylesheet">
</head>

<body style="height: 100%">
<div id="page-wrapper">
<?php include 'navbar.php'; ?>
			<div class="container">
			<center>
			<h4 style="text-transform: uppercase;">
					<b> 
						<?php 
							include 'connect.php'; 
							$query = mysqli_query($connect,"select nama_kategori from kategori WHERE id_kategori='$id_kategorisend'");
							while ( $data = mysqli_fetch_array($query) ) { ?>
								<?php 
									$kategori = $data ['nama_kategori']; 
									echo "survei <br><br> $kategori </br></br>";
								?>
						<?php } ?>
					</b>
				</h4>
			</center>


			<div class="panel-group">
				<div class="panel panel-info">
					<div class="panel-heading">
					<center>Penjelasan Setiap Komponen Pertanyaan</center></div>
							<?php
								include 'connect.php';
								$query = mysqli_query($connect,"SELECT persyaratan from kategori WHERE id_kategori='$id_kategorisend'");
								while ( $data = mysqli_fetch_array($query) ) { ?>
									<?php 
										$penjelasan=$data['persyaratan'];
											  echo"				  
												<div class='row'>
												<div class='col-lg-12'>
												<div class='panel panel-default'>
													<div class='panel-heading'>
														<div class='panel-body'>
														   <table width='80%' class='table table-striped table-bordered table-hover' id='dataTables-example'>
																<thead>$penjelasan</thead>
															</table>
														</div>
													</div>
												</div>
												</div>
												</div>
											</div>"; ?>
									<?php } ?>	

							<br></br>
								<div class="container">
									<center><a href='formresponden.php?id_kategorisend=<?php echo $id_kategorisend;?>' type="submit" class="btn btn-info" value="Selanjutnya"> LANJUT </a></center>
								</div>
							<div class="panel-body"></div>
				</div>				
			  </div>
			</div>

<footer class="container-fluid text-center">
  <center><h6><b class="copyright">~ copyright © 2017 Lembaga Penerbangan Dan Antariksa</b></h6></center>
</footer>

</body>
</html>
