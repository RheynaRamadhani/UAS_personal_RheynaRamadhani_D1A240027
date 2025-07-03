<?php 
session_start(); 
if (!isset($_SESSION['username'])) { 
  header('location:login.php'); 
  exit; 
} 
require_once("../koneksi.php"); 

$username = $_SESSION['username']; 
$sql = "SELECT * FROM tbl_user WHERE username = '$username'"; 
$query = mysqli_query($db, $sql); 
$hasil = mysqli_fetch_array($query); 
?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
  <title>Dashboard Admin</title> 
  <script src="https://cdn.tailwindcss.com"></script> 
  <script>
    tailwind.config = {
      darkMode: 'class'
    }
  </script>
</head> 
<body class="bg-purple-200 dark:bg-gray-900 dark:text-white min-h-screen transition-colors duration-300">

  <!-- Header -->
  <header class="bg-purple-900 dark:bg-gray-800 text-white text-center py-6 shadow relative"> 
    <h1 class="text-3xl font-bold">Halaman Administrator</h1>

    <!-- Toggle Dark Mode -->
    <div class="absolute right-6 top-1/2 -translate-y-1/2">
      <label class="relative inline-flex items-center cursor-pointer">
        <input type="checkbox" id="toggleDark" class="sr-only peer">
        <div class="w-14 h-8 bg-purple-100 peer-checked:bg-black rounded-full transition-colors duration-300"></div>
        <div id="switchIcon" class="absolute top-0.5 left-0.5 w-7 h-7 bg-white rounded-full flex items-center justify-center text-sm transition-all duration-300 peer-checked:translate-x-6">
          <span id="icon" class="text-gray-500">☀️</span>
        </div>
      </label>
    </div>
  </header> 

  <!-- Container -->
  <div class="flex max-w-7xl mx-auto mt-8 px-4 flex-col md:flex-row"> 

    <!-- Sidebar -->
    <aside class="w-full md:w-1/4 bg-white dark:bg-gray-800 rounded shadow p-4 mb-6 md:mb-0"> 
      <h2 class="text-xl font-semibold text-purple-700 dark:text-purple-300 mb-4 text-center">MENU</h2> 
      <ul class="space-y-2 text-gray-700 dark:text-gray-300">
        <li>
          <a href="beranda_admin.php" class="block hover:text-blue-600 dark:hover:text-blue-400">
            🏠 Beranda
          </a>
        </li> 
        <li>
          <a href="data_artikel.php" class="block hover:text-purple-600 dark:hover:text-purple-400">
            📝 Kelola Artikel
          </a>
        </li> 
        <li>
          <a href="data_gallery.php" class="block hover:text-purple-600 dark:hover:text-purple-400">
            🖼️ Kelola Gallery
          </a>
        </li> 
        <li>
          <a href="about.php" class="block hover:text-purple-600 dark:hover:text-purple-400">
            👤 About
          </a>
        </li> 
        <li>
          <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');" 
             class="block text-red-600 hover:underline font-medium">
            🚪 Logout
          </a> 
        </li> 
      </ul> 
    </aside> 

    <!-- Hitung total artikel dan gallery -->
    <?php 
    $jumlah_artikel = mysqli_num_rows(mysqli_query($db, "SELECT id_artikel FROM tbl_artikel")); 
    $jumlah_gallery = mysqli_num_rows(mysqli_query($db, "SELECT id_gallery FROM tbl_gallery")); 
    ?> 

    <!-- Main Content -->
    <main class="w-full md:w-3/4 bg-white dark:bg-gray-800 rounded shadow p-6 md:ml-6"> 
      <div class="text-lg mb-4">
        Halo, <strong class="text-purple-700 dark:text-purple-300"><?php echo $_SESSION['username']; ?></strong>! Apa kabar? 😊
      </div>
      <p class="text-sm text-gray-600 dark:text-gray-400">Silakan gunakan menu di samping untuk mengelola data.</p> 

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-6"> 
        <div class="bg-white dark:bg-gray-700 shadow rounded p-4 text-center border-t-4 border-blue-600"> 
          <h3 class="text-xl font-semibold text-purple-700 dark:text-purple-300">Artikel</h3> 
          <p class="text-3xl font-bold text-gray-800 dark:text-white"><?php echo $jumlah_artikel; ?></p> 
        </div> 
        <div class="bg-white dark:bg-gray-700 shadow rounded p-4 text-center border-t-4 border-green-600"> 
          <h3 class="text-xl font-semibold text-pink-700 dark:text-pink-300">Gallery</h3> 
          <p class="text-3xl font-bold text-gray-800 dark:text-white"><?php echo $jumlah_gallery; ?></p> 
        </div> 
      </div> 
    </main> 
  </div> 

  <!-- Footer -->
  <footer class="bg-purple-800 dark:bg-gray-800 text-white text-center py-4 mt-10"> 
    &copy; <?php echo date('Y'); ?> | Created by Rheyna Ramadhani 
  </footer> 

  <!-- Script Toggle Dark Mode -->
  <script>
    const toggle = document.getElementById('toggleDark');
    const icon = document.getElementById('icon');
    const root = document.documentElement;

    function updateIcon(isDark) {
      icon.textContent = isDark ? '🌙' : '☀️';
      icon.className = isDark ? 'text-gray-300' : 'text-gray-500';
    }

    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
      root.classList.add('dark');
      toggle.checked = true;
      updateIcon(true);
    } else {
      updateIcon(false);
    }

    toggle.addEventListener('change', () => {
      const isDark = toggle.checked;
      root.classList.toggle('dark', isDark);
      localStorage.setItem('theme', isDark ? 'dark' : 'light');
      updateIcon(isDark);
    });
  </script>

</body> 
</html>



