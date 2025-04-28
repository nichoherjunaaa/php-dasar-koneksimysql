<?php 
session_start(); 
if (isset($_SESSION['username'])) {
    header("Location: ../Admin/cetak.php");
    exit(); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h2>Login Admin</h2>
            <p>Masukkan kredensial untuk mengakses panel admin</p>
        </div>
        
        <form class="login-form" action="cek_login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required autocomplete="username">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required autocomplete="current-password">
            </div>
            
            <button type="submit">Masuk</button>
        </form>
        
        <div class="login-footer">
            <p>Sistem Manajemen Kontak</p>
        </div>
    </div>
</body>
</html>