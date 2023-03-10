<?php
include "./db/base.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票專區</title>
    <?php include "./layouts/link_css.php"; ?>
    <link rel="stylesheet" href="./css/css.css">

</head>

<body>
    <header class="index_header">
        <nav class="nav_bar">
            <div>
                <a class='to_index' href="index.php">回首頁</a>
            </div>
            <div class="marquee">
                <marquee>請加入會員以參與投票喔！</marquee>
            </div>
            
            <div class="menber">
                <a class='to_reg' href="index.php?do=reg">會員註冊｜</a>
                <a class='to_log' href="index.php?do=login">會員登入</a>
            </div>
        </nav>
    </header>

    <main class='container'>
        <?php

        $do = $_GET['do'] ?? 'main';

        $file = "./front/" . $do . ".php";
        if (file_exists($file)) {
            include $file;
        } else {
            include "./front/main.php";
        }
        ?>
    </main>
    <?php include "./layouts/scripts.php"; ?>
    <?php include "./time_box.php"; ?>

</body>

</html>