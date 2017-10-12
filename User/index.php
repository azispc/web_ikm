<!DOCTYPE html>
<?php
	include 'connect.php';
	require 'sideuser.php';
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

	<center><h4><b>KATEGORI SURVEI</b></h4></center>   
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-body">
							   <table width="50%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead> 
											<?php
												include 'connect.php';
												$query = mysqli_query($connect,"SELECT * from kategori");
												while ( $data = mysqli_fetch_array($query) ) { ?>
														<?php 
														$idk=$data['id_kategori'];
														$status=$data['status'];											
														

														if($status==0){?>
														<?php
														echo "
														<div class='col-lg-3 col-md-6'><br>
																<div class='panel-info class'>
																	<div class='panel-heading'>
																		<div class='row'>
																			<div class='col-xs-3'>
																				<i class='fa fa-tasks fa-5x'></i>
																			</div>
																			<div class='col-xs-9 text-center'>
																				<div>$data[nama_kategori]</div>
																			</div>
																		</div>
																	</div>
																</div>
															 
															</div>";

														} else {?>

														<?php 
															echo "
																<div class='col-lg-3 col-md-6'><br>
																<a href='penjelasan.php?id_kategorisend=$idk'>
																		<div class='panel panel-primary'>
																			<div class='panel-heading'>
																				<div class='row'>
																					<div class='col-xs-3'>
																						<i class='fa fa-tasks fa-5x'></i>
																					</div>
																					<div class='col-xs-9 text-center'>
																						<div>$data[nama_kategori]</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</a>
																	</div>";}?>
											<?php } ?>

																	</thead>
																</table>
															</div>
														</div>
													</div>
												</div>
										
											</div>
										</div>

			


					
		
	


</body>
</html>
