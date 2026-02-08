<?php
// Koneksi ke database
include 'koneksi.php'; 

$pesan = "";

if (isset($_POST['daftar'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $kategori = $_POST['kategori_lomba'];

    // 1. CEK APAKAH NIS SUDAH TERDAFTAR
    $cek_nis = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nis = '$nis'");
    
    if (mysqli_num_rows($cek_nis) > 0) {
        // Jika NIS ditemukan lebih dari 0 baris
        $pesan = "<div class='alert error'>⚠️ Maaf, NIS <b>$nis</b> sudah terdaftar! Gunakan NIS lain.</div>";
    } else {
        // 2. JIKA NIS BELUM ADA, LANJUT SIMPAN
        $query = "INSERT INTO peserta (nis, nama, email, no_telp, kategori_lomba) VALUES ('$nis', '$nama', '$email', '$no_telp', '$kategori')";
        
        if (mysqli_query($koneksi, $query)) {
            $pesan = "<div class='alert success'>✅ Pendaftaran Berhasil! Terima kasih sudah mendaftar.</div>";
        } else {
            $pesan = "<div class='alert error'>Gagal mendaftar: " . mysqli_error($koneksi) . "</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Lomba | LombaID</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f4f1ea;       /* Creme */
            --accent: #2c3e50;    /* Dark Blue */
            --white: #ffffff;
            --text: #4a4a4a;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }

        body { 
            background-color: var(--bg); 
            color: var(--text); 
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .form-container {
            max-width: 550px;
            width: 100%;
            background: var(--white);
            border-radius: 24px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.04);
            padding: 45px;
            border: 1px solid #e0ddd5;
        }

        .form-header { text-align: center; margin-bottom: 35px; }
        .form-header h1 { 
            font-family: 'Inter', sans-serif;
            color: var(--accent); 
            font-size: 28px; 
            font-weight: 700;
        }
        .form-header p { color: #999; margin-top: 5px; font-size: 14px; }

        /* Input Styling */
        .input-group { margin-bottom: 20px; }
        .input-group label { 
            display: block; 
            margin-bottom: 8px; 
            font-weight: 600; 
            font-size: 14px; 
            color: var(--accent);
        }
        .input-group input, .input-group select {
            width: 100%;
            padding: 14px 18px;
            border-radius: 12px;
            border: 1px solid #ddd;
            background: #fdfdfb;
            font-size: 15px;
            transition: 0.3s;
        }
        .input-group input:focus, .input-group select:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 4px rgba(44, 62, 80, 0.05);
        }

        /* Button */
        .btn-submit {
            width: 100%;
            padding: 16px;
            background: var(--accent);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }
        .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(0,0,0,0.1); }

        .btn-back {
            display: block;
            text-align: center;
            margin-top: 25px;
            text-decoration: none;
            color: #888;
            font-size: 14px;
            transition: 0.3s;
        }
        .btn-back:hover { color: var(--accent); }

        /* Alert */
        .alert { padding: 15px; border-radius: 10px; margin-bottom: 20px; text-align: center; font-size: 14px; font-weight: 600; }
        .success { background: #dcfce7; color: #15803d; }
        .error { background: #fee2e2; color: #b91c1c; }
    </style>
</head>
<body>

<div class="form-container">
    <div class="form-header">
        <h1>Form Pendaftaran</h1>
        <p>Silakan lengkapi data diri Anda dengan benar</p>
    </div>

    <?php echo $pesan; ?>

    <form action="" method="POST">
        <div class="input-group">
            <label>NIS (Nomor Induk Siswa)</label>
            <input type="text" name="nis" placeholder="Contoh: 12345" required>
        </div>

        <div class="input-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan nama Anda" required>
        </div>

        <div class="input-group">
            <label>Email Aktif</label>
            <input type="email" name="email" placeholder="example@mail.com" required>
        </div>

        <div class="input-group">
            <label>Nomor Telepon/WA</label>
            <input type="text" name="no_telp" placeholder="08xxxxxxxxxx" required>
        </div>

        <div class="input-group">
            <label>Pilih Kategori Lomba</label>
            <select name="kategori_lomba" required>
                <option value="">-- Pilih Lomba --</option>
                <option value="Web Development">Web Development</option>
                <option value="Mobile App">Mobile App</option>
                <option value="Game Design">Game Design</option>
                <option value="Server Admin">Server Admin</option>
                <option value="Cyber Security">Cyber Security</option>
            </select>
        </div>

        <button type="submit" name="daftar" class="btn-submit">DAFTAR SEKARANG</button>
    </form>

    <a href="dashboard.php" class="btn-back">← Kembali ke Beranda</a>
</div>

</body>
</html>