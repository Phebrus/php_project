<?php
include 'condb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the data from the form
    $game_name = ($_POST['game_name']);  // Allow game_name to be updated
    $publisher = ($_POST['publisher']);
    $description = ($_POST['description']);
    $price = ($_POST['price']);
    $genre = ($_POST['genre']);
    $image = $_POST['existing_image'];  // Current image path if no new image is uploaded

    // Handle file upload for image
    if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
        // Generate a new unique name for the image
        $image = 'pro_' . uniqid() . '.' . pathinfo($_FILES['file1']['name'], PATHINFO_EXTENSION);
        $image_path = 'images/' . $image;
        move_uploaded_file($_FILES['file1']['tmp_name'], $image_path);
    } else {
        // If no new image is uploaded, keep the existing one
        $image_path = 'images/' . $image;
    }

    // Get the genre_id from the genre name
    $sql = "SELECT genre_id FROM genre WHERE genre_name = '$genre'";
    $result = mysqli_query($conn, $sql);
    $genre_row = mysqli_fetch_assoc($result);
    $genre_id = $genre_row['genre_id'];

    // Prepare the SQL query to update the game details
    $update_sql = "UPDATE game SET 
                    game_name = '$game_name',
                    publisher = '$publisher', 
                    description = '$description', 
                    price = '$price', 
                    genre_id = '$genre_id', 
                    image = '$image' 
                    WHERE game_name = '$game_name'";  // Ensure we're updating the correct game

    // Execute the query
    if (mysqli_query($conn, $update_sql)) {
        echo "<script>alert('Product updated successfully.'); window.location='product_show.php';</script>";
    } else {
        echo "<script>alert('Error updating product: " . mysqli_error($conn) . "');</script>";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
