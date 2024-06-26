<?php
// Menghubungkan ke database (ganti dengan informasi koneksi yang sesuai)
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_pesanan";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan melalui metode POST
    $nama_pemesanan = $_POST["nama_pemesanan"];
    $no_hp = $_POST["no_hp"];
    $tanggal = $_POST["tanggal"];
    $durasi_perjalanan = $_POST["durasi_wisata"];
    $jumlah_peserta = $_POST["jml_peserta"];
    $harga_paket = $_POST["harga_paket"];
    $jumlah_tagihan = $_POST["jml_tagihan"];
    
    // Simpan data ke dalam database
    $sql = "INSERT INTO pesanan (nama_pemesanan, no_hp, tanggal, durasi_perjalanan, jumlah_peserta, harga_paket, jumlah_tagihan)
    VALUES ('$nama_pemesanan', '$no_hp', '$tanggal', '$durasi_perjalanan', '$jumlah_peserta', '$harga_paket', '$jumlah_tagihan')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data pemesanan berhasil disimpan.";
        header("Location: daftar_pesanan.php");
        exit();

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Tutup koneksi
    $conn->close();
}
?>