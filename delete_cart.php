<?php
include 'condb.php';

if (!empty($_GET['game_name'])) {
    $game_name = mysqli_real_escape_string($conn, $_GET['game_name']);
    $sql = "DELETE FROM cart WHERE game_name = '$game_name' LIMIT 1";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Item removed.');window.location='cart.php';</script>";
    } else {
        echo "<script>alert('Delete failed.');window.location='cart.php';</script>";
    }
} else {
    echo "<script>alert('Invalid item.');window.location='cart.php';</script>";
}

mysqli_close($conn);
?>
