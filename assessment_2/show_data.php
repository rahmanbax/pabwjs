<?php

// Koneksi ke database
$servername = "localhost";
$username = "admin"; // Ganti dengan username Anda
$password = "admin123"; // Ganti dengan password Anda
$database = "marketplacejasa"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel
$sql = "SELECT * FROM produk";
$result = $conn->query($sql);

if ($result) {
    $response = array();
    while ($row = $result->fetch_assoc()) {
        $response[] = $row;
    }
    
    // Mengubah array menjadi format JSON
    $json_data = json_encode($response);

    // Menyimpan data JSON ke dalam file data.json
    file_put_contents('data.json', $json_data);

    echo "Data berhasil disimpan";

} else {
    // Jika query gagal dijalankan
    echo "Gagal menjalankan query: " . $conn->error;
}

// Tutup koneksi
$conn->close();

?>