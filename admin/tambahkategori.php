<?php 
	include'connect.php';
    require 'sideindex.php';
    session_start();
    if(isset($_SESSION['notif'])){
          $notif = $_SESSION['notif'];
            unset($_SESSION['notif']);
}
?>
<title>Tambah Kategori</title>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Kategori
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method='POST' action='tambahSurveiProses.php'>
                                        <div class="form-group">
                                            <label>Nama Kategori</label>
                                            <input class="form-control" name="nama">
                                                <?php if (!empty($notif['nama'])){
                                                    echo $notif['nama'];}?>
                                        </div>
                                        <div class="form-group">
                                            <label>Penjelasan Soal</label>
                                            <textarea class="form-control" rows="3" name="penjelasan"></textarea>
                                             <?php if (!empty($notif['penjelasan'])){
                                                    echo $notif['penjelasan'];}?>
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