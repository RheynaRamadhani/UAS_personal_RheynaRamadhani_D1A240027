<?php 
include('../koneksi.php'); 
session_start(); 

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) { 
    header('Location: login.php'); 
    exit;
}

// Validasi ID artikel dari GET
if (!isset($_GET['id_artikel']) || !is_numeric($_GET['id_artikel'])) {
    echo "<script>alert('ID artikel tidak valid.'); history.back();</script>";
    exit;
}

$id = intval($_GET['id_artikel']);

// Hapus data artikel dari database
$sql = "DELETE FROM tbl_artikel WHERE id_artikel = $id LIMIT 1"; 
$query = mysqli_query($db, $sql); 

if ($query) { 
    echo "<script>alert('Artikel berhasil dihapus.'); window.location='data_artikel.php';</script>"; 
} else { 
    echo "<script>alert('Gagal menghapus artikel.'); history.back();</script>"; 
}
?>
