<?php include_once "./db/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票專區管理中心</title>
    <?php include "./layouts/link_css.php"; ?>
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
                    <!-- <div class="survey_list_end_time_3">結束時間</div> -->
                    <div class="survey_list_chkBtn_3">編輯</div>
                </li>
                <?php
                $surveys = all("survey_subject");

                foreach ($surveys as $survey) {
                ?>
                    <li class="survey_list">
                        <div class="survey_list_name">
                            <?= $survey['subject']; ?>
                        </div>
                        <div class="survey_list_vote_3"><?= $survey['vote']; ?></div>
                        <!-- <div class="end_time"><?= $survey['end_time']; ?></div>
                        <div>

                        </div> -->
                        <div class="survey_list_chkBtn chkBtn">
                            <?php
                            $activeText = ($survey['active'] == 1) ? "啟用" : "關閉";
                            ?>
                            <a href="./api/survey_active.php?id=<?= $survey['id']; ?>"><?= $activeText; ?></a>
                            <a href="admin_center.php?do=survey_edit&id=<?= $survey['id']; ?>">編輯</a>
                            <a href="./api/survey_del_chk.php?id=<?= $survey['id']; ?>">刪除</a>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>


            <!-- <script>
                // HTML


                // JS
                var aI = document.getElementsByTagName("i");

                setInterval(function() { // 設置倒數計時: 結束時間 - 當前時間

                    // 當前時間
                    var time = new Date();
                    var nowTime = time.getTime(); // 獲取當前毫秒數
                    // 設置結束時間 : 5月13號 15點0分0秒
                    time.setMonth(1); //   獲取當前 月份 (從 '0' 開始算)
                    time.setDate(28); //   獲取當前 日
                    time.setHours(23); //   獲取當前 時
                    time.setMinutes(0); //   獲取當前 分
                    time.setSeconds(0);
                    var endTime = time.getTime();

                    // 倒數計時: 差值
                    var offsetTime = (endTime - nowTime) / 1000; // ** 以秒為單位
                    var sec = parseInt(Math.floor(offsetTime % 60)); // 秒
                    var min = parseInt(Math.floor((offsetTime / 60) % 60)); // 分 ex: 90秒
                    var hr = parseInt(Math.floor(offsetTime / 60 / 60 / 60 / 24)); // 時
                    var day = parseInt(Math.floor(offsetTime / 60 / 60 / 24)); // 天

                    aI[0].textContent = day + "天";
                    aI[1].textContent = hr + "時";
                    aI[2].textContent = min + "分";
                    aI[3].textContent = sec + "秒";
                }, 1000);
            </script> -->