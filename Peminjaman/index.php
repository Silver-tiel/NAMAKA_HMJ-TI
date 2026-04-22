<?php 
$page_title = "Daftar Ruangan HMJTI";
include '../includes/header.php'; 
?>
    <!-- MENGHUBUNGKAN KE CSS UTAMA: Mengambil dari folder keuangan -->
    <link rel="stylesheet" href="../keuangan/style_keuangan.css">
</head>
<body>
<div class="app-layout">
    <?php include '../includes/sidebar.php'; ?>
    <div class="main-content">
        <div class="container">
            <header>
                <h1>Daftar Ruangan HMJTI</h1>
                <div class="nav-links">
                    <a href="#">+ Tambah Ruangan</a>
                </div>
            </header>

            <p style="text-align:left; color:#64748b; margin-bottom:1.5rem;">Berikut adalah daftar ruangan yang tersedia untuk dipinjam.</p>
            
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Ruangan</th>
                            <th>Kapasitas</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="color:#94a3b8;font-weight:700;">1</td>
                            <td><strong>Ruang Kelas A</strong></td>
                            <td>40 Orang</td>
                            <td>Gedung Utama Lt 1</td>
                            <td><span class="badge badge-income" style="background:#dcfce7; color:#166534;">Tersedia</span></td>
                            <td><a href="#" class="badge" style="background-color:#007bff; color:white; text-decoration:none;">Pinjam</a></td>
                        </tr>
                        <tr>
                            <td style="color:#94a3b8;font-weight:700;">2</td>
                            <td><strong>Lab Komputer Dasar</strong></td>
                            <td>30 Orang</td>
                            <td>Gedung B Lt 2</td>
                            <td><span class="badge badge-expense" style="background:#fef08a; color:#854d0e;">Dipakai</span></td>
                            <td><a href="#" class="badge" style="background-color:#e2e8f0; color:#64748b; text-decoration:none; cursor:not-allowed;">Pinjam</a></td>
                        </tr>
                        <tr>
                            <td style="color:#94a3b8;font-weight:700;">3</td>
                            <td><strong>Ruang Rapat BEM</strong></td>
                            <td>15 Orang</td>
                            <td>Gedung Student Center</td>
                            <td><span class="badge badge-income" style="background:#dcfce7; color:#166534;">Tersedia</span></td>
                            <td><a href="#" class="badge" style="background-color:#007bff; color:white; text-decoration:none;">Pinjam</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
<?php include '../includes/footer.php'; ?>
