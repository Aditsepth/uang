<?php

include "functions.php";

?>

<!DOCTYPE html>
<html style="margin: -32px;height: 1063px;width: 723px;padding: 2px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Keuangan Pribadi</title>
    <link rel="stylesheet" href="<?=base_url('assetss/assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/fonts/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/css/Fixed-navbar-starting-with-transparency-1.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/css/Fixed-navbar-starting-with-transparency.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/css/styles.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/css/tabela-mloureiro1973.css'); ?>">
    
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
</head>

<body style="margin: 123px;padding: 11px;height: 700px;width: 730px;">
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-transparency" style="background-color: #f3fbff;height: 13px;">
        <a class="navbar-brand" href="#"><img src="rp.png" height="90px" width="92px"></a>
        <div class="container">
            <div class="text-justify text-sm-left"><a class="navbar-brand" href="#">Data Tabungan Pribadi<br></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?=base_url('#') ?>">Beranda</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Tabungan </a>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" role="presentation" href="<?=base_url('pendapatan/pendapatan.php') ?>">Pendapatan</a>
                          <a class="dropdown-item" role="presentation" href="<?=base_url('pengeluaran/pengeluaran.php') ?>">Pengeluaran</a>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?=base_url('#') ?>">Rekapan</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?=base_url('logout.php') ?>">Logout</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <?php 
    session_start();
 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
    }
    ?>
    <div class="margin-bottom: 20px;">
   
    <div class="row">
        <div class="col-md-12" style="height: 364px;margin: -3px;padding: -8px;">
            <div>
                <h1 style="height: 54px;margin: 36px;width: 735px;padding: -40px;">Yuk Mari Nabung Untuk Masa Depan</h1>
                <h1>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</h1>
            </div>
              </div>
              </div>
            <a class="btn btn-primary" href="add.php" type="button" style="width: 218px;height: 41px;margin: 161px;padding: 5px;margin-top: -220px;margin-right: 229px;margin-bottom: 202px;margin-left: 1434px;">Add Data Pendapatan </a><label></label>
            <a class="btn btn-primary" href="export.php"  style="width: 218px;height: 41px;margin: 161px;padding: 5px;margin-top: -320px;margin-right: 229px;margin-bottom: 202px;margin-left: 1184px;">Export Data</a>
            <div class="table-responsive" style="width: 1750px;height: 990px;margin-top: -124px;margin-bottom: 252px;padding: 10px;">
              <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Keuangan </th> 
                            <th>Tanggal Pendapatan</th>
                            <th>Pendapatan</th>
                            <th>Keterangan</th>
                            <th><i class="fa fa-edit ml-3x"></i> </th>
                            <th style="height: 60px;width: 41px;"><i class="fa fa-trash ml-3x"></i> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                $no = 1;
                $sql_query = mysqli_query($con, "SELECT * FROM tb_pendapatan order by tgl_pendapatan DESC") or die (mysqli_error($conn));
                while ($data = mysqli_fetch_array($sql_query )) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data['no_keungan']?></td>
                        <td><?=$data['tgl_pendapatan']?></td>
                        <td><?=$data['pendapatan']?></td>
                        <td><?=$data['ket_pendapatan']?></td>
                        <br>
                        <td><a href="edit.php?id=<?=$data['no_keungan'];?>" style="color: rgb(57,20,204);">Edit</a></td>
                        <td><a href="hapus.php?id=<?=$data['no_keungan'];?>" onclick="return confirm('Yakin Hapus Data?')" style="color: rgb(187,40,40);">Hapus</a></td>

                <?php    
                }
            ?>
                    </tbody>

                </table>

                <br>
                <div class="info-box-content">
            <span class="info-box-text"> </span>
            <?php
                 $a = 0;
                 $sql = mysqli_query($con,"SELECT * FROM tb_pendapatan ORDER BY no_keungan");
                 while($data = mysqli_fetch_array($sql)) {
                    $a++;
                    $total[$a] = $data['pendapatan'];
                    echo $data['no_keungan']." = ".$data['pendapatan'] ."<br>";
                 }
                    echo "Total Tabungan : ".array_sum($total);
                ?>
            </div>

            </div>
    
            </div>

        
        </div>
    </div>
    <script src="<?=base_url('assetss/assets/js/jquery.min.js'); ?>"></script>
    <script src="<?=base_url('assetss/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?=base_url('assetss/assets/js/Fixed-navbar-starting-with-transparency.js'); ?>"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js" ></script>

            <script>
    $(document).ready(function(){
    $('#table1').DataTable();
    });
    </script>
</body>

</html>