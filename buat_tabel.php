<?php
//mengambil file koneksi
Include "koneksi.php";
//Membuat Koneksi 
if(!$connect){ 
die("Koneksi Failed : ".mysqli_connect_error()); } 
//Membuat Tabel
$sql ="CREATE TABLE datasiswa (
nim CHAR(10),
nama VARCHAR(25) Null,
alamat VARCHAR(50) Null,
telp VARCHAR(15) Null,
jenis_kelamin VARCHAR(20) Null,
foto VARCHAR(50) Null,
 constraint pk_datasiswa primary key(nim)
)";
if (mysqli_query($connect, $sql)){ 
echo "Table Berhasil di Buat"; 
} else { 
echo "Table Gagal di Buat :".mysqli_error($connect); } 
mysqli_close($connect); 
?>