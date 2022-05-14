<?php

    date_default_timezone_set('Asia/Jakarta');
    
    if(isset($_POST['simpan'])) {
        
        $fileName = 'db.html';
        
        $file = fopen($fileName, "w");
        
        $content = '
        <center>
            <h1>Data Pemantauan Covid19 Wilayah '.$_POST['namaWilayah'].'</h1>
            <h2>Per '.date('d M Y H:i:s').'</h2>
            <h3>'.$_POST['namaOperator'].' / '.$_POST['nim'].'</h3>
        </center>
        <table class="table" width="100%" border="1">
            <thead>
                <tr>
                    <th>Positif</th>
                    <th>Dirawat</th>
                    <th>Sembuh</th>
                    <th>Meninggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>'.number_format($_POST['jmlPositif']).'</td>
                    <td>'.number_format($_POST['jmlDirawat']).'</td>
                    <td>'.number_format($_POST['jmlSembuh']).'</td>
                    <td>'.number_format($_POST['jmlMeninggal']).'</td>
                </tr>
            </tbody>
        </table>
        ';
        
        fwrite($file, $content);
        fclose($file);
    }

    header("location: view.php");