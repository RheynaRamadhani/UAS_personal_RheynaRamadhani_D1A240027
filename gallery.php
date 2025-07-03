<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gallery | Personal Web</title>
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
    Gallery | Rheyna Ramadhani
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
      <!-- Dark Mode Toggle -->
      <div class="absolute right-4">
        <label class="relative inline-flex items-center cursor-pointer">
          <input type="checkbox" id="toggleDark" class="sr-only peer">
          <div class="w-14 h-8 bg-purple-100 rounded-full peer-checked:bg-black transition-colors duration-300"></div>
          <div id="switchIcon" class="absolute top-0.5 left-0.5 w-7 h-7 bg-white rounded-full flex items-center justify-center text-sm transition-all duration-300 peer-checked:translate-x-6">
            <span id="icon" class="text-gray-500">☀️</span>
          </div>
        </label>
      </div>
    </div>
  </nav>

  <!-- Gallery -->
  <main class="max-w-6xl mx-auto px-4 py-6">
    <h2 class="text-xl font-bold mb-6 text-center">Galeri Foto</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 place-items-center">
      <?php 
      $sql = "SELECT * FROM tbl_gallery ORDER BY id_gallery DESC"; 
      $query = mysqli_query($db, $sql); 
      while ($data = mysqli_fetch_array($query)) { 
        echo "<div onclick=\"openModal('images/{$data['foto']}')\" class='bg-white dark:bg-gray-800 border dark:border-gray-600 rounded-3xl shadow-md overflow-hidden w-[320px] mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer hover:shadow-2xl'>";
        echo "<div class='w-full aspect-square p-3 bg-purple-100 dark:bg-gray-700 rounded-[35px] ring-4 ring-purple-300 dark:ring-purple-600'>";
        echo "<img src='images/{$data['foto']}' alt='Gambar' class='w-full h-full object-cover rounded-[30px]'>";
        echo "</div>";
        echo "<div class='p-3'>";
        echo "<h3 class='text-base font-semibold text-black dark:text-white text-center'>" . htmlspecialchars($data['judul']) . "</h3>";
        echo "</div></div>";
      } 
      ?>
    </div>
  </main>

  <!-- Modal for Image Preview -->
  <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-70 hidden items-center justify-center z-50">
    <div class="bg-white dark:bg-gray-800 rounded-xl p-4 max-w-3xl w-full relative">
      <button onclick="closeModal()" class="absolute top-2 right-2 text-xl font-bold text-gray-600 dark:text-gray-300 hover:text-red-500">&times;</button>
      <img id="modalImage" src="" alt="Preview" class="w-full h-auto rounded-lg object-contain max-h-[80vh]">
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-purple-900 dark:bg-gray-800 text-white text-center py-4 mt-10">
    &copy; <?php echo date('Y'); ?> | Created by Rheyna Ramadhani
  </footer>

  <!-- Dark Mode Script -->
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

    // Modal Scripts
    const imageModal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');

    function openModal(src) {
      modalImage.src = src;
      imageModal.classList.remove('hidden');
      imageModal.classList.add('flex');
    }

    function closeModal() {
      imageModal.classList.add('hidden');
      imageModal.classList.remove('flex');
    }

    // Optional: Close modal when clicking outside image
    imageModal.addEventListener('click', function (e) {
      if (e.target === imageModal) closeModal();
    });
  </script>

</body>
</html>







