<?php 
include('../koneksi.php'); 
session_start(); 

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) { 
    header('Location: login.php'); 
    exit; 
}

// Validasi ID dari URL
if (!isset($_GET['id_about']) || !is_numeric($_GET['id_about'])) {
    echo "<script>alert('ID tidak valid.'); history.back();</script>";
    exit;
}

$id = intval($_GET['id_about']);

// Jalankan query penghapusan
$sql = "DELETE FROM tbl_about WHERE id_about = $id LIMIT 1"; 
$query = mysqli_query($db, $sql); 

if ($query) { 
    echo "<script>alert('Data About berhasil dihapus.'); window.location='about.php';</script>"; 
} else { 
    echo "<script>alert('Gagal menghapus data.'); history.back();</script>"; 
}
?>
