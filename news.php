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
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
  body {
    margin: 0;
    font-family: 'Orbitron', sans-serif;
    background-color: #0b1521;
    color: #e0e0e0;
}

.login-btn, .admin {
    color: #00ff99 !important;
    font-weight: bold;
}

.hero {
    position: relative;
    text-align: center;
    overflow: hidden;
}

.carousel img {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

.carousel-caption {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #00ffff;
    text-shadow: 0 0 5px #00ffff, 0 0 10px #00ffff;
}

.store-section {
    padding: 3rem 2rem;
    background: linear-gradient(180deg, #0b1521, #000000);
    text-align: center;
}

.store-heading {
    color: #00ffff;
    font-size: 2.5rem;
    margin-bottom: 2rem;
    text-shadow: 0 0 5px #00ffff, 0 0 10px #00ffff;
}

.product-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
}

.product-card {
    background-color: #091b29;
    border: 1px solid #3b78e6;
    border-radius: 10px;
    width: 300px;
    padding: 1rem;
    box-shadow: 0 0 15px rgba(59, 120, 230, 0.5);
    text-align: left;
    transition: transform 0.3s ease;
}

.product-card:hover {
    transform: scale(1.03);
}

.product-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 5px;
}

.product-card h3 {
    color: #00ffff;
    margin-top: 1rem;
}

.product-card details summary {
    cursor: pointer;
    color: #aaa;
    margin-top: 0.5rem;
}

.product-card p {
    margin: 0.3rem 0;
}

.price {
    color: #00ffcc;
    font-size: 1.2rem;
    font-weight: bold;
    margin-top: 0.5rem;
}

.add-cart-btn {
    display: inline-block;
    margin-top: 1rem;
    padding: 0.5rem 1rem;
    background-color: #3b78e6;
    color: #fff;
    border-radius: 50px;
    transition: background 0.3s;
}

.add-cart-btn:hover {
    background-color: #ff00cc;
}

a {
    text-decoration: none;
}

</style>
<body>
    <header>
         <?php include_once __DIR__ . "/components/header.php"; ?>
    </header>

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
                        <p class="price"><?php echo $row_pro['price']; ?> Baht</p>
                        <a href="add_to_cart.php?game_name=<?= $row_pro["game_name"] ?>&price=<?= $row_pro["price"] ?>" class="add-cart-btn">Add to cart</a>
                    </div>
                <?php } ?>
            </div>
        </section>

   <footer>
    <?php include_once __DIR__ . "/components/footer.php"; ?>
</footer>
</body>

</html>
