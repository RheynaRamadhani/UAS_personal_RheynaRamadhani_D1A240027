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
  <title>Kelola Artikel</title> 
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
  <h1 class="text-3xl font-bold">Kelola Artikel</h1>
  <!-- Dark Mode Switch -->
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

<!-- Container --> 
<div class="flex max-w-7xl mx-auto mt-8 px-4 flex-col md:flex-row"> 

  <!-- Sidebar --> 
  <aside class="w-full md:w-1/4 bg-white dark:bg-gray-800 rounded shadow p-4 mb-6 md:mb-0"> 
    <h2 class="text-xl font-semibold text-purple-700 dark:text-purple-300 mb-4 text-center">MENU</h2> 
    <ul class="space-y-2 text-gray-700 dark:text-gray-300"> 
      <li><a href="beranda_admin.php" class="block hover:text-blue-600 dark:hover:text-blue-400">🏠 Beranda</a></li> 
      <li><a href="data_artikel.php" class="block font-semibold text-blue-800 dark:text-blue-300">📝 Kelola Artikel</a></li> 
      <li><a href="data_gallery.php" class="block hover:text-blue-600 dark:hover:text-blue-400">🖼️ Kelola Gallery</a></li> 
      <li><a href="about.php" class="block hover:text-blue-600 dark:hover:text-blue-400">👤 About</a></li> 
      <li>
        <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');"
           class="block text-red-600 hover:underline font-medium">🚪 Logout</a>
      </li> 
    </ul> 
  </aside> 

  <!-- Main Content --> 
  <main class="w-full md:w-3/4 bg-white dark:bg-gray-800 rounded shadow p-6 md:ml-6"> 
    <div class="flex justify-between items-center mb-4"> 
      <h2 class="text-xl font-bold text-gray-800 dark:text-white">Daftar Artikel</h2> 
      <a href="add_artikel.php" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition">+ Tambah Artikel</a> 
    </div> 

    <div class="overflow-x-auto">
      <table class="min-w-full table-auto border border-gray-300 dark:border-gray-600 text-sm">
        <thead class="bg-purple-600 text-white">
          <tr>
            <th class="p-3 border">No</th>
            <th class="p-3 border">Nama Artikel</th>
            <th class="p-3 border">Isi Artikel</th>
            <th class="p-3 border">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $sql = "SELECT * FROM tbl_artikel"; 
          $query = mysqli_query($db, $sql); 
          $no = 1; 
          while ($data = mysqli_fetch_array($query)) { 
            echo "<tr class='even:bg-gray-50 dark:even:bg-gray-700'>"; 
            echo "<td class='border p-2 text-center'>" . $no++ . "</td>"; 
            echo "<td class='border p-2'>" . htmlspecialchars($data['nama_artikel']) . "</td>"; 
            echo "<td class='border p-2'>" . htmlspecialchars($data['isi_artikel']) . "</td>"; 
            echo "<td class='border p-2 text-center space-x-2'>
                    <a href='edit_artikel.php?id_artikel={$data['id_artikel']}' class='text-blue-600 dark:text-blue-400 hover:underline'>Edit</a>
                    <a href='delete_artikel.php?id_artikel={$data['id_artikel']}' onclick='return confirm(\"Yakin ingin menghapus?\")' class='text-red-600 hover:underline'>Hapus</a>
                  </td>"; 
            echo "</tr>"; 
          } 
          ?> 
        </tbody>
      </table>
    </div>
  </main> 
</div> 

<!-- Footer --> 
<footer class="bg-purple-800 dark:bg-gray-800 text-white text-center py-4 mt-10"> 
  &copy; <?php echo date('Y'); ?> | Created by Rheyna Ramadhani 
</footer> 

<!-- Script Toggle -->
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


