<?php
include 'condb.php';

$game_name = $_GET['game_name'] ?? '';

if (!empty($game_name)) {
    $stmt = $conn->prepare("DELETE FROM game WHERE game_name = ?");
    $stmt->bind_param("s", $game_name);

    if ($stmt->execute()) {
        echo "<script>alert('Product deleted successfully');</script>";
        echo "<script>window.location = 'product_show.php';</script>";
    } else {
        echo "<script>alert('Unable to delete the product');</script>";
        error_log("SQL Error: " . $stmt->error);
    }

    $stmt->close();
} else {
    echo "<script>alert('No game name specified');</script>";
}

$conn->close();
?>
