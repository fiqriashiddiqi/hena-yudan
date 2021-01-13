<?php 
// koneksi database
include('koneksi.php');
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$pesan = $_POST['pesan'];
$alamat = $_POST['alamat'];

// echo $nama,$pesan,$alamat;
// die(); 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_wishes(nama,alamat,pesan) values('$nama','$alamat,'$pesan')") or die(mysqli_error($koneksi));
 
// mengalihkan halaman kembali ke index.php
// header("location:index.php");
 
?>
