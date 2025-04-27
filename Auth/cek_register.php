<?php

include "../connection.php";

if (isset($_POST['username'], $_POST['password'], $_POST['confirm_password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = "client";

    if ($password === $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
        
        if ($stmt === false) {
            die("Prepare statementg agal: " . $conn->error);
        }
        $stmt->bind_param("sss", $username, $hashed_password, $role);

        if (!$stmt->execute()) {
            die("Proses simpan ke database gagal: " . $stmt->error);
        }

        $stmt->close();
        echo "Registrasi berhasil. <a href='login.php'>Login</a>";
    } else {
        echo "Password dan Konfirmasi Password tidak cocok. <a href='register.php'>Coba lagi</a>";
    }
} else {
    die("Data tidak lengkap. Harap isi semua field. <a href='register.php'>Coba lagi</a>");
}

$conn->close();
?>
