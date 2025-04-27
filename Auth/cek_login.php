<?php
session_start();

// Data username dan password admin (bisa kamu simpan di database kalau mau lebih aman)
$admin_username = "admin";
$admin_password = "admin123"; // password boleh kamu ubah

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username dan password cocok
    if ($username === $admin_username && $password === $admin_password) {
        // Set session
        $_SESSION['username'] = $username;
        header("Location: ../Admin/cetak.php");
        exit();
    } else {
        echo "Username atau Password salah. <a href='login.php'>Coba lagi</a>";
    }
} else {
    echo "Harap isi Username dan Password. <a href='login.php'>Coba lagi</a>";
}
?>
