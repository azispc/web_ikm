<!DOCTYPE html> 
<?php 
    require 'side.php';
    include 'connect.php';
    $id=$_GET['id'];
?>
       <div id="page-wrapper">
            <div class="row">
                <?php
                include 'connect.php';
                $query1="SELECT * FROM kategori where id_kategori=$id";
                $sql= mysqli_query($connect, $query1);
                $data1=mysqli_fetch_array($sql);
                echo "
                <h1 class= 'page-header'> Daftar Soal $data1[nama_kategori]</h1>";

                ?>
                <!-- /.col-lg-12 -->
            </div>
            <a href="tambahsoal.php?id=<?php echo $id;?> ">
            <button type="submit" class="btn btn-primary">
                <div class="col-xs-3">
                    <i class="fa fa-plus fa-9x"></i>
                </div>Tambah Soal</button> 
            </a>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Soal
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th> <center>No</center></th>
                                        <th><center>Soal</center></th>
                                        <th><center>A</center></th>
                                        <th><center>B</center></th>
                                        <th><center>C</center></th>
                                        <th><center>D</center></th>
                                        <th><center>Ket.</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php


                                            include 'connect.php'; 
                                            $query = mysqli_query($connect,"SELECT * FROM soal join jawaban where id_kategoriS='$id' AND id_soal=id_soalj");
                                            $no=1;
                                            while ( $data = mysqli_fetch_array($query) ) { 
                                            echo '
                                            <tr>
                                                <td><center>'.$no++.'.</center></td>
                                                <td>'.$data["soal"].'</td>
                                                <td>'.$data["jawaban1"].'</td>
                                                <td>'.$data["jawaban2"].'</td>
                                                <td>'.$data["jawaban3"].'</td>
                                                <td>'.$data["jawaban4"].'</td>
                                                <td><center> 
                                                        <a type="submit" class="btn btn-primary" href="editsoal.php?id='.$data['id_soal'].'">Ubah</a>
                                                        <br></br>

                                                        <a type="reset" class="btn btn-primary" href="hapussoal.php?id='.$data['id_soal'].'">Hapus</a>
                                                </center> </td>
                                            </tr>
                                            ';
                                            } 
                                            ?>          
                                    
                            
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
