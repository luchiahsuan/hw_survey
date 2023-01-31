<?php include_once "../db/base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票專區</title>
    <?php include "../layouts/link_css.php";?>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <?php
    $subject=find("survey_subject",$_GET['id']);

    ?>
<div class="col-3 text-center">
    <a href="survey_del.php?id=<?= $subject['id']; ?>" class="btn btn-sm btn-success mx-1">確定刪除</a>
    <a href="../admin_center.php?do=survey" class="btn btn-sm btn-info mx-1">取消刪除</a>
</div>
    <?php
    ?>