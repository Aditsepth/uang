<?php

include "functions.php";


$id = @$_GET['id'];
$con = mysqli_connect("localhost", "root", "", "uang") or die(mysqli_error());


//query data penduduk

$result = mysqli_query($con, "SELECT * FROM tb_pengeluaran WHERE no_keungan = '$id'"); 

while($data = mysqli_fetch_array($result))
{
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
                          <a class="dropdown-item" role="presentation" href="<?=base_url('#') ?>">Pengeluaran</a>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?=base_url('#') ?>">Rekapan</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?=base_url('logout.php') ?>">Logout</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div>
                <h1 style="height: 54px;margin: 36px;width: 1005px;padding: -60px;">Edit Data Pengeluaran</h1>
            </div>
<div class="box-header">
<div class="pull-right">
                    <a href="pengeluaran.php" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i> Back
                    </a>
                    </div>
                    </div>
<div class="row">
  <div class="col-md-12" style="height: 504px;margin: 100px;padding: -10px;">
        <form action="update.php" method="post">
        <div class="form-group">
                <label for="no_keungan">ID Keuangan</label>
                <input type="text" name="no_keungan" value="<?=$data['no_keungan'] ?>" id="no_keungann" class="form-control" required autofocus>
            </div>
            <div class="form-group">
                <label for="tgl_pengeluaran">Tanggal Pengeluaran</label>
                <input type="date" name="tgl_pengeluaran" value="<?=$data['tgl_pengeluaran'] ?>" id="tgl_pengeluaran" class="form-control" required>
            </div>
             <div class="form-group">
                <label for="pengeluaran">Pengeljuaran</label>
                <input type="text" name="pengeluaran" value="<?=$data['pengeluaran'] ?>" id="pengeluaran" class="form-control" required>
            </div>
             <div class="form-group">
                <label for="ket_pengeluaran">Keterangan</label>
                <input type="text" name="ket_pengeluaran" value="<?=$data['ket_pengeluaran'] ?>" id="ket_pengeluaran" class="form-control" required>
            </div>
             
           
            <div class="form-group pull-right">
                <input type="submit" name="submit" value="Submit" class="btn btn-success">
            </div>
        </form>
    <?php
    }
    ?>
        </div>
    </div>
    <script src="<?=base_url('assetss/assets/js/jquery.min.js'); ?>"></script>
    <script src="<?=base_url('assetss/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?=base_url('assetss/assets/js/Fixed-navbar-starting-with-transparency.js'); ?>"></script>
</body>

</html>