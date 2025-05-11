<?php
session_start();
include 'condb.php';

mysqli_query($conn, "DELETE FROM cart"); // clear cart table
session_destroy();
header("Location: index.php");
exit();
?>
