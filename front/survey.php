<?php include_once "../db/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>參與投票專區</title>
    <?php include "../layouts/link_css.php"; ?>
    <link rel="stylesheet" href="../css/css.css">

</head>

<body>
    <header class="index_header">
        <nav class="nav_bar">
        <div>
                <a class=''></a>
            </div>
            <div class="menber">
                <a class='to_log' href="../logout.php">會員登出</a>
            </div>
        </nav>
    </header>
<br><br>
    <h2> >進行中的意見調查< </h2>
    <ul class="survey">
        <li class="survey_list_2">
            <div class="survey_list_name_1">主題</div>
            <div class="survey_list_result">目前比數</div>
            <div class="survey_list_vote_1">參與人數</div>
            <div class="survey_list_chkBtn_1">一起投票</div>
        </li>

        <?php
        $surveys = all("survey_subject", ['active' => 1]);
        foreach ($surveys as $survey) {
        ?>
            <li class="survey_list_3">
                <div class="survey_list_name_1">
                    <?= $survey['subject']; ?>

                </div>
                <div class="survey_list_result">
                    <?php

                    $subject = find("survey_subject", $survey['id']);
                    $options = all("survey_options", ['subject_id' => $survey['id']]);

                    ?>
                    <ul class="survey_list_result_1">
                        <?php
                        foreach ($options as $option) {
                            $division = ($subject['vote'] == 0) ? 1 : $subject['vote'];
                            $width = round(($option['vote'] / $division) * 100, 2);
                        ?>
                            <li class="">
                                <div class="survey_list_result_opt"><?= $option['opt']; ?></div>
                                <div class="survey_list_result_img">
                                    <div class="survey_list_result_img_color" style="width:<?= $width; ?>%">&nbsp;</div>
                                    <div><?= $width; ?>%</div>
                                </div>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="survey_list_vote_1">
                    <?= $survey['vote']; ?>
                </div>
                <div class="survey_list_chkBtn_1 chkBtn">
                    <a href="survey_item.php?do=&id=<?= $survey['id']; ?>" class="btn btn-sm btn-success mx-1">投票</a>
                </div>
            </li>
        <?php
        }

        ?>
    </ul>