<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Gambar</title>
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
  <h1 class="text-3xl font-bold">Tambah Gambar ke Gallery</h1>
  <div class="absolute right-6 top-1/2 -translate-y-1/2">
    <label class="relative inline-flex items-center cursor-pointer">
      <input type="checkbox" id="toggleDark" class="sr-only peer">
      <div class="w-14 h-8 bg-purple-200 peer-checked:bg-gray-700 rounded-full transition-colors duration-300"></div>
      <div id="switchIcon" class="absolute top-0.5 left-0.5 w-7 h-7 bg-white rounded-full flex items-center justify-center text-sm transition-all duration-300 peer-checked:translate-x-6">
        <span id="icon" class="text-purple-600">☀️</span>
      </div>
    </label>
  </div>
</header>

<div class="flex max-w-7xl mx-auto mt-8 px-4 flex-col md:flex-row">
  <!-- Sidebar -->
  <aside class="w-full md:w-1/4 bg-white dark:bg-gray-800 rounded shadow p-4 mb-6 md:mb-0">
    <h2 class="text-xl font-semibold text-purple-700 dark:text-purple-300 mb-4 text-center">MENU</h2>
    <ul class="space-y-2 text-gray-700 dark:text-gray-300">
      <li><a href="beranda_admin.php" class="block hover:text-purple-600 dark:hover:text-purple-400">🏠 Beranda</a></li>
      <li><a href="data_artikel.php" class="block hover:text-purple-600 dark:hover:text-purple-400">📝 Kelola Artikel</a></li>
      <li><a href="data_gallery.php" class="block font-semibold text-purple-800 dark:text-purple-300">🖼️ Kelola Gallery</a></li>
      <li><a href="about.php" class="block hover:text-purple-600 dark:hover:text-purple-400">👤 About</a></li>
      <li>
        <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');"
           class="block text-red-600 hover:underline font-medium">🚪 Logout</a>
      </li>
    </ul>
  </aside>

  <!-- Main Content -->
  <main class="w-full md:w-3/4 bg-white dark:bg-gray-800 rounded shadow p-6 md:ml-6">
    <form action="proses_add_gallery.php" method="post" enctype="multipart/form-data" class="space-y-6">
      <div>
        <label for="judul" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Judul Gambar</label>
        <input type="text" id="judul" name="judul" required
               class="w-full p-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded focus:outline-none focus:ring focus:border-purple-500">
      </div>
      <div>
        <label for="foto" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Pilih Gambar</label>
        <input type="file" id="foto" name="foto" accept="image/*" required
               class="block w-full text-sm text-gray-600 dark:text-gray-200 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-purple-100 file:text-purple-700 hover:file:bg-purple-200 dark:file:bg-purple-800 dark:file:text-white dark:hover:file:bg-purple-700">
      </div>
      <div class="flex justify-end space-x-4">
        <button type="submit"
                class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800 transition">Simpan</button>
        <a href="data_gallery.php"
           class="bg-gray-300 dark:bg-gray-600 text-gray-700 dark:text-white px-4 py-2 rounded hover:bg-gray-400 dark:hover:bg-gray-500 transition">Batal</a>
      </div>
    </form>
  </main>
</div>

<!-- Footer -->
<footer class="bg-purple-800 dark:bg-gray-800 text-white text-center py-4 mt-10">
  &copy; <?php echo date('Y'); ?> | Created by Rheyna Ramadhani
</footer>

<!-- Script Dark Mode Toggle -->
<script>
  const toggle = document.getElementById('toggleDark');
  const icon = document.getElementById('icon');
  const root = document.documentElement;

  function updateIcon(isDark) {
    icon.textContent = isDark ? '🌙' : '☀️';
    icon.className = isDark ? 'text-gray-300' : 'text-purple-600';
  }

  if (localStorage.getItem('theme') === 'dark') {
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


