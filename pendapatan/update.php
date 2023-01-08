<?php
      include "functions.php";
            $no_keungan          = $_POST['no_keungan'];
            $tgl_pendapatan           = $_POST['tgl_pendapatan'];
            $pendapatan          = $_POST['pendapatan'];
            $ket_pendapatan  = $_POST['ket_pendapatan'];

      
      // $id = @$_GET['id'];
      $sql_update = mysqli_query($con, "UPDATE tb_pendapatan SET tgl_pendapatan= '$tgl_pendapatan', pendapatan='$pendapatan', ket_pendapatan='$ket_pendapatan' WHERE no_keungan='$no_keungan'");

      if($sql_update) {
      echo '<script>alert("Berhasil Merubah Data."); document.location="pendapatan.php";</script>';
      } else {
      echo '<div class="alert alert-warning">Gagal melakukan update data.</div>';
      }
?>