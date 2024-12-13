<?php require "./inc/session_start.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "./inc/head.php"; ?>
</head>
<body>
    <?php
    if(!isset($_GET['viewsS'])||$_GET['vista']==""){
        $_GET['views']="login";
    }

    if(is_file()){

    }
    include "./inc/navbar.php";

    include "./inc/script.php";
    ?>
</body>
</html>