<?php 
$page_title = "Dashboard Keuangan HMJTI";
include '../includes/header.php'; 
?>
    <!-- MENGHUBUNGKAN KE CSS UTAMA: Semua desain widget, tabel, font ada di sini -->
    <link rel="stylesheet" href="style_keuangan.css">
</head>
<body>
<div class="app-layout">
    <?php include '../includes/sidebar.php'; ?>
    <div class="main-content">
    <div class="container">
        <header>
            <h1>Dashboard Keuangan HMJTI</h1>
            <div class="nav-links">
                <a href="#">+ Pemasukan</a>
                <a href="#">- Pengeluaran</a>
            </div>
        </header>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-label">Total Saldo (Current)</div>
                <div class="stat-value">Rp 12.000.000</div>
            </div>
            <div class="stat-card income">
                <div class="stat-label">Total Pemasukan</div>
                <div class="stat-value" style="color: var(--income);">Rp 15.000.000</div>
            </div>
            <div class="stat-card expense">
                <div class="stat-label">Total Pengeluaran</div>
                <div class="stat-value" style="color: var(--expense);">Rp 3.000.000</div>
            </div>
        </div>

        <div class="tables-wrapper">
            <div class="table-section">
                <h2 class="section-title">Riwayat Pemasukan</h2>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Andi Suryo</strong></td>
                                <td><span class="badge badge-income">Sponsor</span></td>
                                <td style="font-weight: 700; color: var(--income);">+ Rp 5.000.000</td>
                            </tr>
                            <tr>
                                <td><strong>Budi Yanto</strong></td>
                                <td><span class="badge badge-income">Iuran Anggota</span></td>
                                <td style="font-weight: 700; color: var(--income);">+ Rp 10.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="table-section">
                <h2 class="section-title">Riwayat Pengeluaran</h2>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Nama Pengambil</th>
                                <th>Keterangan</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Citra Lestari</strong></td>
                                <td>Pembelian Konsumsi Rapat</td>
                                <td style="font-weight: 700; color: var(--expense);">- Rp 1.500.000</td>
                            </tr>
                            <tr>
                                <td><strong>Dewi Mawar</strong></td>
                                <td>Sewa Perlengkapan Event</td>
                                <td style="font-weight: 700; color: var(--expense);">- Rp 1.500.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include '../includes/footer.php'; ?>
