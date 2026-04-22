<?php
$page_title = "Dashboard Anggota HMJTI";
include '../includes/header.php';
?>
<!-- MENGHUBUNGKAN KE CSS UTAMA: Mengambil dari folder keuangan -->
<link rel="stylesheet" href="../keuangan/style_keuangan.css">
<style>
    .badge-jabatan {
        background: rgba(99, 102, 241, 0.1);
        color: var(--primary);
        padding: 0.35rem 0.65rem;
        border-radius: 6px;
        font-size: 0.85rem;
        font-weight: 600;
    }

    /* Custom Premium Select Dropdown UI */
    .premium-select-wrapper {
        position: relative;
        min-width: 140px;
        font-family: inherit;
        user-select: none;
    }

    .premium-select-trigger {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 36px;
        box-sizing: border-box;
        padding: 0 0.75rem;
        background: #ffffff;
        border: 2px solid #e2e8f0;
        border-radius: 6px;
        cursor: pointer;
        font-size: 0.85rem;
        line-height: 1;
        font-weight: 500;
        color: #1e293b;
        transition: all 0.3s ease;
        box-shadow: 0 1px 2px rgba(45, 158, 245, 0.05);
    }

    .premium-select-wrapper.open .premium-select-trigger {
        border-color: var(--primary, #6366f1);
        box-shadow: 0 0 0 4px rgba(45, 158, 245, 0.15);
    }

    .premium-select-icon {
        transition: transform 0.3s ease;
        color: #64748b;
        display: flex;
    }

    .premium-select-wrapper.open .premium-select-icon {
        transform: rotate(180deg);
        color: var(--primary, #6366f1);
    }

    .premium-select-options {
        position: absolute;
        top: calc(100% + 0.5rem);
        left: 0;
        right: 0;
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 10px 25px -5px rgba(45, 158, 245, 0.05), 0 8px 10px -6px rgba(45, 158, 245, 0.05);
        border: 1px solid #e2e8f0;
        z-index: 50;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.25s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        overflow: hidden;
    }

    .premium-select-wrapper.open .premium-select-options {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .premium-select-option {
        padding: 0.5rem 0.75rem;
        cursor: pointer;
        font-size: 0.85rem;
        color: #334155;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        position: relative;
    }

    .premium-select-option:not(:last-child) {
        border-bottom: 1px solid #f1f5f9;
    }

    .premium-select-option:hover {
        background: #f8fafc;
        color: var(--primary, #6366f1);
        padding-left: 1rem;
    }

    .premium-select-option.selected {
        background: rgba(49, 49, 240, 0.08);
        color: var(--primary, #6366f1);
        font-weight: 600;
    }

    .premium-select-option.selected::after {
        content: '';
        position: absolute;
        right: 0.75rem;
        width: 4px;
        height: 10px;
        border: solid var(--primary, #6366f1);
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }

    /* Terapkan Button */
    .btn-terapkan {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        height: 36px;
        box-sizing: border-box;
        background: var(--primary, #6366f1);
        color: white;
        border: none;
        padding: 0 1.25rem;
        border-radius: 6px;
        cursor: pointer;
        font-weight: 600;
        font-family: inherit;
        font-size: 0.85rem;
        line-height: 1;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(33, 85, 255, 0.05);
        white-space: nowrap;
    }

    .btn-terapkan:hover {
        background: #4f46e5;
        box-shadow: 0 4px 6px rgba(47, 51, 255, 0.3);
        transform: translateY(-1px);
    }

    .btn-terapkan:active {
        transform: translateY(1px);
    }
</style>
</head>

<body>
    <div class="app-layout">
        <?php include '../includes/sidebar.php'; ?>
        <div class="main-content">
            <div class="container">
                <header>
                    <h1>Dashboard Anggota HMJTI</h1>
                    <div class="nav-links">
                        <a href="#">+ Tambah Jabatan</a>
                        <a href="#">+ Tambah Anggota</a>
                    </div>
                </header>

                <div
                    style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; flex-wrap: wrap; gap: 1rem;">
                    <h2 class="section-title" style="margin-bottom: 0;">Daftar Pengurus & Anggota</h2>

                    <form style="display: flex; gap: 0.5rem; align-items: down;">
                        <label for="sort"
                            style="font-weight: 600; font-size: 0.85rem; color: #475569; display: flex; align-items: center; height: 32px; margin: 0;">Urutkan:</label>
                        <select name="sort" id="sort" class="premium-select">
                            <option value="tahun_jabatan" selected>Tahun Kepengurusan</option>
                            <option value="nama_anggota">Nama Anggota</option>
                            <option value="prodi">Program Studi</option>
                            <option value="nama_jabatan">Jabatan</option>
                            <option value="status_anggota">Status</option>
                        </select>
                        <select name="order" class="premium-select" style="min-width: 100px;">
                            <option value="DESC" selected>Menurun</option>
                            <option value="ASC">Menaik</option>
                        </select>
                        <button type="button" class="btn-terapkan">Terapkan</button>
                    </form>
                </div>

                <div class="table-section" style="margin-top: 0;">
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nama Anggota</th>
                                    <th>Program Studi</th>
                                    <th>Email</th>
                                    <th>Jabatan</th>
                                    <th>Tahun Kepengurusan</th>
                                    <th>Domisili</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Andi Suryo</strong></td>
                                    <td>Informatika</td>
                                    <td>andi@example.com</td>
                                    <td><span class="badge-jabatan">Ketua HMJTI</span></td>
                                    <td><span style="font-weight: 600; color: #64748b;">2024</span></td>
                                    <td>
                                        <span style="font-size: 0.85rem; color: #475569;">
                                            Kota Yogyakarta<br>
                                            <small>KD Pos: 55281</small>
                                        </span>
                                    </td>
                                    <td>
                                        <span
                                            style="background: rgba(34,197,94,0.1); color: #16a34a; padding: 0.3rem 0.6rem; border-radius: 6px; font-size: 0.85rem; font-weight: 600;">Aktif</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            style="background-color: #f59e0b; color: white; padding: 0.4rem 0.8rem; border-radius: 6px; text-decoration: none; font-size: 0.85rem; font-weight: 600;">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Budi Yanto</strong></td>
                                    <td>Sistem Informasi</td>
                                    <td>budi@example.com</td>
                                    <td><span class="badge-jabatan">Sekretaris</span></td>
                                    <td><span style="font-weight: 600; color: #64748b;">2024</span></td>
                                    <td>
                                        <span style="font-size: 0.85rem; color: #475569;">
                                            Kabupaten Sleman<br>
                                            <small>KD Pos: 55581</small>
                                        </span>
                                    </td>
                                    <td>
                                        <span
                                            style="background: rgba(34,197,94,0.1); color: #16a34a; padding: 0.3rem 0.6rem; border-radius: 6px; font-size: 0.85rem; font-weight: 600;">Aktif</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            style="background-color: #f59e0b; color: white; padding: 0.4rem 0.8rem; border-radius: 6px; text-decoration: none; font-size: 0.85rem; font-weight: 600;">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    document.querySelectorAll('.premium-select').forEach(select => {
                        // Sembunyikan original select
                        select.style.display = 'none';

                        // Wrapper
                        const wrapper = document.createElement('div');
                        wrapper.className = 'premium-select-wrapper';
                        if (select.style.minWidth) {
                            wrapper.style.minWidth = select.style.minWidth;
                        }
                        select.parentNode.insertBefore(wrapper, select);
                        wrapper.appendChild(select);

                        // Trigger (Bagian yang diklik)
                        const trigger = document.createElement('div');
                        trigger.className = 'premium-select-trigger';

                        const triggerText = document.createElement('span');
                        triggerText.textContent = select.options[select.selectedIndex].text;
                        trigger.appendChild(triggerText);

                        // Icon chevron
                        const icon = document.createElement('div');
                        icon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>`;
                        icon.className = 'premium-select-icon';
                        trigger.appendChild(icon);

                        wrapper.appendChild(trigger);

                        // Options menu
                        const optionsList = document.createElement('div');
                        optionsList.className = 'premium-select-options';

                        Array.from(select.options).forEach((option, index) => {
                            const optionDiv = document.createElement('div');
                            optionDiv.className = 'premium-select-option' + (option.selected ? ' selected' : '');
                            optionDiv.textContent = option.text;

                            optionDiv.addEventListener('click', (e) => {
                                e.stopPropagation();
                                select.selectedIndex = index;
                                triggerText.textContent = option.text;

                                optionsList.querySelectorAll('.premium-select-option').forEach(o => o.classList.remove('selected'));
                                optionDiv.classList.add('selected');
                                wrapper.classList.remove('open');

                                // Optional: trigger change event on original select if needed for filters
                                select.dispatchEvent(new Event('change'));
                            });
                            optionsList.appendChild(optionDiv);
                        });

                        wrapper.appendChild(optionsList);

                        // Toggle logic
                        trigger.addEventListener('click', (e) => {
                            e.stopPropagation();
                            document.querySelectorAll('.premium-select-wrapper').forEach(w => {
                                if (w !== wrapper) w.classList.remove('open');
                            });
                            wrapper.classList.toggle('open');
                        });
                    });

                    // Tutup saat klik di luar
                    document.addEventListener('click', () => {
                        document.querySelectorAll('.premium-select-wrapper').forEach(w => w.classList.remove('open'));
                    });
                });
            </script>

            <?php include '../includes/footer.php'; ?>