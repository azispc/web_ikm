<!DOCTYPE html> 
<?php 
    require 'side.php';
    include 'connect.php';
    $id_kategorisend=$_GET['id'];
?>    
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <?php
                include 'connect.php';
                $query1="SELECT * FROM kategori where id_kategori=$id_kategorisend";
                $sql= mysqli_query($connect, $query1);
                $data1=mysqli_fetch_array($sql);
                echo "
                <h1 class= 'page-header'> Laporan $data1[nama_kategori]</h1>";
                ?>
                </div>
            </div>

            <?php 
                $queryh = mysqli_query($connect,"SELECT * FROM responden where id_kategoriResponden=$id_kategorisend");
                $result = mysqli_fetch_array($queryh);
                if($result==TRUE)
                {
                   include 'data.php';
                }else
                {
                     echo'
                     <div class="alert alert-info">
                            <strong>BELUM ADA JAWABAN RESPONDEN UNTUK KATEGORI INI !</strong>
                        </div>
                    ';
                }
            ?>

<br/>
       <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Komentar Dan Saran Responden 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th> <center>No.</center></th>
                                        <th><center>Nama Responden</center></th>
                                        <th><center>Komentar & Saran</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include 'connect.php';
                                        $query = mysqli_query($connect,"SELECT * FROM responden join jawaban_user where id_kategoriResponden='$id_kategorisend' AND id_respondenj=id_responden");
                                        $no=1;
                                        while ( $data = mysqli_fetch_array($query) ) { 
                                            echo '
                                                <tr>
                                                    <td><center>'.$no++.'</center></td>
                                                    <td>'.$data["nama"].'</td>  
                                                    <td>'.$data["komentar"].'</td>             
                                                </tr>
                                            ';}?>          
                                    
                            
                                </tbody>
                            </table>
                     </div>
                </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <!-- Script -->
    <script>
    $(document).ready(function(){
    $.datepicker.setDefaults({
    dateFormat: 'yy-mm-dd'
    });
    $(function(){
    $("#From").datepicker();
    $("#to").datepicker();
    });
    $('#range').click(function(){
    var From = $('#From').val();
    var to = $('#to').val();
    if(From != '' && to != '')
    {
    $.ajax({
    url:"range.php?id=<?php echo $id_kategorisend;?>",
    method:"POST",
    data:{From:From, to:to},
    success:function(data)
    {
    $('#purchase_order').html(data);
    }
    });
    }
    else
    {
    alert("Tolong Isi Tanggal Periode");
    }
    });
    });
    </script>
</body>

