<?php
session_start();
include 'condb.php';

// If user is already logged in
$loggedInUser = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login / Register</title>
  <link rel="stylesheet" href="/components/css/login.css">
</head>
<body>

  <div class="form-container">
    <h2 id="form-title">Login</h2>
    <form id="authForm" method="post" action="login_db.php">
      <input type="hidden" id="mode" name="mode" value="login" />
      <input type="email" name="email" id="email" placeholder="Email" required />
      <input type="text" name="username" id="username" placeholder="Username" />
      <input type="password" name="password" id="password" placeholder="Password" required />
      <div>
        <button type="submit" class="btn">Submit</button>
        <button type="reset" class="btn">Reset</button>
      </div>
      <div class="toggle" onclick="toggleForm()">Don't have an account? Register</div>
    </form>
    <?php if ($loggedInUser): ?>
      <p class="success">Welcome, <?= htmlspecialchars($loggedInUser) ?>!</p>
    <?php endif; ?>
  </div>

  <script>
    const formTitle = document.getElementById('form-title');
    const toggle = document.querySelector('.toggle');
    const mode = document.getElementById('mode');
    const usernameInput = document.getElementById('username');

    function toggleForm() {
      if (mode.value === 'login') {
        mode.value = 'register';
        formTitle.innerText = 'Register';
        toggle.innerText = 'Already have an account? Login';
        usernameInput.required = true;
      } else {
        mode.value = 'login';
        formTitle.innerText = 'Login';
        toggle.innerText = "Don't have an account? Register";
        usernameInput.required = false;
      }
    }
  </script>
</body>
</html>
