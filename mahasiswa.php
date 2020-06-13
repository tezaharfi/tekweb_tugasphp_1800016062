<?php
$NIM=$_POST['NIM'];
$NAMA=$_POST['NAMA'];
$KELAMIN=$_POST['KELAMIN'];
$ALAMAT=$_POST['ALAMAT'];
$PRODI=$_POST['PRODI'];
$BAHASA=$_POST['BAHASA'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
<body>
    <table width="400" border="1">
        
        <tr>
            <td>NIM</td>
            <td><?php echo $NIM; ?></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><?php echo $NAMA; ?></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $KELAMIN; ?></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><?php echo $ALAMAT; ?></td>
        </tr>

        <tr>
            <td>Program Studi</td>
            <td><?php echo$PRODI; ?></td>
        </tr>

        <tr>
            <td>Bahasa Pemrograman yang dikuasai</td>
            <td><?php echo$BAHASA; ?></td>
        </tr>

    </table>
</body>
<html>