<?php
    session_start();

    echo "<script>alert('Keluar dari akun') 
    location.href = '../../login.php'</script>";
    
    session_destroy();
