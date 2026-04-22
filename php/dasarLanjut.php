<?php

require "Dasar.php";
$conn = new mysqli('localhost', 'root', '', 'dasarMysql');

//forum
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]) && $_POST["submit"] == "Submit") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $email = $_POST[filter_var($email, FILTER_SANITIZE_EMAIL)];
    $jurusan = $_POST["jurusan"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $message = "Data berhasil ditambahkan";
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="submit" value="Submit">
        <div>NAMA: <input type="text" name="nama"></div>
        <div>EMAIL: <input type="text" name="email"></div>
        <div>JURUSAN: <input type="text" name="jurusan"></div>
        <div>TANGGAL LAHIR: <input type="text" name="tanggal_lahir"></div>
        <input type="submit" value="Submit">
    </form>

</head>

<body>

</body>

</html>
<?php



?>