<?php

include "functions.php";
?>

<!DOCTYPE html>
<html style="margin: -32px;height: 263px;width: -273px;padding: -300px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Suhu</title>
    <link rel="stylesheet" href="<?=base_url('assetss/assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/fonts/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/css/Fixed-navbar-starting-with-transparency-1.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/css/Fixed-navbar-starting-with-transparency.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/css/styles.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/css/tabela-mloureiro1973.css'); ?>">
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
    <div>
                <h1 style="height: 54px;margin: 36px;width: 1005px;padding: -60px;">Tambah Data Pendapatan </h1>
            </div>
<div class="box-header">
<div class="pull-right">
                    <a href="pendapatan.php" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i> Back
                    </a>
                    </div>
                    </div>
<div id class="row">
  <div class="col-md-12" style="height: 504px;margin: 100px;padding: -10px;">
        <form action="" method="post">
        <div class="form-group">
                <label for="no_keungan">No Pendapatan</label>
                <input type="text" name="no_keungan" id="no_keungan" class="form-control" required autofocus>
            </div>
            <div class="form-group">
                <label for="tgl_pendapatan">Tanggal Pendapatan</label>
                <input type="date" name="tgl_pendapatan" id="tgl_pendapatan" class="form-control" required>
            </div>
             <div class="form-group">
                <label for="pendapatan">Pendapatan</label>
                <input type="text" name="pendapatan" id="pendapatan" class="form-control" required>
            </div>
             <div class="form-group">
                <label for="ket_pendapatan">Keterangan</label>
                <input type="text" name="ket_pendapatan" id="ket_pendapatan" class="form-control" required>
            </div>
             
           
            <div class="form-group pull-right">
                <input type="submit" name="submit" value="Submit" class="btn btn-success">
            </div>
        </form>
        <?php
        if(isset($_POST['submit'])){
            $no_keungan         = $_POST['no_keungan'];
            $tgl_pendapatan           = $_POST['tgl_pendapatan'];
            $pendapatan          = $_POST['pendapatan'];
            $ket_pendapatan  = $_POST['ket_pendapatan'];
         

            $cek = mysqli_query($con, "SELECT * FROM tb_pendapatan WHERE no_keungan='$no_keungan'") or die(mysqli_error($con));
            
            if(mysqli_num_rows($cek) == 0){
                $sql = mysqli_query($con, "INSERT INTO tb_pendapatan(no_keungan, tgl_pendapatan, pendapatan, ket_pendapatan) VALUES('$no_keungan', '$tgl_pendapatan', '$pendapatan', '$ket_pendapatan')") or die(mysqli_error($con));
                
                if($sql){
                    echo '<script>alert("Berhasil menambahkan data."); document.location="pendapatan.php";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }
            }else{
                echo '<div class="alert alert-warning">Gagal, No Keuangan sudah terdaftar.</div>';
            }
        }
?>
        </div>
    </div>
    <script src="<?=base_url('assetss/assets/js/jquery.min.js'); ?>"></script>
    <script src="<?=base_url('assetss/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?=base_url('assetss/assets/js/Fixed-navbar-starting-with-transparency.js'); ?>"></script>
</body>

</html>