<?php
    session_start();

    $username = "Muhammad Adnan";
    $pw = "12345#67";

    $usernamePost = $_POST["username"] ?? '';
    $pwPost = $_POST["password"] ?? '';

    if(isset($_POST["submit"])){
        if($usernamePost == $username and $pwPost == $pw){
            $_SESSION['isLogin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['notip'] = true;

            // echo "<script> alert('berhasil login')
            //       location.href = 'index.php'</script";

            header("location: index.php");
            exit;
        }else{
            $_SESSION['old'] = $username;
            if($usernamePost != $username and $pwPost == $pw){
                $_SESSION['err'] = "Username tidak sesuai";
            }else if($pwPost != $pw and $usernamePost == $username){
                $_SESSION['err'] = "Password tidak sesuai";
            }else{
                $_SESSION['err'] = "Username dan password tidak sesuai";
            }

            // echo "<script>alert('login gagal')
            //        location.href = 'login.php'</script>";

            header("location: login.php");
            exit;
        }
    }