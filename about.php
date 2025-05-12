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
    <h1 class="store-heading">Store</h1>
    <div class="product-grid">
    <?php
    $sql = "SELECT * FROM game, genre WHERE game.genre_id = genre.genre_id";
    $hand = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($hand)) {
    ?>
        <div class="product-card">
            <img src="<?= htmlspecialchars($row["image"]) ?>" alt="<?= htmlspecialchars($row["game_name"]) ?>">
            <h3><?= htmlspecialchars($row["game_name"]) ?></h3>
            <details>
                <summary>Description</summary>
                <p><?= htmlspecialchars($row["description"]) ?></p>
            </details>
            <p><strong>Publisher:</strong> <?= htmlspecialchars($row["publisher"]) ?></p>
            <p><strong>Genre:</strong> <?= htmlspecialchars($row["genre_name"]) ?></p>
            <p class="price"><?= htmlspecialchars($row["price"]) ?>$</p>
            <a href="add_to_cart.php?game_name=<?= urlencode($row['game_name']) ?>&price=<?= urlencode($row['price']) ?>" class="add-cart-btn">Add to cart</a>
        </div>
    <?php
    }
    mysqli_close($conn);
    ?>
    </div>
</section>

<footer>
    <?php include_once __DIR__ . "/components/footer.php"; ?>
</footer>
</body>

</html>
