<!DOCTYPE html> 
<?php 
    include 'connect.php';
    require 'sideindex.php';

    //id_kategori
    $id = $_GET['id'];
    echo $id;

?>
<title>Tambah Soal</title>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Soal Baru</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Soal
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method='POST' action='tambahSoalProses.php?id=<?php echo $id;?>'>
                                        <div class="form-group">
                                            <label>Soal</label>
                                            <textarea class="form-control"  rows="3" name="soal"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Jawaban A (Nilai 1)</label>
                                            <input class="form-control" name='jwbA'>
                                        </div>
                                        <div class="form-group">
                                            <label>Jawaban B (Nilai 2)</label>
                                            <input class="form-control" name='jwbB'>
                                        </div>
                                        <div class="form-group">
                                            <label>Jawaban C (Nilai 3)</label>
                                            <input class="form-control" name='jwbC'>
                                        </div>
                                        <div class="form-group">
                                            <label>Jawaban D (Nilai 4)</label>
                                            <input class="form-control" name='jwbD'>
                                        </div>
                                        
                                            <button type="submit" class="btn btn-primary">Tambah</button>                                  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>