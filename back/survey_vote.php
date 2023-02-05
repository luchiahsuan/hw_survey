<?php include_once "./db/base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票專區管理中心</title>
    <?php include "./layouts/link_css.php";?>
    <link rel="stylesheet" href="./css/css.css">

</head>
<body>
<br><br>
<h2> > 問卷列表清單 < </h2>
<br>
<div class="chkBtn">
    <a href="admin_center.php?do=survey_add">新增問卷</a>
    <br>
</div>

<ul>
    <li class="survey_list_1">
        <div class="survey_list_name">主題</div>
        <div class="survey_list_vote_3">參與人數</div>
        <div class="survey_list_chkBtn_3">編輯</div>
    </li>
    <?php
    $surveys=all("survey_subject");

    foreach($surveys as $survey){
    ?>
    <li class="survey_list">
        <div class="survey_list_name">
        <?=$survey['subject'];?>
        </div>
        <div class="survey_list_vote_3"><?=$survey['vote'];?></div>
        <div class="survey_list_chkBtn chkBtn">
            <?php
                $activeText=($survey['active']==1)?"啟用":"關閉";
            ?>
            <a href="./api/survey_active.php?id=<?=$survey['id'];?>"><?=$activeText;?></a>
            <a href="admin_center.php?do=survey_edit&id=<?=$survey['id'];?>" >編輯</a>
            <a href="./api/survey_del_chk.php?id=<?=$survey['id'];?>" >刪除</a>
        </div>
    </li>
    <?php
        }
    ?>
</ul>