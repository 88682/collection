<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();


include('php/config.php');


$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT id, username, password FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);

if ($stmt->execute()) {
    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Successful login
            $_SESSION['user_id'] = $user['id'];
            header("Location: dashboard.php");
        } else {
            echo "Login failed. Check your username and password. <a href='login.php'>Back to Login</a>";
        }
    } else {
        echo "Login failed. Check your username and password. <a href='login.php'>Back to Login</a>";
    }
} else {
    echo "Login failed. Please try again. <a href='login.php'>Back to Login</a>";
}


$stmt->close();
$conn->close();
?>
