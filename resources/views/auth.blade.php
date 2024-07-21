<?php
session_start();

$users = [
    'admin' => 'password123',
    'user1' => 'pass1',
    'user2' => 'pass2'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['A123'];
    $password = $_POST['12345678'];

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); // Ganti dengan halaman setelah login
        exit;
    } else {
        echo "Invalid username or password.";
    }
}
?>
