<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Lomba | LombaID</title>
    <style>
        :root {
            --bg: #f4f1ea;       /* Warna Creme sesuai Login/Admin */
            --accent: #2c3e50;    /* Abu-abu gelap profesional */
            --white: #ffffff;
            --text: #5a5a5a;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        
        body { background-color: var(--bg); color: var(--text); line-height: 1.6; }

        /* Navbar Sederhana & Bersih */
        .nav {
            display: flex; justify-content: space-between; align-items: center;
            padding: 1.2rem 8%; background: var(--white); 
            box-shadow: 0 2px 15px rgba(0,0,0,0.03);
            position: sticky; top: 0; z-index: 100;
        }

        .nav h2 { color: var(--accent); font-weight: 700; letter-spacing: -1px; }

        .nav ul { display: flex; gap: 2.5rem; list-style: none; align-items: center; }
        .nav a { text-decoration: none; color: var(--text); font-weight: 500; font-size: 15px; transition: 0.3s; }
        .nav a:hover { color: var(--accent); }

        .btn-login {
            background: var(--accent); color: white !important;
            padding: 0.6rem 1.8rem; border-radius: 10px; font-weight: 600 !important;
        }

        /* Container & Banner */
        .container { max-width: 1100px; margin: auto; padding: 3rem 20px; }
        
        .banner { 
            width: 100%; border-radius: 25px; margin-bottom: 4rem;
            box-shadow: 0 15px 35px rgba(0,0,0,0.08);
            border: 5px solid white;
        }

        .section-title {
            text-align: center; margin-bottom: 3rem; color: var(--accent);
        }

        /* Grid Kartu Modern */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2.5rem;
        }

        .card {
            background: var(--white); border-radius: 20px; overflow: hidden;
            transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); 
            border: 1px solid #e0ddd5;
            display: flex; flex-direction: column;
        }

        .card:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.06); }
        
        .card img { width: 100%; height: 200px; object-fit: cover; }

        .card-body { padding: 1.8rem; text-align: center; flex-grow: 1; }
        .card-body h3 { color: var(--accent); font-size: 20px; margin-bottom: 0.5rem; }
        
        .btn-view {
            display: block; background: #f8f9fa; color: var(--accent);
            text-decoration: none; padding: 1rem; margin: 0 1.8rem 1.8rem;
            border-radius: 12px; font-weight: 700; font-size: 0.85rem; 
            text-align: center; transition: 0.3s;
            border: 1px solid #eee;
        }

        .btn-view:hover { background: var(--accent); color: white; border-color: var(--accent); }
    </style>
</head>
<body>

<nav class="nav">
    <h2>🏆 Daftar Lomba</h2>
    <ul>
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Kategori</a></li>
        <li><a href="login.php" class="btn-login">Login Admin</a></li>
    </ul>
</nav>

<main class="container">
    <img src="gambar/BANNERYT.png" alt="Banner" class="banner">

    <h2 class="section-title">Pilih Cabang Lomba</h2>

    <div class="grid">
        <?php
        $lomba = [
            ['Web Development', 'web dev.jpeg', 'web development.php'],
            ['Mobile App', 'mobile app.jpeg', 'mobile app.php'],
            ['Games Design', 'games.jpeg', 'games.php'],
            ['Server Admin', 'serveradminis.jpeg', 'administrasi server.php'],
            ['Cyber Security', 'CYBER .jpeg', 'cyber security.php']
        ];

        foreach ($lomba as $item) {
            echo "
            <div class='card'>
                <img src='gambar/{$item[1]}' alt='{$item[0]}'>
                <div class='card-body'>
                    <h3>{$item[0]}</h3>
                </div>
                <a href='deskripsi/{$item[2]}' class='btn-view'>LIHAT DETAIL</a>
            </div>";
        }
        ?>
    </div>
</main>

</body>
</html>