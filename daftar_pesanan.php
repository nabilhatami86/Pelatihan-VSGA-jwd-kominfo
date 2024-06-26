<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Demo</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

    <body>
        <div
            class="jumbotron jumbotron-fluid jumbotron-custom p-5"
            style="background:url(assets/img/kimia.jpg); background-size: cover; color: #ffd700; margin-bottom: 0;">
            <div class="container py-5">
                <h1
                    class="display-5 fw-bold"
                    style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Kos Kosan Pabrik
                </h1>
                <p class="col-md-8 fs-4">Kota di mana perekonomian kota, setidaknya secara
                    historis, berpusat di sekitar industri, dengan pabrik-pabrik.</p>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg " style="background-color: #ffd700">
            <div class="container-fluid">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="/Latihan1.html"
                                style="color: rgb(0, 0, 0) !important;">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: rgb(0, 0, 0) !important;">Pendaftaran Paket Wisata
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: rgb(0, 0, 0) !important;">Daftar Kosan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
    // Menghubungkan ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_pesanan";

    $conn = new mysqli($servername, $username, $password, $database);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }

    // Query untuk mengambil data dari tabel pesanan
    $sql = "SELECT * FROM pesanan";
    $result = $conn->query($sql); 

    ?>
    <h1 class="text-center m-4">Daftar Pemesanan Paket Wisata</h1>
    <div class="table-responsive col-md-9 mx-auto">
      <table class="table table-striped-sm">
        <thead class="text-center">
            <tr>
                <th>No</th>
                <th>Nama Pemesan</th>
                <th>No Hp/Telp</th>
                <th>Tanggal Pemesanan</th>
                <th>Durasi Perjalanan</th>
                <th>Jumlah Peserta</th>
                <th>Harga Paket</th>
                <th>Jumlah Tagihan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no=1; 
                while($daftar_pesanan=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>". $no ."</td> ";
                    echo "<td>". $daftar_pesanan['nama_pemesanan'] ."</td>";
                    echo "<td>". $daftar_pesanan['no_hp'] ."</td>";
                    echo "<td>". $daftar_pesanan['tanggal'] ."</td>";
                    echo "<td>". $daftar_pesanan['durasi_perjalanan'] ."</td>";
                    echo "<td>". $daftar_pesanan['jumlah_peserta'] ."</td>";
                    echo "<td>". $daftar_pesanan['harga_paket'] ."</td>";
                    echo "<td>". $daftar_pesanan['jumlah_tagihan'] ."</td>";
                    echo "</tr>";
                    $no++;
                }
            ?>
        </tbody>
      </table>
    </div>



<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320">
    <path
        fill="#ffd700"
        fill-opacity="1"
        d="M0,96L0,224L130.9,224L130.9,32L261.8,32L261.8,128L392.7,128L392.7,64L523.6,64L523.6,160L654.5,160L654.5,288L785.5,288L785.5,256L916.4,256L916.4,96L1047.3,96L1047.3,96L1178.2,96L1178.2,192L1309.1,192L1309.1,288L1440,288L1440,320L1309.1,320L1309.1,320L1178.2,320L1178.2,320L1047.3,320L1047.3,320L916.4,320L916.4,320L785.5,320L785.5,320L654.5,320L654.5,320L523.6,320L523.6,320L392.7,320L392.7,320L261.8,320L261.8,320L130.9,320L130.9,320L0,320L0,320Z"></path>
</svg>
<div class="mx-0 px-0">
    <footer
        style="background-color:#ffd700"
        class="px-5 d-flex flex-wrap justify-content-between align-items-center py-3 my-1000000">
        <div class="col-md-4 d-flex align-items-center">
            <img src="assets/img/Gresik.png" alt="" style="width: 50px;">
            <span class="mb-3 mb-md-0 text-white px-2">© 2024 Copyright
            </span>
        </div>
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
                <a class="text-body-secondary" href="#">
                    <i class="bi bi-instagram"></i>
                </a>
            </li>
            <li class="ms-3">
                <a class="text-body-secondary" href="#">
                    <i class="bi bi-messenger"></i>
                </a>
            </li>
            <li class="ms-3">
                <a class="text-body-secondary" href="#">
                    <i class="bi bi-facebook"></i>
                </a>
            </li>
        </ul>
    </footer>
</div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>