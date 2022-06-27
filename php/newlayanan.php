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
            <form action="edit.php" method="post" name="form1" enctype="multipart/form-data">
                <table width="100%" class="table-bordered" cellpadding="10" border="0">
                    <thead>
                    <tr>
                        <td>No</td>
                        <td><input type="text" class="form-control" name="nomor" value="#"></td>
                    </tr>
                    <tr> 
                        <td> Nama </td>
                        <td><input type="text" class="form-control" name="fnama" value="#"></td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td><input type="text" class="form-control" name="contact" value="#"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" class="form-control" name="alamat" value="#"></td>
                    </tr>
                    <tr>
                        <td>Gambar</td>
                        <td><input type="file" class="form-control" name="gambar" value="<?php echo $gambar ;?>"></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <select class="form-control" name="status">
                                <option> a </option>
                                <option> b </option>
                                <option> c </option>
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
