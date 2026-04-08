<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SIAKAD MINI - Modern Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --secondary-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        --danger-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        --glass-bg: rgba(255, 255, 255, 0.9);
    }

    body {
        background: radial-gradient(circle at top right, #e0eafc, #cfdef3);
        font-family: 'Plus Jakarta Sans', sans-serif;
        color: #2d3436;
        min-height: 100vh;
    }

    /* HEADER STYLE */
    .header {
        background: var(--primary-gradient);
        color: white;
        padding: 40px 20px;
        border-radius: 24px;
        text-align: center;
        margin-bottom: 30px;
        box-shadow: 0 15px 35px rgba(118, 75, 162, 0.2);
        position: relative;
        overflow: hidden;
    }

    .header::after {
        content: "";
        position: absolute;
        top: -50%;
        right: -20%;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
    }

    .header img {
        filter: drop-shadow(0 5px 15px rgba(0,0,0,0.2));
        margin-bottom: 15px;
    }

    /* CARD CUSTOM */
    .card-custom {
        background: var(--glass-bg);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 20px;
        padding: 25px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        margin-bottom: 25px;
        transition: all 0.3s ease;
    }

    .card-custom:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    }

    /* BUTTONS */
    .btn-main {
        background: var(--secondary-gradient);
        border: none;
        border-radius: 12px;
        color: #1b4d3e;
        font-weight: 700;
        padding: 12px;
        letter-spacing: 0.5px;
        transition: 0.3s;
    }

    .btn-main:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 20px rgba(56, 249, 215, 0.4);
        color: #000;
    }

    .btn-soft {
        background: white;
        border-radius: 12px;
        border: 1px solid #e0e6ed;
        color: #4b6cb7;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-soft:hover {
        background: #f8fbff;
        border-color: #4b6cb7;
    }

    .btn-danger-custom {
        background: var(--danger-gradient);
        border: none;
        color: white;
        font-weight: 600;
        border-radius: 12px;
    }

    /* FORM CONTROL */
    .form-control {
        border-radius: 10px;
        border: 2px solid #eee;
        padding: 12px;
        transition: 0.3s;
    }

    .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
    }

    /* TABLE */
    .table-container {
        border-radius: 15px;
        overflow: hidden;
        border: 1px solid #f0f0f0;
    }

    .table thead {
        background: #f8fafc;
    }

    .table th {
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #64748b;
        padding: 15px;
    }

    .table td {
        padding: 15px;
        vertical-align: middle;
    }

    /* ANIMATION */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .animate-up {
        animation: fadeIn 0.6s ease forwards;
    }
</style>
</head>
<body class="container py-5">

<div class="header animate-up">
    <img src="logo.png" width="80" alt="Logo">
    <h2 class="fw-bold m-0">SIAKAD <span style="font-weight: 300;">MINI</span></h2>
    <p class="opacity-75 mb-0">POLITEKNIK NEGERI JEMBER </p>
</div>

<div class="row">
    <div class="col-lg-4 animate-up" style="animation-delay: 0.1s;">
        <div class="card-custom">
            <h6 class="fw-bold mb-3 text-muted">NAVIGASI UTAMA</h6>
            <div class="row g-2">
                <div class="col-12">
                    <button class="btn btn-main w-100 shadow-sm">👨‍🎓 Manajemen Mahasiswa</button>
                </div>
                <div class="col-6">
                    <button class="btn btn-soft w-100 py-2">📚 Matkul</button>
                </div>
                <div class="col-6">
                    <button class="btn btn-soft w-100 py-2">📝 Nilai</button>
                </div>
                <div class="col-12 mt-3">
                    <a href="cetak.php" class="btn btn-danger-custom w-100 py-2 shadow-sm">🖨 Cetak Laporan</a>
                </div>
            </div>
        </div>

        <div class="card-custom">
            <h5 class="fw-bold mb-4">📥 Input Data</h5>
            <form action="proses.php" method="post">
                <div class="mb-3">
                    <label class="small fw-bold text-muted">NAMA LENGKAP</label>
                    <input type="text" name="nama" class="form-control" placeholder="Contoh: Andi Wijaya" required>
                </div>
                <div class="mb-3">
                    <label class="small fw-bold text-muted">NIM</label>
                    <input type="text" name="nim" class="form-control" placeholder="2024001" required>
                </div>
                <div class="mb-3">
                    <label class="small fw-bold text-muted">MATA KULIAH</label>
                    <input type="text" name="matkul" class="form-control" placeholder="Pemrograman Web" required>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="small fw-bold text-muted">SKS</label>
                        <input type="number" name="sks" class="form-control" placeholder="3" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="small fw-bold text-muted">NILAI</label>
                        <input type="number" name="nilai" class="form-control" placeholder="100" required>
                    </div>
                </div>
                <button class="btn btn-main w-100 mt-2 py-3 shadow">💾 SIMPAN DATA</button>
            </form>
        </div>
    </div>

    <div class="col-lg-8 animate-up" style="animation-delay: 0.2s;">
        <div class="card-custom">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold m-0">📊 Daftar Mahasiswa Aktif</h5>
                <span class="badge bg-primary rounded-pill px-3">
                    <?php echo isset($_SESSION['data']) ? count($_SESSION['data']) : 0; ?> Data Terdeteksi
                </span>
            </div>

            <div class="table-responsive table-container">
                <table class="table table-hover m-0">
                    <thead>
                        <tr>
                            <th>Mahasiswa</th>
                            <th>NIM</th>
                            <th>Mata Kuliah</th>
                            <th class="text-center">SKS</th>
                            <th class="text-center">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($_SESSION['data']) && !empty($_SESSION['data'])){
                            foreach($_SESSION['data'] as $d){
                                echo "<tr>
                                    <td><span class='fw-bold'>{$d['nama']}</span></td>
                                    <td><code class='text-primary'>{$d['nim']}</code></td>
                                    <td>{$d['matkul']}</td>
                                    <td class='text-center'><span class='badge bg-light text-dark'>{$d['sks']}</span></td>
                                    <td class='text-center'><span class='fw-bold text-success'>{$d['nilai']}</span></td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5' class='text-center py-5 text-muted small'>Belum ada data yang tersimpan.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
