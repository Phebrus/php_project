<?php
session_start();
include('condb.php');

$query_product = "SELECT * FROM game, genre
WHERE game.genre_id = genre.genre_id 
ORDER BY genre_name ASC";
$result_product = mysqli_query($conn, $query_product);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameStore</title>
    <link rel="stylesheet" href="/components/css/games.css">
</head>

<body>
    <header>
         <?php include_once __DIR__ . "/components/header.php"; ?>
    </header>
      <?php include_once __DIR__ . "/components/newgames.php"; ?>
<section class="store-section">
    <h1 class="store-heading">Our Store</h1>
    <div class="product-grid">
        <?php foreach ($result_product as $row_pro) { ?>
            <div class="product-card">
                <img src="images/<?php echo $row_pro['image']; ?>" alt="Game Image">
                <h3><?php echo $row_pro['game_name']; ?></h3>
                <details>
                    <summary>Description</summary>
                    <p><?php echo $row_pro['description']; ?></p>
                </details>
                <p><strong>Publisher:</strong> <?php echo $row_pro['publisher']; ?></p>
                <p><strong>Genre:</strong> <?php echo $row_pro['genre_name']; ?></p>
                <p class="price"><?php echo $row_pro['price']; ?>$</p>
                <!-- Add to Cart Button -->
                <a href="add_to_cart.php?game_name=<?= urlencode($row_pro['game_name']) ?>&price=<?= urlencode($row_pro['price']) ?>" class="add-cart-btn">Add to cart</a>
            </div>
        <?php } ?>
    </div>
</section>


   <footer>
    <?php include_once __DIR__ . "/components/footer.php"; ?>
</footer>
</body>

</html>
