<?php
// Pengguna harus login untuk mengakses halaman cetak.php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../Auth/login.php"); 
    exit();
}


include "../connection.php";

$sql = "SELECT * FROM kontak ORDER BY nama";
$qry = mysqli_query($conn, $sql);


if (!$qry) {
    die("Proses cetak gagal: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kontak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Kontak</h1>

        <?php if (mysqli_num_rows($qry) > 0): ?>
            <div style="overflow-x: auto;">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Pesan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        while ($hasil = mysqli_fetch_assoc($qry)) {
                            echo "<tr>
                                <td>" . htmlspecialchars($no++) . "</td>
                                <td>" . htmlspecialchars($hasil['nama'] ?? '') . "</td>
                                <td>" . htmlspecialchars($hasil['jkel'] ?? '') . "</td>
                                <td>" . htmlspecialchars($hasil['email'] ?? '') . "</td>
                                <td>" . htmlspecialchars($hasil['alamat'] ?? '') . "</td>
                                <td>" . htmlspecialchars($hasil['kota'] ?? '') . "</td>
                                <td>" . htmlspecialchars($hasil['pesan'] ?? '') . "</td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="no-data">
                <p>Tidak ada data kontak yang tersedia.</p>
            </div>
        <?php endif; ?>
        
        <div style="text-align: center; margin-top: 20px;">
            <a href="../Auth/logout.php" class="btn-back">Logout</a>
        </div>
    </div>
</body>
</html>
