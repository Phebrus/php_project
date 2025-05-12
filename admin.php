<?php include 'condb.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css_pages/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <?php include_once __DIR__ . "/components/header.php"; ?>
</header>

<main class="cyber-background">
    <div class="container">
        <h1>Add Product</h1>
        <form action="insert_product.php" method="post" enctype="multipart/form-data" class="cyber-form">
            <label>Name</label>
            <input type="text" name="game_name" placeholder="Enter name" required>

            <label>Publisher</label>
            <input type="text" name="publisher" placeholder="Enter publisher" required>

            <label>Genre</label>
            <select name="genre">
                <?php
                $sql = "SELECT * FROM genre ORDER BY genre_name";
                $hand = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hand)) {
                ?>
                    <option value="<?= $row['genre_id'] ?>"><?= $row['genre_name'] ?></option>
                <?php } mysqli_close($conn); ?>
            </select>

            <label>Description</label>
            <input type="text" name="description" placeholder="Enter description" required>

            <label>Price</label>
            <input type="number" name="price" placeholder="Enter price" required>

            <label>Image</label>
            <input type="file" name="file1" required>

            <div class="button-group">
                <button type="submit" class="btn-submit">Submit</button>
                <input type="reset" class="btn-cancel" value="Cancel">
                <a href="product_show.php" class="btn-link">Go to product list</a>
            </div>
        </form>
    </div>
</main>

<footer>
    <?php include_once __DIR__ . "/components/footer.php"; ?>
</footer>
</body>
</html>
