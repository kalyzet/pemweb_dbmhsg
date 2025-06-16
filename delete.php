<?php
include 'koneksi.php';

// Menyimpan ID dari URL
$id_mhs = $_GET['id_mhs'];

// Query untuk delete data
$query = "DELETE FROM data_mahasiswa WHERE id_mhs='$id_mhs'";
mysqli_query($koneksi, $query);

// Mengalihkan ke halaman index.php
header("Location: index.php");
?>