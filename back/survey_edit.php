<?php include_once "./db/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯投票內容</title>
    <?php include "./layouts/link_css.php"; ?>
    <link rel="stylesheet" href="./css/css.css">

</head>

<body>
    <?php

    if (isset($_GET['id'])) {
        $subject = find('survey_subject', $_GET['id']);
        $options = all('survey_options', ['subject_id' => $_GET['id']]);
    } else {
        header("location:admin_center.php?do=survey&error=沒有指定編輯的調查id");
    }

    ?>
    <div class="add_edit">
        <h2> > 編輯調查 < </h2>
                <br>
                <div>
                    <button onclick='addOption()' class="addOptBtn">新增選項+</button>
                </div>
                <hr>
                <form action="./api/survey_edit.php" method="post">
                    <div class="">
                        <div class="">
                            現存圖片為<br>
                            <img src="../upload/<?= $row['img_name']; ?>" style="height: 130px;">
                        </div>
                        <div class="file">
                            點擊選取欲更換圖片
                            <input type="file" name="img" accept="image/gif, image/jpeg, image/png" onchange="readURL(this)" id="choose_img">
                        </div>
                        <br>
                        <img id="now_img" style="height: 300px;" src="#" />

                    </div>

                    <hr>
                    <div class="form-group row col-12">
                        <label class="col-2 text-right">主題</label>
                        <input type="text" name="subject" value="<?= $subject['subject']; ?>" class="form-control col-10">
                        <input type="hidden" name="subject_id" value="<?= $subject['id']; ?>">
                    </div>
                    <div id="options" class="col-11">
                        <?php
                        foreach ($options as $idx => $option) {
                        ?>
                            <div class="option form-group row col-12">
                                <label class="col-2 text-right">選項<?= $idx + 1; ?></label>
                                <input type="text" name='opt[]' value="<?= $option['opt']; ?>" class="form-control col-8">
                                <input type="hidden" name="opt_id[]" value="<?= $option['id']; ?>">
                                <a href="./api/survey_option_del.php?id=<?= $option['id']; ?>" class="del_Opt"> 刪除</a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="chkBtn">
                        <input type="submit" value="修改">
                        <input type="reset" value="重置">
                        <input type="button" value="取消修改" onclick="location.href='admin_center.php?do=survey_vote.php'">
                    </div>
                </form>
    </div>

    <script>
        function addOption() {
            const options = $('#options');

            let option = "";
            let num = document.getElementsByClassName('option').length + 1

            option += `
                <div class="option form-group row col-12">
                    <label class="col-2 text-right"> 選項${num} </label>
                    <input type="text" name="opt[]" class="form-control col-10">
                </div>
                `;

            options.append(option);

        };


        $("#choose_img").change(function() {

            readURL(this);

        });




        function readURL(input) {

            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {

                    $("#now_img").attr('src', e.target.result);

                }

                reader.readAsDataURL(input.files[0]);

            }

        }
    </script>