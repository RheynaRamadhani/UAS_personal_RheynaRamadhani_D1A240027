<?php 
session_start(); 
if (isset($_SESSION['username'])) { 
  header('location:beranda_admin.php'); 
} 
require_once("../koneksi.php"); 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
  <title>Login Administrator</title> 
  <script src="https://cdn.tailwindcss.com"></script> 
  <script>
    tailwind.config = {
      darkMode: 'class'
    }
  </script>
</head> 
<body class="bg-gradient-to-br from-purple-100 to-purple-300 dark:from-gray-800 dark:to-gray-900 min-h-screen flex items-center justify-center transition-colors duration-300">

  <!-- Tombol Beranda -->
  <div class="absolute top-4 left-4 ml-6">
    <a href="../about.php" 
       class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded flex items-center shadow-md transition-transform duration-200 transform hover:scale-105 active:scale-95">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
      Beranda
    </a>
  </div>

  <!-- Container Login -->
  <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8 w-full max-w-md relative">
    <!-- Header -->
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-bold text-black dark:text-white">🔒 Login Admin</h2>

      <!-- Toggle Tombol -->
      <label class="relative inline-flex items-center cursor-pointer">
        <input type="checkbox" id="toggleDark" class="sr-only peer">
        <div class="w-14 h-8 bg-purple-100 peer-checked:bg-black rounded-full transition-colors duration-300"></div>
        <div id="switchIcon" class="absolute top-0.5 left-0.5 w-7 h-7 bg-white rounded-full flex items-center justify-center text-sm transition-all duration-300 peer-checked:translate-x-6">
          <span id="icon" class="text-gray-500">☀️</span>
        </div>
      </label>
    </div>

    <!-- Gambar Profil -->
    <div class="flex justify-center mb-6">
      <img src="../images/poto1.jpg" alt="Admin" class="w-24 h-24 rounded-full shadow-lg border-4 border-purple-300 dark:border-purple-600">
    </div>

    <!-- Form Login -->
    <form action="cek_login.php" method="post" class="space-y-5">
      <div>
        <label for="username" class="block text-sm font-medium text-gray-700 dark:text-gray-300">👤 Username</label>
        <input type="text" name="username" id="username" required
               class="mt-1 block w-full border-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">🔑 Password</label>
        <input type="password" name="password" id="password" required
               class="mt-1 block w-full border-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
      </div>
      <div class="flex justify-between items-center">
        <input type="submit" name="login" value="Masuk"
               class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800 cursor-pointer">
        <input type="reset" name="cancel" value="Batal"
               class="bg-purple-300 dark:bg-gray-500 text-gray-700 dark:text-white px-4 py-2 rounded hover:bg-gray-400 dark:hover:bg-gray-600 cursor-pointer">
      </div>
    </form>

    <!-- Footer -->
    <div class="text-center text-sm text-gray-600 dark:text-gray-400 mt-6">
      &copy; <?php echo date('Y'); ?> - Rheyna Ramadhani
    </div>
  </div>

  <!-- Script Toggle Dark Mode -->
  <script>
    const toggle = document.getElementById('toggleDark');
    const icon = document.getElementById('icon');
    const root = document.documentElement;

    function updateIcon(isDark) {
      icon.textContent = isDark ? '🌙' : '☀️';
      icon.className = isDark ? 'text-gray-300' : 'text-gray-500';
    }

    // Saat halaman dibuka
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
      root.classList.add('dark');
      toggle.checked = true;
      updateIcon(true);
    } else {
      updateIcon(false);
    }

    // Saat tombol diklik
    toggle.addEventListener('change', () => {
      const isDark = toggle.checked;
      root.classList.toggle('dark', isDark);
      localStorage.setItem('theme', isDark ? 'dark' : 'light');
      updateIcon(isDark);
    });
  </script>

</body> 
</html>







