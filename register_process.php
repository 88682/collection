<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('php/config.php');


$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


$query = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    echo "Registration successful. <a href='login.php'>Login</a>";
} else {
    echo "Registration failed. Please try again. <a href='register.php'>Back to Registration</a>";
}

$stmt->close();
$conn->close();
?>
