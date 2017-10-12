<?php
	include 'connect.php';
    $id_kategorisend=$_GET['id'];
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=HasilSurvei.xls");
?>

             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p><b>PENGOLAHAN INDEKS KEPUASAN MASYARAKAT PER RESPONDEN DAN PER RUANG LINGKUP PELAYANAN</b></p>
                        </div>
                        <div class="panel-body">
						<table border="1" width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                            <th> <center>No</center></th>
                                            <th><center>Nama Responden</center></th>
                                            <th> <center>Pendidikan</center></th>
                                            <th> <center>Pekerjaan</center></th>
                                            <th> <center>Jenis Kelamin</center></th>
                                            <th> <center>Umur</center></th>
                                            <th> <center>Waktu</center></th>
                                            <th><center>RL-1</center></th>
                                            <th><center>RL-2</center></th>
                                            <th><center>RL-3</center></th>
                                            <th><center>RL-4</center></th>
                                            <th><center>RL-5</center></th>
                                            <th><center>RL-6</center></th>
                                            <th><center>RL-7</center></th>
                                            <th><center>RL-8</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                        <?php
                                           include 'connect.php'; 
                                                $query = mysqli_query($connect,"SELECT * FROM responden join jawaban_user where id_kategoriResponden='$id_kategorisend' AND id_respondenj=id_responden");
                                                $no=1;
                                                $sum=0;
                                                while ( $data = mysqli_fetch_array($query) ) { 
                                                        $jk=$data['jenis_kelamin'];
                                                    ?>

                                                    <?php if($jk==1)
                                                        {?>
                                                        <?php 

                                                            $jkl="L";       

                                                        }else{?>
                                                        <?php 
                                                            $jkl="P";    
                                                        }?>

                                                    <?php
                                                echo '
                                                <tr>
                                                    <td><center>'.$no++.'.</center></td>
                                                    <td>'.$data["nama"].'</td>
                                                    <td><center>'.$data["pendidikan"].'</center></td>
                                                    <td>'.$data["pekerjaan"].'</td>
                                                    <td><center>'.$jkl.'</center></td>
                                                    <td><center>'.$data["umur"].'</center></td>
                                                    <td><center>'.$data["tanggal"].'</center></td>
                                                    <td><center>'.$data["jawaban1"].'</center></td>
                                                    <td><center>'.$data["jawaban2"].'</center></td>
                                                    <td><center>'.$data["jawaban3"].'</center></td>
                                                    <td><center>'.$data["jawaban4"].'</center></td>
                                                    <td><center>'.$data["jawaban5"].'</center></td>
                                                    <td><center>'.$data["jawaban6"].'</center></td>
                                                    <td><center>'.$data["jawaban7"].'</center></td>
                                                    <td><center>'.$data["jawaban8"].'</center></td>
                                            </tr>
                                            ';
                                        }?>
                        <?php
                            include 'connect.php';
                            $queryj = mysqli_query($connect,"SELECT  COUNT(*) AS jumlah FROM responden join jawaban_user where id_kategoriResponden='$id_kategorisend' AND id_respondenj=id_responden");
                            $jumlah=mysqli_fetch_array($queryj);
                            $count=$jumlah ['jumlah'];

                            $queryv = mysqli_query($connect,"SELECT * FROM responden join jawaban_user where id_kategoriResponden='$id_kategorisend' AND id_respondenj=id_responden");

                            $jawaban1=0;$jawaban2=0;$jawaban3=0;$jawaban4=0;$jawaban5=0;$jawaban6=0;$jawaban7=0;$jawaban8=0;
                            while ( $datav = mysqli_fetch_array($queryv) ) {
                                    $jawaban1=$jawaban1+$datav['jawaban1'];
                                    $jawaban2=$jawaban1+$datav['jawaban2'];
                                    $jawaban3=$jawaban1+$datav['jawaban3'];
                                    $jawaban4=$jawaban1+$datav['jawaban4'];
                                    $jawaban5=$jawaban1+$datav['jawaban5'];
                                    $jawaban6=$jawaban1+$datav['jawaban6'];
                                    $jawaban7=$jawaban1+$datav['jawaban7'];
                                    $jawaban8=$jawaban1+$datav['jawaban8'];};
                    ?>
                                <?php
                                    $average1=$jawaban1/$count;
                                    $average2=$jawaban2/$count;
                                    $average3=$jawaban3/$count;
                                    $average4=$jawaban4/$count;
                                    $average5=$jawaban5/$count;
                                    $average6=$jawaban6/$count;
                                    $average7=$jawaban7/$count;
                                    $average8=$jawaban8/$count;
                                ?>
                            <tr>
                                <th>
                                        <td><b> NRR</b></td>
                                        <td><b> </b></td>
                                        <td><b> </b></td>
                                        <td><b> </b></td>
                                        <td><b> </b></td>
                                        <td><b> </b></td>
                                        <td><center><b><?php echo number_format( $average1,2);?></b></center></td>
                                        <td><center><b><?php echo number_format( $average2,2);?></b></center></td>
                                        <td><center><b><?php echo number_format( $average3,2);?></b></center></td>
                                        <td><center><b><?php echo number_format( $average4,2);?></b></center></td>
                                        <td><center><b><?php echo number_format( $average5,2);?></b></center></td>
                                        <td><center><b><?php echo number_format( $average6,2);?></b></center></td>
                                        <td><center><b><?php echo number_format( $average7,2);?></b></center></td>
                                        <td><center><b><?php echo number_format( $average8,2);?></b></center></td>
                                      
                                    </th>  
                                </tr

                                <tr>
                                    <th>
                                     <td><b> NRR Tertimbang</b></td>
                                     <td><b> </b></td>
                                     <td><b> </b></td>
                                     <td><b> </b></td>
                                     <td><b> </b></td>
                                     <td><b> </b></td>
                                     <td><center><b><?php echo number_format(($average1=$average1*0.125),2);?></b></center></td>
                                     <td><center><b><?php echo number_format(($average2=$average2*0.125),2);?></b></center></td>
                                     <td><center><b><?php echo number_format(($average3=$average3*0.125),2);?></b></center></td>
                                     <td><center><b><?php echo number_format(($average4=$average4*0.125),2);?></b></center></td>
                                     <td><center><b><?php echo number_format(($average5=$average5*0.125),2);?></b></center></td>
                                     <td><center><b><?php echo number_format(($average6=$average6*0.125),2);?></b></center></td>
                                     <td><center><b><?php echo number_format(($average7=$average7*0.125),2);?></b></center></td>
                                     <td><center><b><?php echo number_format(($average8=$average8*0.125),2);?></b></center></td>
                                    </th>  
                                </tr>
                                 </tbody>
                            </table>

                            <?php $nrr=$average1+$average2+$average3+$average4+$average5+$average6+$average7+$average8; ?>
                            
                              <table border="1" width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tr>
                                     <td width="100%"></td>
                                     <td><b> Jumlah NRR IKM tertimbang </b></td>
                                     <td><center><b><?php echo number_format($nrr,2);?></b></center></td>
                                </tr>

                                <tr>
                                     <td width="100%"></td>
                                     <td><b> Nilai IKM (JML NRR IKM tertimbang *25) </b></td>
                                     <td><center><b><?php echo number_format(($ikm=$nrr*25),2);?></b></center></td> 
                                </tr>   
                                </tbody>
                            </table>
