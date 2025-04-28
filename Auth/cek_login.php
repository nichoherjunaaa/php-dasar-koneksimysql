<?php
session_start();
include "../connection.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ? AND role = 'admin'");
    if ($stmt === false) {
        die("Prepare statement gagal: " . $conn->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;
            header("Location: ../Admin/cetak.php");
            exit();
        } else {
            echo "Password salah. <a href='login.php'>Coba lagi</a>";
        }
    } else {
        echo "Username tidak ditemukan atau bukan admin. <a href='login.php'>Coba lagi</a>";
    }

    $stmt->close();
} else {
    echo "Harap isi Username dan Password. <a href='login.php'>Coba lagi</a>";
}

$conn->close();
?>
