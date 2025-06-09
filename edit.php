<?php
include 'db.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM buku WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun'];

    mysqli_query($conn, "UPDATE buku SET judul='$judul', penulis='$penulis', tahun='$tahun' WHERE id=$id");
    header("Location: index.php");
}
?>
<form method="POST">
    <h2>Edit Buku</h2>
    Judul: <input type="text" name="judul" value="<?= $data['judul'] ?>" required><br>
    Penulis: <input type="text" name="penulis" value="<?= $data['penulis'] ?>" required><br>
    Tahun: <input type="number" name="tahun" value="<?= $data['tahun'] ?>" required><br>
    <button type="submit" name="submit">Update</button>
</form>
