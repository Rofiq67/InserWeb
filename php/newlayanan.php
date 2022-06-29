<?php 
    include 'navadmin.php';
?>

<?php
    include_once 'koneksi.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Google Font -->
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
        <!-- Box Icon -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <!-- Bootstrap CSS -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


        <title> Serpisan | Admin </title>

        <style>

        
        </style>
    </head>
    <body style="font-family: Nunito; background-color: #f9f9f9;">



    
    <div class="container">
    <div class="row" style="margin-top:84px; margin-bottom:32px;">
        <div>
            <div class="side">
            <h2>Layanan</h2>
            <hr style="width: 180px; height:8px; border-radius:12px; color:#02668e;">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form action="newlayanan.php" method="post" name="form1" enctype="multipart/form-data">
                <table width="100%" class="table-bordered" cellpadding="10" border="0">
                    <thead>
                    <tr>
                        <td>No</td>
                        <td><input type="text" class="form-control" name="no_lyn" value=""></td>
                    </tr>
                    <tr> 
                        <td> Nama </td>
                        <td><input type="text" class="form-control" name="fnama" value=""></td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td><input type="text" class="form-control" name="contact" value=""></td>
                    </tr>
                    <tr>
                        <td>Jenis Barang</td>
                        <td>
                            <select class="form-control" name="jenis">
                                <option> Handphone </option>
                                <option> PC/Komputer </option>
                                <option> TV </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Layanan</td>
                        <td>
                            <select class="form-control" name="layanan">
                                <option> Reparasi </option>
                                <option> Pembersihan </option>
                                <option> Ganti Komponen </option>
                                <option> Check Up </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" class="form-control" name="alamat" value=""></td>
                    </tr>
                    <tr>
                        <td>Spesifikasi</td>
                        <td><input type="text" class="form-control" name="spesifikasi" value=""></td>
                    </tr>
                    <tr>
                        <td>Gambar</td>
                        <td><input type="file" class="form-control" name="gambar" value="<?php echo $gambar ;?>"></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <select class="form-control" name="status">
                                <option> Baru </option>
                                <option> Bekas </option>
                                <option> Rusak </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" class="form-control btn btn-primary" value="submit" name="submit"></input>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>




    
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

<?php 
    include('koneksi.php');

    if(isset($_POST['submit'])){
        $no_lyn = $_POST['no_lyn'];
        $fnama = $_POST['fnama'];
        $contact = $_POST['contact'];
        $jenis = $_POST['jenis'];
        $layanan = $_POST['layanan'];
        $alamat = $_POST['alamat'];
        $spesifikasi = $_POST['spesifikasi'];
        $gambar = $_FILES['gambar']['name'];
         //$file_tmp = $_FILES['gambar']['tmp_name'];
        //gambar lama
        //$gambarlama = $_POST['gambarlama'];
        //$gambarold = "foro"."/".$gambarlama;
        //

        if($gambar != "") {
            $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
            $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['gambar']['tmp_name'];   
            $angka_acak     = rand(1,999);
            $namagambar = $angka_acak.'-'.$gambar; //menggabungkan angka acak dengan nama file sebenarnya
                    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                            move_uploaded_file($file_tmp, 'gambar/'.$namagambar); //memindah file gambar ke folder gambar
                            // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                            $query = "INSERT INTO layanan (no_lyn, fnama, contact, jenis, layanan, alamat, spesifikasi, gambar) 
                                        VALUES ('$no_lyn', '$fnama', '$contact', '$jenis','$layanan','$alamat', '$spesifikasi', '$namagambar')";
                            $result = mysqli_query($mysqli, $query);
                            // periska query apakah ada error
                            if(!$result){
                                die ("Query gagal dijalankan: ".mysqli_errno($mysqli).
                                        " - ".mysqli_error($mysqli));
                            } else {
                                //tampil alert dan akan redirect ke halaman index.php
                                //silahkan ganti index.php sesuai halaman yang akan dituju
                                echo "<scrip>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                            }
            
                        } else {     
                        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='newlayanan.php';</script>";
                        }
            } else {
                $query = "INSERT INTO layanan (no_lyn, fnama, contact, jenis, layanan, alamat, gambar) 
                                    VALUES ('$no_lyn', '$fnama', '$contact', '$jenis','$layanan','$alamat', '$spesifikasi, NULL)";
                            $result = mysqli_query($mysqli, $query);
                            // periska query apakah ada error
                            if(!$result){
                                die ("Query gagal dijalankan: ".mysqli_errno($mysqli).
                                        " - ".mysqli_error($mysqli));
                            } else {
                                //tampil alert dan akan redirect ke halaman index.php
                                //silahkan ganti index.php sesuai halaman yang akan dituju
                                echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                            }
            }
    }
?>  