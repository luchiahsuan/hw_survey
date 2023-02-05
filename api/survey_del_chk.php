<?php include_once "../db/base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認刪除？</title>
    <?php include "../layouts/link_css.php";?>
    <link rel="stylesheet" href="../css/css.css">

</head>
<body>
    <?php
    $subject=find("survey_subject",$_GET['id']);

    ?>
    <div class="center">
        <div class="del_edit_chkBtn">
            <p>你確定要刪除嗎？</p>
            <a href="survey_del.php?id=<?= $subject['id']; ?>" >確定刪除</a>
            <a href="../admin_center.php?do=survey" >取消刪除</a>
        </div>
    </div>
    <?php
    ?>