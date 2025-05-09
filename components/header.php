<link rel="stylesheet" href="/components/header.css">
<nav>
  <div class="logo"><a href="index.php">🎮 MyStore</a></div>
  
  <ul class="nav-center">
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">Store</a></li>
    <li><a href="news.php">News</a></li>
    <li><a href="cart.php">Cart</a></li>
  </ul>
  
  <ul class="nav-right">
    <li><a href="#">Admin</a></li>
    <li><a href="#">/</a></li>
    <li><a href="login.php">Sign In</a></li>
  </ul>
</nav>
<script>
  const navLinks = document.querySelectorAll('nav a');

  // Add base class to all nav links including logo
  navLinks.forEach(link => link.classList.add('scale-up'));

  document.addEventListener('mousemove', (e) => {
    const mouseX = e.clientX;
    const mouseY = e.clientY;

    navLinks.forEach(link => {
      const rect = link.getBoundingClientRect();
      const centerX = rect.left + rect.width / 2;
      const centerY = rect.top + rect.height / 2;
      const distance = Math.hypot(mouseX - centerX, mouseY - centerY);

      // New tighter proximity threshold
      if (distance < 40) {
        link.classList.add('scaled');
      } else {
        link.classList.remove('scaled');
      }
    });
  });
</script>
