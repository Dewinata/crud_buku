<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun'];

    mysqli_query($conn, "INSERT INTO buku (judul, penulis, tahun) VALUES ('$judul', '$penulis', '$tahun')");
    header("Location: index.php");
}
?>
<form method="POST">
    <h2>Tambah Buku</h2>
    Judul: <input type="text" name="judul" required><br>
    Penulis: <input type="text" name="penulis" required><br>
    Tahun: <input type="number" name="tahun" required><br>
    <button type="submit" name="submit">Simpan</button>
</form>
