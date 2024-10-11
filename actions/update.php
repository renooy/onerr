<?php
$conn = new mysqli("localhost", "root", "", "pertemuan_2");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$sql = "UPDATE notes SET judul='$judul', isi='$isi' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Catatan berhasil diperbarui!";
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
