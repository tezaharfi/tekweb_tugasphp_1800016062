<?php
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$gender=$_POST['gender'];
$prodi=$_POST['prodi'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Biodata Mahasiswa</title>
    </head>
<body>
    <table width="400" border="1">
        
        <tr>
            <td>NIM</td>
            <td><?php echo $nim; ?></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><?php echo $nama; ?></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $gender; ?></td>
        </tr>

        <tr>
            <td>Program Studi</td>
            <td><?php echo $prodi; ?></td>
        </tr>
    </table>
</body>
<html>