<?php
include 'adminModel.php';

// Contoh Login
$email = 'admin@example.com';
$password = 'password123';

$admin = loginAdmin($email, $password);
if ($admin) {
    echo "Login berhasil, selamat datang " . $admin['name'];
} else {
    echo "Email atau password salah";
}
?>
