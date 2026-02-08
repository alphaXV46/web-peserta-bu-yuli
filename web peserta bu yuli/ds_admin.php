<?php
session_start();
include 'koneksi.php';

// Cek apakah sudah login sebagai admin
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | LombaID</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f4f1ea;
            --accent: #2c3e50;
            --white: #ffffff;
            --text: #4a4a4a;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }

        body { 
            background-color: var(--bg); 
            color: var(--text); 
            padding: 40px;
        }

        .admin-container {
            max-width: 1100px;
            margin: auto;
        }

        .header-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .header-flex h2 { color: var(--accent); font-weight: 700; }

        .btn-logout {
            padding: 10px 20px;
            background: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
        }

        /* Table Styling */
        .table-card {
            background: var(--white);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            border: 1px solid #e0ddd5;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th {
            text-align: left;
            padding: 15px;
            background: #fdfdfb;
            color: var(--accent);
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 2px solid #f4f1ea;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #f4f1ea;
            font-size: 14px;
        }

        tr:last-child td { border-bottom: none; }

        /* PERBAIKAN: Badge Kategori agar tidak nyaru */
        .badge {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            color: #ffffff !important; /* Teks dipaksa putih agar kontras */
        }

        /* Warna spesifik tiap kategori */
        .bg-web { background-color: #3498db; }    /* Biru */
        .bg-mobile { background-color: #f39c12; } /* Oranye */
        .bg-games { background-color: #e74c3c; }  /* Merah */
        .bg-server { background-color: #27ae60; } /* Hijau */
        .bg-cyber { background-color: #8e44ad; }  /* Ungu */
        .bg-default { background-color: #2c3e50; }

    </style>
</head>
<body>
<?php 
if(isset($_GET['pesan']) && $_GET['pesan'] == "hapus_berhasil"){
    echo "<div style='background: #fee2e2; color: #b91c1c; padding: 10px; border-radius: 8px; margin-bottom: 20px; font-size: 14px; text-align: center;'>Data peserta berhasil dihapus!</div>";
}
?>
<div class="admin-container">
    <div class="header-flex">
        <h2>Data Pendaftar Lomba</h2>
        <a href="logout.php" class="btn-logout">Logout</a>
    </div>

    <div class="table-card">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>No. Telp</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                // Ambil data sesuai tabel 'peserta' di image_d01969.jpg
                $data = mysqli_query($koneksi, "SELECT * FROM peserta");
                while($d = mysqli_fetch_array($data)){
                    
                    // Logika warna badge berdasarkan kategori
                    $kat = $d['kategori_lomba'];
                    $warna = "bg-default";
                    
                    if(strpos($kat, 'Web') !== false) $warna = "bg-web";
                    elseif(strpos($kat, 'Mobile') !== false) $warna = "bg-mobile";
                    elseif(strpos($kat, 'Game') !== false) $warna = "bg-games";
                    elseif(strpos($kat, 'Server') !== false) $warna = "bg-server";
                    elseif(strpos($kat, 'Cyber') !== false) $warna = "bg-cyber";
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><strong><?php echo $d['nis']; ?></strong></td>
                    <td><?php echo strtoupper($d['nama']); ?></td>
                    <td><?php echo $d['email']; ?></td>
                    <td><?php echo $d['no_telp']; ?></td>
                    <td>
                        <span class="badge <?php echo $warna; ?>">
                            <?php echo $kat; ?>
                        </span>
                    </td>
                    <td>
                        <a href="hapus.php?nis=<?php echo $d['nis']; ?>" 
                        onclick="return confirm('Yakin ingin menghapus data ini?')" 
                        style="color: #e74c3c; font-weight: bold; text-decoration: none; font-size: 13px;">
                        Hapus
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>