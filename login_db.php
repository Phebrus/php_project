<?php
session_start();
include 'condb.php';

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$mode = $_POST['mode'];  // To determine whether it's registration or login

if ($mode === 'register') {
    // Check if email or username already exists
    $check = $conn->prepare("SELECT * FROM user WHERE email = ? OR username = ?");
    $check->bind_param("ss", $email, $username);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        echo "Account with this email or username already exists.";
    } else {
        // Hash the password before saving to the database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert the new user into the database
        $stmt = $conn->prepare("INSERT INTO user (email, username, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $username, $hashed_password);
        
        if ($stmt->execute()) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Registration successful!";
            header("Location: index.php");
        } else {
            echo "Registration failed.";
        }
    }
} else if ($mode === 'login') {
    // Check if user exists with the provided email or username
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = ? OR username = ?");
    $stmt->bind_param("ss", $email, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Set session for logged in user
            $_SESSION['username'] = $user['username'];
            $_SESSION['success'] = "Login successful!";
            header("Location: index.php");
        } else {
            echo "Invalid credentials. Please check your password.";
        }
    } else {
        echo "No user found with this email or username.";
    }
}
mysqli_close($conn);
?>
