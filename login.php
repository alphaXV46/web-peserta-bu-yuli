<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | LombaID</title>
    <style>
        :root {
            --bg-color: #f4f1ea; /* Warna Creme Lembut */
            --accent: #2c3e50;    /* Biru Gelap Profesional */
            --text: #5a5a5a;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }

        body {
            background-color: var(--bg-color);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--text);
        }

        .login-card {
            background: #ffffff;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            border: 1px solid #e0ddd5;
        }

        .login-card h2 {
            text-align: center;
            margin-bottom: 10px;
            color: var(--accent);
            font-size: 24px;
        }

        .login-card p {
            text-align: center;
            font-size: 14px;
            margin-bottom: 30px;
            color: #999;
        }

        .input-group { margin-bottom: 20px; }

        input {
            width: 100%;
            padding: 12px 15px;
            border: 1.5px solid #eee;
            border-radius: 10px;
            background: #fafafa;
            outline: none;
            transition: 0.3s;
        }

        input:focus { border-color: var(--accent); background: #fff; }

        button {
            width: 100%;
            padding: 12px;
            background: var(--accent);
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        button:hover { opacity: 0.9; transform: translateY(-2px); }

        .error-msg {
            background: #fee2e2;
            color: #b91c1c;
            padding: 10px;
            border-radius: 8px;
            font-size: 13px;
            text-align: center;
            margin-bottom: 20px;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: var(--text);
            font-size: 13px;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h2>Login Admin</h2>
    <p>Silakan masuk untuk mengelola lomba</p>

    <?php if (isset($_GET['error'])): ?>
        <div class="error-msg">Username atau Password salah!</div>
    <?php endif; ?>

    <?php 
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "logout"){
        echo "<div style='color: green; margin-bottom: 10px;'>Anda telah berhasil logout.</div>";
    } else if($_GET['pesan'] == "belum_login"){
        echo "<div style='color: red; margin-bottom: 10px;'>Anda harus login untuk mengakses halaman admin!</div>";
    }
}
?>

    <form action="proses_login.php" method="POST">
        <div class="input-group">
            <input type="text" name="username" placeholder="Username Admin" required>
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit">Masuk Sekarang</button>
    </form>

    <a href="dashboard.php" class="back-link">← Kembali ke Dashboard</a>
</div>

</body>
</html>