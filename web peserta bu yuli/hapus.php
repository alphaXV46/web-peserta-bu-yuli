<?php 
include 'koneksi.php';

$nis = $_GET['nis'];

$query = mysqli_query($koneksi, "DELETE FROM peserta WHERE nis='$nis'");

if($query){

    header("location:ds_admin.php?pesan=hapus_berhasil");
} else {
 
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}
?>