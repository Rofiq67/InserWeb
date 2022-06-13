<?php 
    require_once ('navcustomer.php');
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title> Serpisan | Layanan</title>

    <link rel="stylesheet" href="css/layanancs.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>


</head>
<body style="font-family: Nunito; background-color: #f9f9f9;">
    <div>
        <div class="side">
        <h2>Layanan</h2>
        <hr>
        <p>Konfirmasi data untuk melanjutkan reparasi.</p>
        </div>
        <div class="main">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="nama" class="form-control" id="nama" aria-describedby="nama">
                </div>
                <div class="mb-3">
                    <label for="telp" class="form-label">Nomor Telepon</label>
                    <input type="telp" class="form-control" id="telp">
                </div>
                <div class="dropdown">
                    <label for="jenis" class="form-label">Jenis Barang</label><br>
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Mesin Cuci
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Komputer</a></li>
                        <li><a class="dropdown-item" href="#">Handphone</a></li>
                        <li><a class="dropdown-item" href="#">TV</a></li>
                    </ul>
                </div>
                <hr>
                <div class="dropdown">
                    <label for="Layanan" class="form-label">Layanan</label><br>
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Ganti Komponen
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Checkup</a></li>
                        <li><a class="dropdown-item" href="#">Reparasi</a></li>
                        <li><a class="dropdown-item" href="#">Pembersihan</a></li>
                    </ul>
                </div>
                <hr>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="alamat" class="form-control" id="alamat">
                </div>
                <div class="mb-3">
                    <label for="spesifik" class="form-label">Spesifikasi Kerusakan</label>
                    <input type="spesifik" class="form-control" id="spesifik">
                </div>
                <div id="drop_zone">
                    <p>Drop file disini</p>
                    <p>or</p>
                    <p><button type="button" id="btn_file_pick" class="btn btn-primary" style="background-color: #02668e; border-radius:16px;"><span class="glyphicon glyphicon-folder-open"></span> Pilih File</button></p>
                    <p id="file_info"></p>
                    <p><button type="button" id="btn_upload" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-up"></span>  Upload To Server</button></p>
                    <input type="file" id="selectfile">
                    <p id="message_info"></p>
                </div> 
                <button id="tombol" button type="button" style="background-color: #02668e; border-radius:16px;">Lanjutkan</button> 
                <br>
            </form>
        </div>
    </div>

    

    <?php 
        include 'bawah.php';
    ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    </body>
</html>
