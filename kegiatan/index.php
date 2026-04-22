<?php
$page_title = "Daftar Kegiatan — Kegiatan HMJTI";
include '../includes/header.php';
?>
<meta name="description" content="Daftar seluruh jadwal kegiatan HMJTI beserta status dan tipenya.">
<link rel="stylesheet" href="style_kegiatan.css">
</head>

<body>
    <div class="app-layout">
        <?php include '../includes/sidebar.php'; ?>
        <div class="main-content">
            <div class="container">

                <header>
                    <h1>📅 Daftar Kegiatan</h1>
                    <nav class="nav-links">
                        <a href="#" class="active" id="nav-list">Daftar Kegiatan</a>
                        <a href="#" id="nav-arsip">📷 Arsip Foto</a>
                        <a href="#" id="nav-pengingat">⏰ Pengingat</a>
                    </nav>
                </header>

                <div class="stats-grid">
                    <div class="stat-card total">
                        <div class="stat-icon">📋</div>
                        <div class="stat-label">Total Kegiatan</div>
                        <div class="stat-value">2</div>
                    </div>
                    <div class="stat-card belummulai">
                        <div class="stat-icon">⬜</div>
                        <div class="stat-label">Belum Mulai</div>
                        <div class="stat-value">1</div>
                    </div>
                    <div class="stat-card berjalan">
                        <div class="stat-icon">🟡</div>
                        <div class="stat-label">Sedang Berjalan</div>
                        <div class="stat-value">0</div>
                    </div>
                    <div class="stat-card selesai">
                        <div class="stat-icon">✅</div>
                        <div class="stat-label">Selesai</div>
                        <div class="stat-value">1</div>
                    </div>
                    <div class="stat-card dibatalkan">
                        <div class="stat-icon">❌</div>
                        <div class="stat-label">Dibatalkan</div>
                        <div class="stat-value">0</div>
                    </div>
                </div>

                <!-- Filter Bar -->
                <div class="filter-bar">
                    <span class="filter-label">Filter:</span>
                    <a href="#" class="filter-btn f-semua active">Semua (2)</a>
                    <a href="#" class="filter-btn f-belummulai">Belum Mulai (1)</a>
                    <a href="#" class="filter-btn f-berjalan">Sedang Berjalan (0)</a>
                    <a href="#" class="filter-btn f-selesai">Selesai (1)</a>
                    <a href="#" class="filter-btn f-dibatalkan">Dibatalkan (0)</a>
                </div>

                <h2 class="section-title" id="belum-terlaksana">🗓️ Kegiatan Belum Terlaksana</h2>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Kegiatan</th>
                                <th>Tipe</th>
                                <th>Tanggal</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="color:#94a3b8;font-weight:700;">1</td>
                                <td><strong>Rapat Persiapan Makrab</strong></td>
                                <td><span class="tipe-badge tipe-rapat">🗣️ Rapat</span></td>
                                <td style="white-space:nowrap;">
                                    20 Okt 2026
                                    <br><small style="color:#6366f1;font-weight:600;">⏳ 5 hari lagi</small>
                                </td>
                                <td style="max-width:220px;">
                                    <span title="Rapat persiapan panitia"
                                        style="display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">
                                        Rapat persiapan panitia
                                    </span>
                                </td>
                                <td><span class="badge badge-belummulai">⬜ Belum Mulai</span></td>
                                <td>
                                    <div class="action-btns">
                                        <a href="#" class="btn-aksi btn-lihat">🔍 Detail</a>
                                        <a href="#" class="btn-aksi btn-arsip">⏰</a>
                                        <a href="#" class="btn-aksi btn-hapus">🗑️</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="section-title" id="sudah-terlaksana">✅ Kegiatan Sudah Terlaksana</h2>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Kegiatan</th>
                                <th>Tipe</th>
                                <th>Tanggal</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="color:#94a3b8;font-weight:700;">1</td>
                                <td><strong>Lomba Coding Bersama</strong></td>
                                <td><span class="tipe-badge tipe-lomba">🏆 Lomba</span></td>
                                <td style="white-space:nowrap;">
                                    10 Okt 2026
                                    <br><small style="color:#94a3b8;">5 hari lalu</small>
                                </td>
                                <td style="max-width:220px;">
                                    <span title="Lomba coding se-universitas"
                                        style="display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">
                                        Lomba coding se-universitas
                                    </span>
                                </td>
                                <td><span class="badge badge-selesai">✅ Selesai</span></td>
                                <td><span style="color:#cbd5e1;font-size:1.2rem;">📷</span></td>
                                <td>
                                    <div class="action-btns">
                                        <a href="#" class="btn-aksi btn-lihat">📷 Arsip</a>
                                        <a href="#" class="btn-aksi btn-hapus">🗑️</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <?php include '../includes/footer.php'; ?>