<?php
include "koneksi.php";

$id_kat = $_GET ['id_kat'];

$hapus = mysqli_query($koneksi, "DELETE FROM kat_pelanggaran WHERE id_kat ='$id_kat'");

if($hapus) {
    echo "<script>alert ('Data Berhasil Dihapus')</script>";
    header ("refresh:0;tabel_kategori.php");
}else{
    echo "<script>alert ('Data Tidak Berhasil Dihapus')</script>";
    header ("refresh:0;tabel_kategori.php");
}
?>
