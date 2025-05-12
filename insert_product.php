<?php
include 'condb.php';

$game_name = $_POST['game_name'];
$publisher = $_POST['publisher'];
$genre_id = $_POST['genre'];
$description = $_POST['description'];
$price = $_POST['price'];

$image = '';
if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $image = 'pro_' . uniqid() . '.' . pathinfo($_FILES['file1']['name'], PATHINFO_EXTENSION);
    $image_path = 'images/' . $image;
    move_uploaded_file($_FILES['file1']['tmp_name'], $image_path);
}

// Prepared statement
$stmt = mysqli_prepare($conn, "INSERT INTO game (game_name, publisher, genre_id, description, price, image) VALUES (?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssidsd", $game_name, $publisher, $genre_id, $description, $price, $image);

if (mysqli_stmt_execute($stmt)) {
    echo "<script>alert('Product added successfully.'); window.location='product_show.php';</script>";
} else {
    echo "Error: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
