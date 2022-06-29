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
        <link rel="stylesheet" href="style.css"
        <!--Bostrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link href="css/tabeladcs.css" rel="stylesheet" type="text/css">
        <title>Dasboard</title>
    </head>
    <body>
        <div class="container mt-4" id="judul">
            <h1>Masukan Service</h1>
            <hr style="border: 4px solid; background-color:#02668e;  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
                            color:#02668e; width: 160px; border-radius:32px; "><br>

                <div style="text-align: right">
                    <a button type="button" class="btn btn-primary" href="newlayanan.php"><i class='bx bx-plus-medical' ></i></a>
                </div>
                <br>

                <table id="example" class="table table-striped table-bordered" style="text-align: center;">
                    <thead> 
                        <tr style="text-align:center;">
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Tlp</th>
                            <th>Jenis Barang</th>
                            <th>Jenis Layanan</th>
                            <th>Alamat</th>
                            <th>Spesifikasi</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                        <?php 
                            $no = 1;
                            $sql = mysqli_query($mysqli, "select * from layanan order by no_lyn desc");

                            while($data=mysqli_fetch_array($sql)){
                        ?>

                    <tbody> 
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['fnama']?></td>
                            <td><?php echo $data['contact']?></td>
                            <td><?php echo $data['jenis']?></td>
                            <td><?php echo $data['layanan']?></td>
                            <td><?php echo $data['alamat']?></td>
                            <td><?php echo $data['spesifikasi']?></td> 
                            <td><img src="<?php echo $data['gambar']?>" style="width:150px; height:120px;"</td>
                            <td><button type="button" class="btn btn-outline-success" style="text-align: center;" >Success</button></td>
                            <td><button type="button" class="btn btn-warning" href="#"><i class='bx bx-edit-alt'></i></button>
                                <button type="button" class="btn btn-danger" href="#"> <i class='bx bx-trash-alt'></i></button>
                        </tr>
                        
                        <?php
                            $no++;
                            }
                        ?>
                    </tbody>
                </table>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    

    <br><br><br><br>



    <?php 
        include_once 'bawah.php';
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

