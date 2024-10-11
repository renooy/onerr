<?php
$conn = new mysqli("localhost", "root", "", "pertemuan_2");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
$id = $_GET['id'];
$sql = "DELETE FROM notes WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Catatan berhasil dihapus!";
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
