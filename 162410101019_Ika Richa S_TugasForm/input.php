<?php

include('koneksi.php');

$nama = $_POST ['nama'];
$ttl = $_POST ['ttl'];
$jeniskelamin = $_POST ['jeniskelamin'];
$alamat = $_POST ['alamat'];


$query = "INSERT INTO `user` (`Nama` , `Tempat Tanggal Lahir` , `Jenis Kelamin` , `alamat`, 'NIM', 'Email' ) 
VALUES ('".$nama."' , '".$ttl."' , '".$jeniskelamin."' , '".$alamat."' )";
if ($db->query($query) === TRUE) {
    header('location:getinput.php');

} else {
    echo "Insert Gagal";
}