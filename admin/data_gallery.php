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
  <title>Kelola Gallery</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class'
    };
  </script>
</head>
<body class="bg-purple-200 dark:bg-gray-900 dark:text-white min-h-screen transition-colors duration-300">

<!-- Header -->
<header class="bg-purple-900 dark:bg-gray-800 text-white text-center py-6 shadow relative">
  <h1 class="text-3xl font-bold">Kelola Gallery</h1>
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
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-xl font-bold text-gray-800 dark:text-white">Daftar Gallery</h2>
      <a href="add_gallery.php" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition">+ Tambah Gambar</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <?php
      $sql = "SELECT * FROM tbl_gallery";
      $query = mysqli_query($db, $sql);
      while ($data = mysqli_fetch_array($query)) {
        $foto = htmlspecialchars($data['foto']);
        $judul = htmlspecialchars($data['judul']);
        $id = $data['id_gallery'];
        echo "
        <div class='bg-gray-50 dark:bg-gray-700 border dark:border-gray-600 rounded shadow overflow-hidden'>
          <div class='overflow-hidden'>
            <img src='../images/$foto' alt='$judul' class='w-full h-48 object-cover transform hover:scale-105 transition duration-300 rounded-t'>
          </div>
          <div class='p-4'>
            <p class='font-semibold text-gray-800 dark:text-white mb-2'>$judul</p>
            <div class='flex justify-between text-sm'>
              <a href='edit_gallery.php?id_gallery=$id' class='text-blue-600 dark:text-blue-400 hover:underline'>Edit</a>
              <a href='delete_gallery.php?id_gallery=$id' onclick='return confirm(\"Yakin ingin menghapus?\")' class='text-red-600 hover:underline'>Hapus</a>
            </div>
          </div>
        </div>";
      }
      ?>
    </div>
  </main>
</div>

<!-- Footer -->
<footer class="bg-purple-800 dark:bg-gray-800 text-white text-center py-4 mt-10">
  &copy; <?php echo date('Y'); ?> | Created by Rheyna Ramadhani
</footer>

<!-- Dark Mode Toggle Script -->
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


