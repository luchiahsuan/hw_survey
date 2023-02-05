<?php include_once "./db/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯投票內容</title>
    <?php include "./layouts/link_css.php"; ?>
    <link rel="stylesheet" href="./css/style.css">

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
    <h3 class="text-center">編輯調查<button onclick='addOption()' class="btn btn-success btn-sm py-0" style="font-size:1.5rem">+</button></h3>

    <form action="./api/survey_edit.php" class="col-10 mx-auto d-flex flex-wrap justify-content-end" method="post">
        <div class="form-group row col-12">
            <div class="row mx-auto col-12">
                <img src="./upload/<?= $row['img_name']; ?>" style="height: 130px;">

            </div>
            <div class="row mx-auto col-12">
                <input type="file" name="img" >
            </div>
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
                    <label class="col-2 text-right">項目<?= $idx + 1; ?></label>
                    <input type="text" name='opt[]' value="<?= $option['opt']; ?>" class="form-control col-9">
                    <input type="hidden" name="opt_id[]" value="<?= $option['id']; ?>">
                    <a href="./api/survey_option_del.php?id=<?= $option['id']; ?>" class="btn btn-danger btn-sm py-0">-</a>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="text-center col-12 mt-3">
            <input class="btn btn-primary mx-1" type="submit" value="修改">
            <input class="btn btn-warning mx-1" type="reset" value="重置">
            <input class="btn btn-warning mx-1" type="button" value="取消修改" onclick="location.href='admin_center.php?do=survey_vote.php'">
        </div>
    </form>
    <script>
        function addOption() {
            let options = document.getElementById('options');
            let num = document.getElementsByClassName('option').length + 1
            let opt = document.createElement("div");
            let label = document.createElement("label");
            let input = document.createElement('input');
            let numNode = document.createTextNode("項目" + num);

            opt.setAttribute("class", "option form-group row col-12")
            label.setAttribute("class", "col-2 text-right");
            input.setAttribute("class", "form-control col-10")
            input.setAttribute("name", "optn[]")
            input.setAttribute("type", "text")

            label.appendChild(numNode)
            opt.appendChild(label);
            opt.appendChild(input);

            options.appendChild(opt)


        }
    </script>