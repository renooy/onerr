<?php
$conn = new mysqli("localhost", "root", "", "pertemuan_2");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$sql = "INSERT INTO notes (judul, isi, created_at) VALUES ('$judul',
'$isi', NOW())";
if ($conn->query($sql) === TRUE) {
    echo "Catatan berhasil ditambahkan!";
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
