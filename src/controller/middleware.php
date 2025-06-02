<?php
    if(!isset($_SESSION["isLogin"])){
        echo "<script>alert('silahkan login')
            location.href = 'login.php'</script>";
    }