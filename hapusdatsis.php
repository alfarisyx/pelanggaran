<?php
include "koneksi.php";

$id_siswa = $_GET ['id_siswa'];

$hapus = mysqli_query($koneksi, "DELETE FROM data_siswa WHERE id_siswa ='$id_siswa'");

if($hapus) {
    echo "<script>alert ('Data Berhasil Dihapus')</script>";
    header ("refresh:0;data_siswa.php");
}else{
    echo "<script>alert ('Data Tidak Berhasil Dihapus')</script>";
    header ("refresh:0;data_siswa.php");
}
?>
