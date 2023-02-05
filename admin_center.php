<?php
include "./db/base.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後台管理中心</title>
    <?php include "./layouts/link_css.php"; ?>
    <link rel="stylesheet" href="./css/css.css">

</head>

<body>
    <header class="index_header">
        <nav class="nav_bar">
            <div>
                <a class='to_index' href="index.php">回網站首頁｜</a>
                <a class='to_admin' href="admin_center.php">回管理首頁</a>
            </div>

            <div class="menber">
                <a class='to_log' href="logout.php">管理登出</a>
            </div>
        </nav>
    </header>

    <main class="container">

        <?php
        $do = $_GET['do'] ?? 'main';
        $file = './back/' . $do . ".php";
        if (file_exists($file)) {
            include $file;
        } else {
            include "./back/survey_vote.php";
        }
        ?>
    </main>
    <?php include "./layouts/scripts.php"; ?>
</body>

</html>