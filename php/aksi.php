<?php
    session_start();

    include 'koneksi.php';

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql =  mysqli_query($mysqli, "SELECT * FROM user WHERE email='$email' AND pwd='$pwd'");
    $cek = mysqli_num_rows($sql);

    if($cek > 0){
        $data = mysqli_fetch_assoc($sql);

        if($data['level']=="admin"){
            $_SESSION['email'] = $email;
            $_SESSION['level'] = "admin";

            header("location:haladmin.php");
        } else if($data['level']=="customer"){
            $_SESSION['email'] = $email;
            $_SESSION['level'] = "customer";

            header("location:index.php");
        }else {
            header("location:Loginpage.php?alert=gagal");
        }
    } else {
        header("location:Loginpage.php?alert=gagal");
    }
?>