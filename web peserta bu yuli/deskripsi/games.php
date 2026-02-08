<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deskripsi Lomba | Game Design</title>
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

        .btn-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 70px;
        }

        .btn-register {
            display: inline-block;
            padding: 20px 35px;
            background: #fc0000;
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

        .btn-back {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            color: #524e4e;
            font-size: 14px;
            font-weight: 500;
            transition: 0.3s;
        }

        .btn-back:hover {
            color: var(--accent);
            transform: translateX(-5px);
        }

        .btn-back span {
            margin-right: 8px;
            font-size: 18px;
        }

        @media (max-width: 768px) {
            .content { grid-template-columns: 1fr; padding: 30px; }
            .header { padding: 30px; }
            .header h1 { font-size: 32px; }
            .btn-group { flex-direction: column-reverse; gap: 25px; align-items: flex-start; }
            .btn-register { width: 100%; text-align: center; }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Game Design</h1>
        <p>CREATE • PLAY • COMPETE</p>
    </div>

    <div class="content">
        <div class="image-box">
            <img src="../gambar/games.jpeg" alt="Game Design Competition">
        </div>

        <div class="text-box">
            <h2>📌 Deskripsi Lomba</h2>
            <p>
                Lomba Game Design menantang kreativitasmu untuk merancang konsep permainan yang unik, mekanik yang solid, dan pengalaman bermain yang tak terlupakan bagi pemain.
            </p>

            <h2>🎯 Tujuan</h2>
            <ul>
                <li>Mengasah kemampuan menyusun Game Design Document (GDD).</li>
                <li>Mendorong inovasi dalam mekanik dan sistem permainan.</li>
                <li>Menerapkan prinsip user experience (UX) dalam dunia game.</li>
            </ul>

            <h2>🛠️ Cakupan Proyek</h2>
            <ul>
                <li>Konsep Cerita & Karakter.</li>
                <li>Level Design & Balancing.</li>
                <li>Prototype Gameplay (Opsional menggunakan Engine).</li>
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