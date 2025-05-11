<?php
session_start();
include('condb.php');

// If not logged in, redirect to login and reset cart
if (!isset($_SESSION['username'])) {
    mysqli_query($conn, "DELETE FROM cart"); 
    header("Location: login.php");
    exit();
}

$total = 0;
?>


<?php include('condb.php'); ?>
<?php $total = 0; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Your Cart</title>
  <link rel="stylesheet" href="cart.css" />
</head>
<body>

<header>
  <?php include_once __DIR__ . "/components/header.php"; ?>
</header>

<main class="cart-bg">
  <div class="cart-container">
    <h1 class="neon-title">Your Cart</h1>
    <table class="cart-table">
      <thead>
        <tr class="cart-header">
          <th>Image</th>
          <th>Product</th>
          <th>Publisher</th>
          <th>Description</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM cart INNER JOIN game ON cart.game_name = game.game_name";
        $hand = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($hand)) {
        ?>
        <tr class="cart-item">
          <td class="product-img">
            <img src="uploads/<?= $row['image'] ?>" alt="<?= $row['image'] ?>" class="game-img" />
          </td>
          <td class="product-name"><?= $row["game_name"] ?></td>
          <td class="product-publisher"><?= $row["publisher"] ?></td>
          <td class="product-description"><?= $row["description"] ?></td>
          <td class="product-price"><?= $row["price"] ?>$</td>
          <td class="product-action">
    <a href="delete_cart.php?game_name=<?= urlencode($row["game_name"]) ?>" 
   class="btn btn-danger rounded-pill delete-link">
   DELETE
    </a>
          </td>
        </tr>
        <?php
          $total += $row['price'];
        }
        mysqli_close($conn);
        ?>
      </tbody>
    </table>
    <h3 class="total-price">Total: <?= $total ?>$</h3>
    <a href="about.php" class="back-link">&lt; Go back to store</a>
  </div>
</main>

<footer>
  <?php include_once __DIR__ . "/components/footer.php"; ?>
</footer>

<div id="confirmModal" class="modal-overlay">
  <div class="modal-box">
    <p>Are you sure you want to remove this item from your cart?</p>
    <div class="modal-buttons">
      <button id="confirmYes">Yes</button>
      <button id="confirmNo">No</button>
    </div>
  </div>
</div>


<script>
  let targetHref = '';
  document.querySelectorAll('.delete-link').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      targetHref = this.getAttribute('href');
      document.getElementById('confirmModal').style.display = 'flex';
    });
  });

  document.getElementById('confirmYes').onclick = () => {
    window.location.href = targetHref;
  };
  document.getElementById('confirmNo').onclick = () => {
    document.getElementById('confirmModal').style.display = 'none';
    targetHref = '';
  };
</script>


</body>
</html>
