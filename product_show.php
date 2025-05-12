<?php include 'condb.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css_pages/product.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php include_once __DIR__ . "/components/header.php"; ?>
    </header>

    <main>
        <div class="container">
            <h1>Our Product</h1>
            <a href="admin.php" class="add-button">ADD+</a>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Publisher</th>
                    <th>Genre</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                $sql = "SELECT * FROM game, genre WHERE game.genre_id = genre.genre_id";
                $hand = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hand)) {
                ?>
                    <tr>
                        <td><?= ($row["game_name"]) ?></td>
                        <td><?= ($row["publisher"]) ?></td>
                        <td><?= ($row["genre_name"]) ?></td>
                        <td><?= ($row["description"]) ?></td>
                        <td><?= ($row["price"]) ?>$</td>
                        <td><img src="<?= ($row["image"]) ?>" alt="<?= ($row["game_name"]) ?>"></td>
                        <td><a href="product_edit.php?game_name=<?= urlencode($row["game_name"]) ?>" class="btn btn-edit">EDIT</a></td>
                        <td><a href="delete_product.php?game_name=<?= urlencode($row["game_name"]) ?>" class="btn btn-delete" onclick="Del(this.href);return false;">DELETE</a></td>
                    </tr>
                <?php
                }
                mysqli_close($conn);
                ?>
            </table>
        </div>

        <footer>
            <?php include_once __DIR__ . "/components/footer.php"; ?>
        </footer>
    </main>

    <script>
function Del(mypage) {
    if (confirm("Do you want to delete this product?")) {
        window.location = mypage;
    }
}
    </script>
</body>
</html>
