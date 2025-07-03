<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Personal Web | Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class'
    }
  </script>
</head>
<body class="bg-purple-200 dark:bg-gray-900 dark:text-gray-100 text-gray-800 font-sans transition-colors duration-300">

  <!-- Header -->
  <header class="bg-purple-900 dark:bg-gray-800 text-white text-center p-6 text-2xl font-bold">
    Personal Web | Rheyna Ramadhani
  </header>

  <!-- Navigation -->
  <nav class="bg-purple-700 dark:bg-gray-700 text-white py-3">
    <div class="relative max-w-6xl mx-auto flex justify-center items-center">
      <!-- Menu Tengah -->
      <ul class="flex space-x-6 font-medium text-lg">
        <li><a href="index.php" class="hover:underline">Artikel</a></li>
        <li><a href="gallery.php" class="hover:underline">Gallery</a></li>
        <li><a href="about.php" class="hover:underline">About</a></li>
        <li><a href="admin/login.php" class="hover:underline">Login</a></li>
      </ul>
      <!-- Tombol Switch Dark Mode -->
      <div class="absolute right-4">
        <label class="relative inline-flex items-center cursor-pointer">
          <input type="checkbox" id="toggleDark" class="sr-only peer">
          <!-- Background toggle -->
          <div class="w-14 h-8 rounded-full transition-colors duration-300
                      bg-purple-100 peer-checked:bg-black"></div>
          <!-- Bulatan slider -->
          <div id="switchIcon" class="absolute top-0.5 left-0.5 w-7 h-7 rounded-full
                      bg-white flex items-center justify-center text-sm 
                      transition-all duration-300 peer-checked:translate-x-6">
            <span id="icon" class="text-gray-500">☀️</span>
          </div>
        </label>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="max-w-6xl mx-auto p-6 grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
    <!-- Artikel -->
    <section class="md:col-span-2 bg-white dark:bg-gray-800 p-6 rounded shadow">
      <h2 class="text-xl font-bold mb-4">Artikel Terbaru</h2>
      <div class="space-y-4">
        <?php
        $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
        $query = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($query)) {
          echo "<div class='border-b border-gray-300 dark:border-gray-600 pb-4'>";
          echo "<h3 class='text-lg font-semibold text-black dark:text-white'>" . htmlspecialchars($data['nama_artikel']) . "</h3>";
          echo "<p>" . htmlspecialchars($data['isi_artikel']) . "</p>";
          echo "</div>";
        }
        ?>
      </div>
    </section>

    <!-- Sidebar -->
    <aside class="bg-white dark:bg-gray-800 p-6 rounded shadow">
      <h2 class="text-lg font-bold mb-4">Daftar Artikel</h2>
      <ul class="space-y-2 list-disc list-inside text-gray-700 dark:text-gray-300">
        <?php
        $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
        $query = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($query)) {
          echo "<li>" . htmlspecialchars($data['nama_artikel']) . "</li>";
        }
        ?>
      </ul>
    </aside>
  </main>

  <!-- Footer -->
  <footer class="bg-purple-900 dark:bg-gray-800 text-white text-center py-4 mt-10">
    &copy; <?php echo date('Y'); ?> | Created by Rheyna Ramadhani
  </footer>

  <!-- Script Dark Mode -->
  <script>
    const toggle = document.getElementById('toggleDark');
    const icon = document.getElementById('icon');
    const root = document.documentElement;

    function updateIcon(isDark) {
      icon.textContent = isDark ? '🌙' : '☀️';
      icon.className = isDark ? 'text-gray-300' : 'text-gray-500';
    }

    // Saat halaman pertama kali dibuka
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
      root.classList.add('dark');
      toggle.checked = true;
      updateIcon(true);
    } else {
      updateIcon(false);
    }

    // Toggle saat diklik
    toggle.addEventListener('change', () => {
      const isDark = toggle.checked;
      root.classList.toggle('dark', isDark);
      localStorage.setItem('theme', isDark ? 'dark' : 'light');
      updateIcon(isDark);
    });
  </script>

</body>
</html>






