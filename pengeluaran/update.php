<?php
      include "functions.php";
            $no_keungan          = $_POST['no_keungan'];
            $tgl_pengeluaran           = $_POST['tgl_pengeluaran'];
            $pengeluaran          = $_POST['pengeluaran'];
            $ket_pengeluaran  = $_POST['ket_pengeluaran'];

      
      // $id = @$_GET['id'];
      $sql_update = mysqli_query($con, "UPDATE tb_pengeluaran SET tgl_pengeluaran= '$tgl_pengeluaran', pengeluaran='$pengeluaran', ket_pengeluaran='$ket_pengeluaran' WHERE no_keungan='$no_keungan'");

      if($sql_update) {
      echo '<script>alert("Berhasil Merubah Data."); document.location="pengeluaran.php";</script>';
      } else {
      echo '<div class="alert alert-warning">Gagal melakukan update data.</div>';
      }
?>