<?php
include 'condb.php';
$game_name = $_GET['game_name'];
$sql = "SELECT * FROM game, genre WHERE game_name = '$game_name' AND game.genre_id = genre.genre_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css_pages/product_edit.css">
</head>
<body>

<header>
    <?php include_once __DIR__ . "/components/header.php"; ?>
</header>

<main>
    <div class="container">
        <h1>Edit Product</h1>
<form action="update_product.php" method="post" name="game-form" enctype="multipart/form-data">
    <label>Name</label>
    <input type="text" name="game_name" value="<?= $row['game_name'] ?>" readonly>

    <label>Publisher</label>
    <input type="text" name="publisher" value="<?= $row['publisher'] ?>">

    <label>Genre</label>
    <input type="text" name="genre" value="<?= $row['genre_name'] ?>" readonly>

    <label>Description</label>
    <input type="text" name="description" value="<?= $row['description'] ?>">

    <label>Price</label>
    <input type="number" name="price" value="<?= $row['price'] ?>">

    <label>Image</label><br>
    <img src="images/<?= $row['image'] ?>" class="img-thumbnail"><br><br>
    <input type="file" name="file1">
    
    <!-- Hidden field to store the existing image path -->
    <input type="hidden" name="existing_image" value="<?= $row['image'] ?>">

    <button type="submit" name="submit">Submit</button>
    <input type="reset" value="Cancel">
    <a href="product_show.php" class="btn-secondary">Back to Products</a>
</form>

    </div>

    <footer>
        <?php include_once __DIR__ . "/components/footer.php"; ?>
    </footer>
</main>

</body>
</html>
