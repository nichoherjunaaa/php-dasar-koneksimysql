<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="container">
            <header>
                <h1>Form Kontak</h1>
                <p class="subtitle">Silahkan isi data diri anda dibawah ini !</p>
            </header>
            
            <form id="contactForm" action="simpan_kontak.php" method="POST">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                </div>
                
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="pria" name="jkel" value="Pria" required>
                            <label for="pria">Pria</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="wanita" name="jkel" value="Wanita">
                            <label for="wanita">Wanita</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan alamat email" required>
                </div>
                
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat lengkap" required>
                </div>
                
                <div class="form-group">
                    <label for="kota">Kota</label>
                    <select id="kota" name="kota" required>
                        <option value="" selected disabled>Pilih kota</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Medan">Medan</option>
                        <option value="Makassar">Makassar</option>
                        <option value="Yogyakarta">Yogyakarta</option>
                        <option value="Semarang">Semarang</option>
                        <option value="Palembang">Palembang</option>
                        <option value="Bali">Bali</option>
                        <option value="Lainnya">Kota Lainnya</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea id="pesan" name="pesan" placeholder="Tulis pesan anda di sini..." required></textarea>
                </div>
                
                <button type="submit">Kirim Pesan</button>
            </form>
            
            <footer>
                <p>&copy; 2025 @nichoherjunaa. All rights reserved.</p>
            </footer>
        </div>
</body>
</html>