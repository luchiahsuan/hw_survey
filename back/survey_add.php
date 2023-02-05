<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增投票主題</title>
    <?php include "./layouts/link_css.php"; ?>
    <link rel="stylesheet" href="./css/back.css">

</head>

<body>

    <h3 class="text-center">新增調查</h3>

    <?php
    include "main_upload.php";
    ?>
    <button onclick='addOption()' class="btn btn-success btn-sm py-0 mx-auto" style="font-size:1.2rem">新增選項+</button>
    <form action="./api/survey_add.php" method="post" class="col-10 mx-auto d-flex flex-wrap justify-content-end">
        <div class="form-group row col-12">
            <label class="col-2 text-right">主題</label>
            <input type="text" name="subject" class="form-control col-10">

        </div>
        <div id="options" class="col-11">
            <div class="option form-group row col-12">
                <label class="col-2 text-right">項目1</label>
                <input type="text" name="opt[]" class="form-control col-10">
            </div>

        </div>
        <div class="text-center col-12 mt-3">
            <input class="btn btn-primary mx-1" type="submit" value="確定新增">
            <input class="btn btn-warning mx-1" type="reset" value="重置">
            <input class="btn btn-warning mx-1" type="button" value="取消新增" onclick="location.href='admin_center.php?do=survey_vote'">

        </div>
    </form>


    <script>
        function addOption() {
            let options = document.getElementById('options');
            let num = document.getElementsByClassName('option').length + 1

            let opt = document.createElement("div");
            let label = document.createElement("label");
            let input = document.createElement('input');
            let numNode = document.createTextNode("選項" + num);

            opt.setAttribute("class", "option form-group row col-12")
            label.setAttribute("class", "col-2 text-right");
            input.setAttribute("class", "form-control col-10")
            input.setAttribute("name", "opt[]")
            input.setAttribute("type", "text")

            label.appendChild(numNode)
            opt.appendChild(label);
            opt.appendChild(input);

            options.appendChild(opt)

        }
    </script>