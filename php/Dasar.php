<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "dasarMysql";

$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql_db = "CREATE DATABASE IF NOT EXISTS $db";

if (!$conn->query($sql_db)) {
    echo "Database gagal dibuat: " . $conn->error;
}

$conn->select_db($db);

$sql_table = "CREATE TABLE IF NOT EXISTS tabelDasar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    jurusan VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
if (!$conn->query($sql_table)) {
    echo "Tabel gagal dibuat: " . $conn->error;
}

/*try {
    $sql_insert = "INSERT INTO tabelDasar (nama, email, jurusan, tanggal_lahir) VALUES
('Budi Santoso', 'budi.santoso@example.com', 'Teknik Informatika', '2004-05-15'),
('Citra Lestari', 'citra.lestari@example.com', 'Sistem Informasi', '2005-01-20'),
('Agus Salim', 'agus.salim@example.com', 'Teknik Komputer', '2003-11-30'),
('Dewi Anggraini', 'dewi.anggraini@example.com', 'Ilmu Komputer', '2004-08-12'),
('Eko Prasetyo', 'eko.prasetyo@example.com', 'Teknik Telekomunikasi', '2003-06-25');";

    if (!$conn->query($sql_insert)) {
        echo "Data gagal ditambahkan: " . $conn->error;
    }
} catch (mysqli_sql_exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
*/

/*  $last_id = $conn->insert_id;
    $data_utuh = $conn->query("SELECT * FROM tabelDasar WHERE id = $last_id")->fetch_assoc();
    echo "ID: " . $last_id . "<br>";
    echo "Nama: " . $data_utuh["nama"] . "<br>";
    echo "Email: " . $data_utuh["email"] . "<br>";
    echo "Jurusan: " . $data_utuh["jurusan"] . "<br>";
    echo "Tanggal Lahir: " . $data_utuh["tanggal_lahir"] . "<br>";
    echo "Waktu Dibuat: " . $data_utuh["created_at"] . "<br>";
    echo "<br>";
*/
$sql_table = "CREATE TABLE IF NOT EXISTS tabelInput (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
if (!$conn->query($sql_table)) {
    echo "Tabel gagal dibuat: " . $conn->error;
}
/*try {
    $sql = "INSERT INTO tabelInput (nama, email) VALUES (?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ss", $nama, $email);
        $nama = "udin";
        $email = "udin@example.com";
        $stmt->execute();
        echo "Data berhasil ditambahkan";
        $stmt->close();
    }
} catch (mysqli_sql_exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
*/
$result = $conn->query("SELECT * FROM tabelDasar");
if ($result->num_rows > 0) {
    echo "<table>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>id: " . $row["id"] . " - Name: " . $row["nama"] . " " . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
echo "<hr>";
$result = $conn->query("SELECT * FROM tabelInput");
if ($result->num_rows > 0) {
    echo "<table>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>id: " . $row["id"] . " - Name: " . $row["nama"] . " " . $row["email"] . "" . $row["created_at"] . "</td></tr>";
    }
} else {
    echo "0 results";
}

try {
    $sql = "SELECT id, nama, email, jurusan, tanggal_lahir FROM tabelDasar WHERE nama = 'Budi Santoso' ORDER BY created_at DESC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

        echo "<table><tr><th>ID</th><th>Nama</th><th>Email</th><th>Jurusan</th><th>Tanggal Lahir</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nama"] . "</td><td>" . $row["email"] . "</td><td>" . $row["jurusan"] . "</td><td>" . $row["tanggal_lahir"] . "</td></tr>";
        }
        echo "</table>";
    }
} catch (mysqli_sql_exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}

/*$sql_drop = "DROP TABLE IF EXISTS tabelDasar";
if ($conn->query($sql_drop) === TRUE) {
    echo "<br>Tabel tabelDasar berhasil dihapus.";
} else {
    echo "<br>Gagal menghapus tabel: " . $conn->error;
}
$conn->close();
*/
?>