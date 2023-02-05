<?php include_once "../db/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票選項</title>
    <?php include "../layouts/link_css.php"; ?>
    <link rel="stylesheet" href="../css/css.css">

</head>

<body>
    <?php
    if (isset($_GET['id'])) {
        $survey = find("survey_subject", $_GET['id']);
        $options = all("survey_options", ['subject_id' => $_GET['id']]);
    } else {
        $error = "請回到問卷首頁選擇正確的題目來進行";
    }

    ?>
    <br><br>
    <div class="survey_list_vote">
        <h2><?= $survey['subject']; ?></h2>
        <form action="../api/survey_vote.php" method="post">
            <div>
                <?php
                if (isset($error)) {
                    echo "<span style='color:red'>" . $error . "</span>";
                } else {
                    foreach ($options as $option) {
                ?>
                        <div class="vote_opt">
                            <div>
                                <input type="radio" name="option" value="<?= $option['id']; ?>">
                            </div>
                            <div>
                                <?= $option['opt']; ?>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <?php
            if (!isset($error)) {
            ?>
                <div class="chkBtn">
                    <input type="submit" value="投票">
                    <a href="./survey.php">取消返回</a>
                </div>
            <?php
            }
            ?>
    </div>
    </form>