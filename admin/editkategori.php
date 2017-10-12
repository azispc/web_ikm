<?php 
	include'connect.php';
    require 'sideindex.php';
    $id_kategorisend=$_GET['idkategorisend'];
?>
<title>Edit Kategori</title>
<?php
    echo $id_kategorisend;
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method='POST' action='ubahproses.php?idkategorisend=<?php echo $id_kategorisend;?>'>
                                        <div class="form-group">
                                            <label>Nama Kategori</label>
                                             <?php 
                                                include 'connect.php';
                                                $query2 = mysqli_query($connect,"SELECT * from kategori WHERE id_kategori='$id_kategorisend'");
                                                while ($data2 =mysqli_fetch_array($query2)) {?>
                                                <?php 
                                                    $namakategori=$data2['nama_kategori'];
                                                    $penjelasan=$data2['persyaratan'];
                                                    $status=$data2['status'];
                                                }?>
                                                 <input class="form-control" name="nama" value="<?php echo $namakategori;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Penjelasan Soal</label>
                                            <input type="textarea" class="form-control" rows="3" name="penjelasan" value="<?php echo $penjelasan;?>">
                                        </div>

                                        <div class="checkbox">
                                            <?php 

                                            if($status!=0){?>
                                        <?php 
                                            echo '<label><input type="checkbox" name="status" value="1" checked="">Tampilkan Kategori ini di Halaman User ?</label>';

                                            }else {?>

                                        <?php
                                             echo '<label><input type="checkbox" name="status" value="1" >Tampilkan Kategori ini di Halaman User ?</label>';

                                            }
                                            ?>
                                        </div>
                                            <button type="submit" class="btn btn-primary">Ubah</button>                                  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>