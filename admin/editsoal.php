<!DOCTYPE html> 
<?php 
    include 'connect.php';
    require 'sideindex.php'; 
    $id = $_GET['id'];
    $query1 = mysqli_query($connect,"SELECT * from soal WHERE id_soal='$id'");
    while ($data1 =mysqli_fetch_array($query1)) {?>
    <?php $idkategoriS= $data1 ['id_kategoriS'];}
?>
<title>Edit Soal</title>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Soal</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        
                            <?php 
                                include 'connect.php';
                                $query2 = mysqli_query($connect,"SELECT * from kategori WHERE id_kategori='$idkategoriS'");
                                while ($data2 =mysqli_fetch_array($query2)) {?>
                                <?php $nama_kategori= $data2 ['nama_kategori'];
                                    echo "Edit Soal Bagian kategori :"; echo "&nbsp";
                                    echo $nama_kategori;
                                }?>
                        </div>

                        <?php 
                                include 'connect.php';
                                $query3 = mysqli_query($connect,"SELECT * from soal join jawaban WHERE id_soal='$id' AND id_soalj='$id'");
                                while ($data3 =mysqli_fetch_array($query3)) {?>
                                <?php
                                    $soal=$data3['soal'];
                                    $jawA=$data3['jawaban1'];
                                    $jawB=$data3['jawaban2'];
                                    $jawC=$data3['jawaban3'];
                                    $jawD=$data3['jawaban4'];
                        }?>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method='POST' action='editsoalproses.php?id=<?php echo $id;?>'>
                                        <div class="form-group">
                                            <label>Soal</label>
                                            <input class="form-control" rows="3" name="soal" value="<?php echo $soal;?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Jawaban A</label>
                                            <input class="form-control" name="jwbA" value="<?php echo $jawA;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jawaban B</label>
                                            <input class="form-control" name="jwbB" value="<?php echo $jawB;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jawaban C</label>
                                            <input class="form-control" name="jwbC" value="<?php echo $jawC;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jawaban D</label>
                                            <input class="form-control" name="jwbD" value="<?php echo $jawD;?>">
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