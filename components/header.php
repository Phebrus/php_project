<?php

$user = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>
<link rel="stylesheet" href="/components/css/header.css">
<nav>
  <div class="logo"><a href="index.php">🎮 MyStore</a></div>
  
  <ul class="nav-center">
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">Store</a></li>
    <li><a href="cart.php">Cart</a></li>
  </ul>
  
  <ul class="nav-right">
    <li><a href="#">Admin</a></li>
    <li><a href="#">/</a></li>
    <li class="dropdown">
      <?php if ($user): ?>
        <a href="#" class="user-toggle"><?= htmlspecialchars($user) ?> </a>
        <ul class="dropdown-menu">
          <li><a href="profile.php">Profile</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      <?php else: ?>
        <a href="login.php">Sign In</a>
      <?php endif; ?>
    </li>
  </ul>
</nav>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('.user-toggle');
    const menu = document.querySelector('.dropdown-menu');
    if (toggle && menu) {
      toggle.addEventListener('click', (e) => {
        e.preventDefault();
        menu.classList.toggle('show');
      });
      document.addEventListener('click', (e) => {
        if (!toggle.contains(e.target) && !menu.contains(e.target)) {
          menu.classList.remove('show');
        }
      });
    }
  });

  const navLinks = document.querySelectorAll('nav a');
  navLinks.forEach(link => link.classList.add('scale-up'));

  document.addEventListener('mousemove', (e) => {
    const mouseX = e.clientX;
    const mouseY = e.clientY;

    navLinks.forEach(link => {
      const rect = link.getBoundingClientRect();
      const centerX = rect.left + rect.width / 2;
      const centerY = rect.top + rect.height / 2;
      const distance = Math.hypot(mouseX - centerX, mouseY - centerY);

      link.classList.toggle('scaled', distance < 40);
    });
  });
</script>
