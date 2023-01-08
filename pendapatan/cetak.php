<?php

require_once __DIR__ . '/vendor/autoload.php';



$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html>
<head>
	<title>Daftar Suhu</title>
</head>
<body>
	<h1>Daftar Suhu</h1>
	<table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Suhu</th>
                            <th>Tanggal Suhu</th>
                            <th>Suhu Out</th>
                            <th>Kadar PH</th>
                            <th>Operator</th>
                            <th>Verifikasi</th> 
                            <th>Pengecekan</th>
                            <th><i class="fa fa-edit ml-3x"></i> </th>
                            <th style="height: 60px;width: 41px;"><i class="fa fa-trash ml-3x"></i> </th>
                        </tr>';

                        $i = 1;
                        foreach ($tb_ruangan as $row ) {
                        	# code...
                        	$html .='<tr>
                        	<td>'. $i++ .'</td>
                        	<td>'. $row["kode_suhu"] .'</td>
                        	<td>'. $row["tgl_suhu"] .'</td>
                        	<td>'. $row["suhu_out"] .'</td>
                        	<td>'. $row["kadar_ph"] .'</td>
                        	<td>'. $row["operator"] .'</td>
                        	<td>'. $row["verifikasi"] .'</td>
                        	</tr>';
                        }

                        $html .='</thead>
                        </table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>
