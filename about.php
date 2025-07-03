<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About | Personal Web</title>
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
    About Me | Rheyna Ramadhani
  </header>

  <!-- Navigation -->
  <nav class="bg-purple-700 dark:bg-gray-700 text-white py-3 relative">
    <div class="relative max-w-6xl mx-auto flex justify-center items-center">
      <ul class="flex space-x-10 font-medium text-lg">
        <li><a href="index.php" class="hover:underline">Artikel</a></li>
        <li><a href="gallery.php" class="hover:underline">Gallery</a></li>
        <li><a href="about.php" class="hover:underline">About</a></li>
        <li><a href="admin/login.php" class="hover:underline">Login</a></li>
      </ul>

      <!-- Toggle Tombol Dark Mode -->
      <div class="absolute right-4">
        <label class="relative inline-flex items-center cursor-pointer">
          <input type="checkbox" id="toggleDark" class="sr-only peer">
          <div class="w-14 h-8 bg-purple-100 peer-checked:bg-black rounded-full transition-colors duration-300"></div>
          <div id="switchIcon" class="absolute top-0.5 left-0.5 w-7 h-7 bg-white rounded-full flex items-center justify-center text-sm transition-all duration-300 peer-checked:translate-x-6">
            <span id="icon" class="text-gray-500">☀️</span>
          </div>
        </label>
      </div>
    </div>
  </nav>

  <!-- About Content -->
  <main class="max-w-4xl mx-auto p-6 bg-white dark:bg-gray-800 rounded shadow mt-8">
    <h2 class="text-2xl font-bold mb-6 text-center text-black dark:text-white">Tentang Saya</h2>
    <div class="flex flex-col md:flex-row items-center justify-center gap-8 text-center md:text-left">
      <!-- Foto Profil -->
      <div>
        <img src="images/profil1.jpg" alt="Foto Profil" class="w-40 h-40 rounded-full border-4 border-purple-500 shadow-lg object-cover mx-auto md:mx-0">
      </div>
      <!-- Deskripsi -->
      <div class="max-w-xl space-y-4">
        <?php 
        $sql = "SELECT * FROM tbl_about ORDER BY id_about DESC"; 
        $query = mysqli_query($db, $sql); 
        while ($data = mysqli_fetch_array($query)) { 
          echo "<p class='text-gray-700 dark:text-gray-300'>" . htmlspecialchars($data['about']) . "</p>"; 
        } 
        ?>
      </div>
    </div>
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

    // Saat halaman pertama dimuat
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
      root.classList.add('dark');
      toggle.checked = true;
      updateIcon(true);
    } else {
      updateIcon(false);
    }

    // Saat toggle diklik
    toggle.addEventListener('change', () => {
      const isDark = toggle.checked;
      root.classList.toggle('dark', isDark);
      localStorage.setItem('theme', isDark ? 'dark' : 'light');
      updateIcon(isDark);
    });
  </script>

</body>
</html>






