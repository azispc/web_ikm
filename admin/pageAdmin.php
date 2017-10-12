<!DOCTYPE html>
<?php
    include 'connect.php';
    require 'sideindex.php';
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <a href="tambahkategori.php">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-plus fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-center">
                                    <div font=24>Tambah Kategori</div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
							<?php
								include 'connect.php';
								$query = mysqli_query($connect,"select * from kategori");
								while ( $data = mysqli_fetch_array($query) ) { ?>
										<?php 
										$idk=$data['id_kategori'];

										echo "
										<div class='col-lg-3 col-md-6'>
										<a href='laporan.php?id=$data[id_kategori]'>
												<div class='panel panel-primary'>
													<div class='panel-heading'>
														<div class='row'>
															<div class='col-xs-3'>
																<i class='fa fa-tasks fa-4x'></i>
															</div>
															<div class='col-xs-9 text-center'>
																<div>$data[nama_kategori]</div>
															</div>
														</div>
													</div>
												</div>
												</a>
											</div>"?>
							<?php } ?>
			
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Status Kategori
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th> <center>No</center></th>
                                        <th><center>Kategori</center></th>
                                        <th><center>Ket.</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
        								include 'connect.php';
        								$query = mysqli_query($connect,"SELECT * from kategori");
        								$no=1;
        								while ( $data = mysqli_fetch_array($query) ) { 
                                            echo '
                                                    <tr>
                                                        <td><center>'.$no++.'.</center></td>
                                                        <td>'.$data["nama_kategori"].'</td>
                                                        <td>
                                                        <center> 
                                                        <a type="submit" class="btn btn-primary" href="editkategori.php?idkategorisend='.$data['id_kategori'].'">Ubah</a>
                                                		
                                                        <a type="reset" class="btn btn-primary" href="hapuskategori.php?id='.$data['id_kategori'].'">Hapus</a>

                                                		
                                                    </tr>
                                            ';
                                             } 
                                            ?>          
                                    
                            
                                </tbody>
                            </table>
            </div>
                </div>




