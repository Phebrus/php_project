<?php
session_start();
include 'condb.php';

if (!isset($_SESSION['username'])) {
    echo "<script>alert('You need to log in to add items to your cart.');</script>";
    echo "<script>window.location = 'login.php';</script>"; // Redirect to your login page
    exit();
}

$game_name = $_GET['game_name'];
$price = $_GET['price'];

$sql = "INSERT INTO cart(game_name, price) VALUES('$game_name', '$price')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Item successfully added to the cart.');</script>";
    echo "<script>window.location = 'cart.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('Failed to add the item to the cart.');</script>";
}
mysqli_close($conn);
?>
