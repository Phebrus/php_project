<?php
session_start();
include 'condb.php';

if (!isset($_SESSION['username'])) {
    echo "<script>alert('You need to log in to add items to your cart.');</script>";
    echo "<script>window.location = 'login.php';</script>"; 
    exit();
}

$game_name = $_GET['game_name'];
$price = $_GET['price'];

// Use prepared statement to prevent SQL errors and injection
$stmt = mysqli_prepare($conn, "INSERT INTO cart (game_name, price) VALUES (?, ?)");
mysqli_stmt_bind_param($stmt, "ss", $game_name, $price);

if (mysqli_stmt_execute($stmt)) {
    echo "<script>alert('Item successfully added to the cart.');</script>";
    echo "<script>window.location = 'cart.php';</script>";
} else {
    echo "<script>alert('Failed to add the item to the cart.');</script>";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
