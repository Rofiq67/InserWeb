<?php 
    include 'navcustomer.php';
    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/cekservice.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Google Font -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <title>Serpisan</title>

    </head>

    <body>
        <div class="side">
            <h2>Cek Service</h2>
            <hr>
            Mohon ditunggu dan cek secara berkala.
        </div>

        <div class="accordion-wrapper">
            <div class="accordion">
                <input type="radio" name="radio-a" id="check1">
                <label class="accordion-label" for="check1">Penerimaan</label>
                <div class="accordion-content">
                    <p>Barang sudah diterima</p>
                    <img src="images/3.jpg">
                </div>
              </div>
            <div class="accordion">
                <input type="radio" name="radio-a" id="check2">
                <label class="accordion-label" for="check2">Proses Perbaikan</label>
                <div class="accordion-content">
                    <p>Sedang dalam proses perbaikan</p>
                    <img src="images/prosesperbaikan.jpg">
                </div>
            </div>
            <div class="accordion">
                <input type="radio" name="radio-a" id="check3">
                <label class="accordion-label" for="check3">Selesai</label>
                <div class="accordion-content">
                </div>
            </div>
            <div class="accordion">
                <input type="radio" name="radio-a" id="check4">
                <label class="accordion-label" for="check4">Pembayaran</label>
                <div class="accordion-content">
                </div>
            </div>
        </div>






            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br>

        <?php 
            include 'bawah.php';
        ?>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   


        <script>
        function myFunction(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else { 
                x.className = x.className.replace(" w3-show", "");
            }
        }
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
        
    </body>
    </html>
