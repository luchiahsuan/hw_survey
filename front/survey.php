<?php include_once "../db/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>參與投票專區</title>
    <?php include "../layouts/link_css.php"; ?>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <header class="shadow mb-5">
        <nav class="container d-flex justify-content-between py-3">
        <div>
                <a class='mx-2'></a>
            </div>
            <div>
                <a class='mx-2' href="../logout.php">會員登出</a>
            </div>
        </nav>
    </header>

    <h3 class="text-center">進行中的意見調查</h3>
    <ul class="list-group col-md-10 m-auto">
        <li class="d-flex text-center list-group-item list-group-item-info list-group-item-action">
            <div class="col-3">主題</div>
            <div class="col-5">目前比數</div>
            <div class="col-2">參與人數</div>
            <div class="col-2">一起投票</div>
        </li>

        <?php
        $surveys = all("survey_subject", ['active' => 1]);
        foreach ($surveys as $survey) {
        ?>
            <li class="d-flex list-group-item list-group-item-light list-group-item-action">
                <div class="col-3 font-weight-bolder" style="font-size:1.25rem">
                    <?= $survey['subject']; ?>

                </div>
                <div class="col-5 font-weight-bolder" style="font-size:1.25rem">
                    <?php

                    $subject = find("survey_subject", $survey['id']);
                    $options = all("survey_options", ['subject_id' => $survey['id']]);

                    ?>
                    <ul class="list-group col-10 mx-auto">
                        <?php
                        foreach ($options as $option) {
                            $division = ($subject['vote'] == 0) ? 1 : $subject['vote'];
                            $width = round(($option['vote'] / $division) * 100, 2);
                        ?>
                            <li class="d-flex list-group-item list-group-item-light list-group-item-action">
                                <div class="col-4"><?= $option['opt']; ?></div>
                                <div class="col-8 d-flex align-items-center">
                                    <div class="bg-primary rounded" style="width:<?= $width; ?>%">&nbsp;</div>
                                    <div><?= $width; ?>%</div>
                                </div>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-2 text-center">
                    <?= $survey['vote']; ?>
                </div>
                <div class="col-2 text-center">
                    <a href="survey_item.php?do=&id=<?= $survey['id']; ?>" class="btn btn-sm btn-success mx-1">投票</a>
                </div>
            </li>
        <?php
        }

        ?>
    </ul>