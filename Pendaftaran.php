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
                    style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Kos Kosan Pabrik </h1>
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
                                href="#"
                                style="color: rgb(0, 0, 0) !important;">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: rgb(0, 0, 0) !important;">Pendaftaran </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: rgb(0, 0, 0) !important;">Daftar Kosan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <h1 class="text-center mt-4">
                Form Kos kosan Pabrik
            </h1>
            <div class="row">
                <div class="col">
                    <form>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Nomor HP</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="no_hp" name="no_hp">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Tanggal pemesanan</label>
                        <div class="col-sm-8">
                        <input type="date" class = "form-control" name="tanggal" id="tanggal">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Durasi Wisata (Hari)</label>
                        <div class="col-sm-8">
                        <input type="number" name="durasi_wisata" class="form-control" id="durasi_wisata" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Jumlah Peserta (Orang)</label>
                        <div class="col-sm-8">
                        <input type="number" name = "jml_peserta" class="form-control" id="jml_peserta" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Pelayanan Paket Perjalanan</label>
                        <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id ="penginapan" value="1000000" >
                            <label class="form-check-label" for="flexCheckDefault">
                                Penginapan (Rp.1.000.000)
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id ="transportasi" value="1200000">
                            <label class="form-check-label" for="flexCheckChecked">
                                Transportasi (Rp.1.200.000)
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id ="makanan" value="1200000">
                            <label class="form-check-label" for="flexCheckChecked">
                                Makanan (Rp.500.000) 
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Harga Paket</label>
                        <div class="col-sm-8">
                        <input type="number" class="form-control" id="harga_paket" name = "harga_paket" required  readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Jumlah Tagihan</label>
                        <div class="col-sm-8">
                        <input type="number" class="form-control" id="jml_tagihan" name="jml_tagihan" required  readonly>
                    </div>
                    </div>
                    <input class="btn btn-warning" id = "cek_tagihan" name ="cek_tagihan" type="button" value="Cek Tagihan">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
<!-- image -->
        <div class="col">
            <img src="assets/img/ppp.jpeg" alt="" style="height: 400px; width: 600px;">
        </div>
    </div>
</div>        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320">
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

        <script>
		$(document).ready(function() {
            $('#cek_tagihan').click(function(){ 
                //menghitung harga paket
                hargaPaket=0;
                if (document.getElementById("penginapan").checked) hargaPaket += 1000000;
                if (document.getElementById("transportasi").checked) hargaPaket += 1200000;
                if (document.getElementById("makanan").checked) hargaPaket += 500000;
                
                //menampilkan harga paket ke dalam input harga paket
                $('#harga_paket').val(hargaPaket);

                //menghitung jumlah tagihan
                var jmlPeserta = $('#jml_peserta').val();
                var durasiWisata = $('#durasi_wisata').val();
                var jmlTagihan = (jmlPeserta * durasiWisata)* hargaPaket;

                //menampilkan jumlah tagihan ke dalam input jumlah tagian
                $('#jml_tagihan').val(jmlTagihan);

            });
        });
        </script>
    </body>
</html>