<?php 
include('../koneksi.php'); 
session_start(); 
if (!isset($_SESSION['username'])) { 
  header('location:login.php'); 
  exit; 
} 

$id = $_GET['id_artikel']; 
$sql = "SELECT * FROM tbl_artikel WHERE id_artikel = '$id'"; 
$query = mysqli_query($db, $sql); 
$data = mysqli_fetch_array($query); 
?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
  <title>Edit Artikel</title> 
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
  <h1 class="text-3xl font-bold">Edit Artikel</h1>
  <!-- Dark Mode Toggle -->
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

<!-- Main Container -->
<div class="flex max-w-7xl mx-auto mt-8 px-4 flex-col md:flex-row"> 

  <!-- Sidebar --> 
  <aside class="w-full md:w-1/4 bg-white dark:bg-gray-800 rounded shadow p-4 mb-6 md:mb-0"> 
    <h2 class="text-xl font-semibold text-purple-700 dark:text-purple-300 mb-4 text-center">MENU</h2> 
    <ul class="space-y-2 text-gray-700 dark:text-gray-300"> 
      <li><a href="beranda_admin.php" class="block hover:text-purple-600 dark:hover:text-purple-400">🏠 Beranda</a></li> 
      <li><a href="data_artikel.php" class="block font-semibold text-purple-800 dark:text-purple-300">📝 Kelola Artikel</a></li> 
      <li><a href="data_gallery.php" class="block hover:text-purple-600 dark:hover:text-purple-400">🖼️ Kelola Gallery</a></li> 
      <li><a href="about.php" class="block hover:text-purple-600 dark:hover:text-purple-400">👤 About</a></li> 
      <li>
        <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');" 
           class="block text-red-600 hover:underline font-medium">🚪 Logout</a> 
      </li> 
    </ul> 
  </aside> 

  <!-- Main Content --> 
  <main class="w-full md:w-3/4 bg-white dark:bg-gray-800 rounded shadow p-6 md:ml-6"> 
    <form action="proses_edit_artikel.php" method="post" class="space-y-6"> 
      <input type="hidden" name="id_artikel" value="<?php echo $data['id_artikel']; ?>"> 

      <div> 
        <label for="nama_artikel" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Judul Artikel</label> 
        <input type="text" id="nama_artikel" name="nama_artikel" required 
          value="<?php echo htmlspecialchars($data['nama_artikel']); ?>" 
          class="w-full p-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded focus:outline-none focus:ring focus:border-purple-500"> 
      </div> 

      <div> 
        <label for="isi_artikel" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Isi Artikel</label> 
        <textarea id="isi_artikel" name="isi_artikel" rows="5" required 
          class="w-full p-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded focus:outline-none focus:ring focus:border-purple-500"><?php echo htmlspecialchars($data['isi_artikel']); ?></textarea> 
      </div>

      <div class="flex justify-end space-x-4"> 
        <button type="submit" 
          class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800 transition">Update</button> 
        <a href="data_artikel.php" 
          class="bg-gray-300 dark:bg-gray-600 text-gray-700 dark:text-white px-4 py-2 rounded hover:bg-gray-400 dark:hover:bg-gray-700 transition">Batal</a> 
      </div> 
    </form> 
  </main> 
</div> 

<!-- Footer --> 
<footer class="bg-purple-800 dark:bg-gray-800 text-white text-center py-4 mt-10"> 
  &copy; <?php echo date('Y'); ?> | Created by Rheyna Ramadhani
</footer> 

<!-- Dark Mode Script -->
<script>
  const toggle = document.getElementById('toggleDark');
  const icon = document.getElementById('icon');
  const root = document.documentElement;

  function updateIcon(isDark) {
    icon.textContent = isDark ? '🌙' : '☀️';
    icon.className = isDark ? 'text-gray-300' : 'text-purple-600';
  }

  // Load setting
  if (localStorage.getItem('theme') === 'dark') {
    root.classList.add('dark');
    toggle.checked = true;
    updateIcon(true);
  } else {
    updateIcon(false);
  }

  // Event listener
  toggle.addEventListener('change', () => {
    const isDark = toggle.checked;
    root.classList.toggle('dark', isDark);
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
    updateIcon(isDark);
  });
</script>

</body> 
</html>


