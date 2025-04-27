<?php 
session_start(); 
if (isset($_SESSION['username'])) {
    header("Location: cetak.php");
    exit(); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="register-container">
        <div class="register-header">
            <h2>Buat Akun Baru</h2>
            <p>Silakan lengkapi formulir di bawah ini untuk mendaftar</p>
        </div>
        
        <form class="register-form" action="proses_register.php" method="POST">
            
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required autocomplete="username">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required autocomplete="new-password">
            </div>
            
            <div class="form-group">
                <label for="confirm-password">Konfirmasi Password</label>
                <input type="password" id="confirm-password" name="confirm_password" required autocomplete="new-password">
            </div>
            
            <button type="submit">Daftar</button>
            
            <div class="login-link">
                Sudah memiliki akun? <a href="login.php">Login di sini</a>
            </div>
        </form>
        
        <div class="register-footer">
            <p>Sistem Manajemen Kontak</p>
        </div>
    </div>
</body>
</html>