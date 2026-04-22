<?php
$page_title = "Daftar Surat Masuk — Penyuratan HMJTI";
include '../includes/header.php';
?>
<meta name="description" content="Daftar seluruh surat masuk HMJTI beserta status pemrosesannya.">
<link rel="stylesheet" href="style_penyuratan.css">
</head>

<body>
    <div class="app-layout">
        <?php include '../includes/sidebar.php'; ?>
        <div class="main-content">
            <div class="container">
                <header>
                    <h1>📋 Daftar Surat Masuk</h1>
                    <div class="nav-links">
                        <a href="#" class="active">Daftar Surat</a>
                        <a href="#">+ Tambah Surat</a>
                    </div>
                </header>

                <div class="stats-grid">
                    <div class="stat-card total">
                        <div class="stat-label">Total Surat</div>
                        <div class="stat-value">3</div>
                    </div>
                    <div class="stat-card belum">
                        <div class="stat-label">Belum Diproses</div>
                        <div class="stat-value">1</div>
                    </div>
                    <div class="stat-card proses">
                        <div class="stat-label">Masih Diproses</div>
                        <div class="stat-value">1</div>
                    </div>
                    <div class="stat-card selesai">
                        <div class="stat-label">Telah Diproses</div>
                        <div class="stat-value">1</div>
                    </div>
                </div>

                <div class="filter-bar">
                    <span class="filter-label">Filter:</span>
                    <a href="#" class="filter-btn active">Semua (3)</a>
                    <a href="#" class="filter-btn f-belum">Belum Diproses (1)</a>
                    <a href="#" class="filter-btn f-proses">Masih Diproses (1)</a>
                    <a href="#" class="filter-btn f-selesai">Telah Diproses (1)</a>
                </div>

                <h2 class="section-title">Surat Masuk</h2>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nomor Surat</th>
                                <th>Tanggal</th>
                                <th>Pengirim</th>
                                <th>Perihal</th>
                                <th>File</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="color:#94a3b8;font-weight:600;">1</td>
                                <td><strong>001/HMJTI/X/2026</strong></td>
                                <td>10 Okt 2026</td>
                                <td>BEM Universitas</td>
                                <td style="max-width:200px;">
                                    <span title="Undangan Rapat Koordinasi"
                                        style="display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">
                                        Undangan Rapat Koordinasi
                                    </span>
                                </td>
                                <td><span class="badge-pdf">📄 PDF</span></td>
                                <td><span class="badge badge-belum">Belum Diproses</span></td>
                                <td>
                                    <div class="action-btns">
                                        <a href="#" class="btn-aksi btn-baca">🔍 Baca</a>
                                        <a href="#" class="btn-aksi btn-hapus">🗑️</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="color:#94a3b8;font-weight:600;">2</td>
                                <td><strong>002/HMJTI/X/2026</strong></td>
                                <td>12 Okt 2026</td>
                                <td>Prodi Informatika</td>
                                <td style="max-width:200px;">
                                    <span title="Permohonan Peminjaman Alat"
                                        style="display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">
                                        Permohonan Peminjaman Alat
                                    </span>
                                </td>
                                <td><span class="badge-word">📝 Word</span></td>
                                <td><span class="badge badge-proses">Masih Diproses</span></td>
                                <td>
                                    <div class="action-btns">
                                        <a href="#" class="btn-aksi btn-baca">🔍 Baca</a>
                                        <a href="#" class="btn-aksi btn-download">⬇️ Download</a>
                                        <a href="#" class="btn-aksi btn-selesai">✅ Selesaikan</a>
                                        <a href="#" class="btn-aksi btn-hapus">🗑️</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="color:#94a3b8;font-weight:600;">3</td>
                                <td><strong>003/HMJTI/X/2026</strong></td>
                                <td>15 Okt 2026</td>
                                <td>Prodi Sistem Informasi</td>
                                <td style="max-width:200px;">
                                    <span title="Informasi Jadwal Ujian"
                                        style="display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">
                                        Informasi Jadwal Ujian
                                    </span>
                                </td>
                                <td><span class="badge-pdf">📄 PDF</span></td>
                                <td><span class="badge badge-selesai">Telah Diproses</span></td>
                                <td>
                                    <div class="action-btns">
                                        <a href="#" class="btn-aksi btn-baca">🔍 Baca</a>
                                        <a href="#" class="btn-aksi btn-download"
                                            title="Download surat bertanda tangan">⬇️ Surat TTD</a>
                                        <a href="#" class="btn-aksi btn-hapus">🗑️</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <?php include '../includes/footer.php'; ?>