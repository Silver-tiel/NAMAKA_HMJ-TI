<?php
$current_url = $_SERVER['REQUEST_URI'];
?>
<div class="sidebar">
    <div class="sidebar-logo">
        HMJTI <span>Portal</span>
    </div>
    <ul class="sidebar-menu">
        <li>
            <a href="/projekbesar/keanggotaan/" <?php echo strpos($current_url, '/keanggotaan/') !== false ? 'data-active="true"' : ''; ?>>
                👥 Keanggotaan
            </a>
        </li>
        <li>
            <a href="/projekbesar/kegiatan/" <?php echo strpos($current_url, '/kegiatan/') !== false ? 'data-active="true"' : ''; ?>>
                📅 Kegiatan
            </a>
        </li>
        <li>
            <a href="/projekbesar/keuangan/" <?php echo strpos($current_url, '/keuangan/') !== false ? 'data-active="true"' : ''; ?>>
                💰 Keuangan
            </a>
        </li>
        <li>
            <a href="/projekbesar/Peminjaman/" <?php echo strpos($current_url, '/Peminjaman/') !== false ? 'data-active="true"' : ''; ?>>
                🔑 Peminjaman
            </a>
        </li>
        <li>
            <a href="/projekbesar/Penyuratan/" <?php echo strpos($current_url, '/Penyuratan/') !== false ? 'data-active="true"' : ''; ?>>
                📋 Penyuratan
            </a>
        </li>
    </ul>
</div>