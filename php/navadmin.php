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
        <link href="css/navcs.css" type="text/css"  rel='stylesheet'>


        <title> Serpisan | Customer </title>

        <style>

        

        </style>
    </head>
    <body style="font-family: Nunito; background-color: #f9f9f9;">


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white" >
        <div class="container-fluid" style="margin-left: 77px;">
        <a class="navbar-brand" href="#" style="font-weight: 700; font-style: normal; font-size:20pt; line-height:33px; ">
            <img src="images/logo.png" alt="" width="30" height="45" class="d-inline-block align-text-top">
            Serpisan
        </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 554px; font-size:16px; font-weight: 700;">
            <ul class="navbar-nav">
                <li class="nav-item active" style="margin-right: 32px;">
                <a class="nav-link " aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item" style="margin-right: 32px;">
                <a class="nav-link" href="cekservice.php">Cek Service</a>
                </li>
                <li class="nav-item" style="margin-right: 32px;">
                <a class="nav-link" href="layanan.php">Layanan</a>
                </li>
                <li class="nav-item" style="margin-right: 32px;">
                <a class="nav-link" href="#aboutme">About me</a>
                </li>
                </li>
                <li class="nav-item" style="margin-right: -4px;">
                    <a class="nav-link" href="#"><i class='bx bxs-user-circle' style="font-size: 15pt;"></i></a>
                </li>
                <li class="nav-item dropdown" style="font-size:16px; font-weight: 700;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Customer
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a href="#" class="dropdown-item"> Profil </a></li>
                        <li><a class="dropdown-item" href="logout.php"><i class='bx bx-log-out'></i> Sign Out </a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    

    

    <script>
        $(".nav .navbar-nav a").on("click", function(){
        $(".nav .navbar-nav").find("li.active").removeClass("active");
        $(this).parent('li').addClass("active");
        });
    </script>





    
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <!--jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

    <script src="js/garisnav.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    </body>
</html>
