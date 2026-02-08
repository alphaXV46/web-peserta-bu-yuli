<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deskripsi Lomba | Games Development</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f4f1ea;       /* Creme */
            --accent: #2c3e50;    /* Dark Blue */
            --white: #ffffff;
            --text: #4a4a4a;
            --light-grey: #f9f9f7;
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

        .container {
            max-width: 900px;
            width: 100%;
            background: var(--white);
            border-radius: 24px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.04);
            overflow: hidden;
            border: 1px solid #e0ddd5;
        }

        /* Header Elegan & Besar */
        .header {
            background: #2c3e50; 
            padding: 45px 20px; 
            text-align: center;
            color: #ffffff;
        }

        .header h1 { 
            font-family: 'Inter', 'Segoe UI', sans-serif;
            font-size: 42px; 
            font-weight: 800; 
            text-transform: none; 
            letter-spacing: -1px; 
            margin-bottom: 5px;
        }

        .header p { 
            font-size: 14px; 
            font-weight: 400; 
            color: #bdc3c7; 
            letter-spacing: 5px; 
            text-transform: uppercase;
        }

        /* Layout Content */
        .content {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 40px;
            padding: 40px;
        }

        .image-box img {
            width: 100%;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.06);
            object-fit: cover;
        }

        /* Text Section */
        .text-box h2 {
            color: var(--accent);
            font-size: 18px;
            margin: 25px 0 10px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .text-box h2:first-child { margin-top: 0; }

        .text-box p, .text-box li {
            font-size: 15px;
            line-height: 1.6;
            color: var(--text);
        }

        .text-box ul {
            margin-left: 20px;
            margin-top: 8px;
        }

        .text-box li { margin-bottom: 5px; }

        /* Tombol Group */
        .btn-group {
            display: flex;
            justify-content: space-between; /* Menjauhkan posisi tombol */
            align-items: center;
            margin-top: 70px;
        }

        .btn-register {
            display: inline-block;
            padding: 20px 35px; /* Padding besar sesuai keinginan */
            background: #fc0000; /* Warna Merah Tegas */
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 14px;
            transition: 0.3s;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(252, 0, 0, 0.3);
        }

        .btn-register:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(252, 0, 0, 0.4);
            background: #d40000;
        }

        /* Style Kembali dalam bentuk Link Tekstual */
.btn-back {
    display: inline-flex;
    align-items: center;
    text-decoration: none;
    color: #524e4e; /* Warna abu-abu agar tidak mencolok */
    font-size: 14px;
    font-weight: 500;
    transition: 0.3s;
    background: none;
    border: none;
    padding: 0;
}

.btn-back:hover {
    color: var(--accent); /* Berubah jadi biru gelap saat di-hover */
    transform: translateX(-5px); /* Geser sedikit ke kiri */
}

.btn-back span {
    margin-right: 8px;
    font-size: 18px;
}

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .content { grid-template-columns: 1fr; padding: 30px; }
            .header { padding: 30px; }
            .header h1 { font-size: 32px; }
            .btn-group { flex-direction: column; gap: 20px; }
            .btn-register { width: 100%; text-align: center; }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Lomba Games</h1>
        <p>CREATE • PLAY • COMPETE</p>
    </div>

    <div class="content">
        <div class="image-box">
            <img src="../gambar/games.jpeg" alt="Games Development">
        </div>

        <div class="text-box">
            <h2>📌 Deskripsi Lomba</h2>
            <p>
                Uji kemampuanmu dalam merancang gameplay yang adiktif dan visual yang memukau. Ciptakan pengalaman bermain yang tak terlupakan.
            </p>

            <h2>🎯 Tujuan</h2>
            <ul>
                <li>Mengasah logika pemrograman game.</li>
                <li>Mendorong kreativitas dalam story-telling.</li>
                <li>Implementasi mekanik game yang inovatif.</li>
            </ul>

            <h2>🛠️ Teknologi</h2>
            <ul>
                <li>Unity, Unreal Engine, atau Godot.</li>
                <li>C#, C++, atau Python.</li>
                <li>Asset original atau free license.</li>
            </ul>

            <div class="btn-group">
                <a href="../daftar.php" class="btn-register">DAFTAR SEKARANG</a>
                <a href="../dashboard.php" class="btn-back">
                <span>←</span> Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</div>

</body>
</html>