<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增投票主題</title>
    <?php include "./layouts/link_css.php"; ?>
    <link rel="stylesheet" href="./css/css.css">

</head>

<body>

    <div class="add_edit">
    <h2> > 新增調查 < </h2>
    <br>
    <div>
    <button onclick='addOption()' class="addOptBtn">新增選項+</button>
    </div>
    <hr>
    <form action="./api/survey_add.php" method="post" enctype="multipart/form-data">
            <div class="">
                <h4>為你的投票選張圖片吧！</h4>
                <div class="file">
                    點擊上傳圖片
                <input type="file" name="img">
                </div>
            </div>
            <hr>
        <div class="form-group row col-12">
            <label class="col-2 text-right">主題</label>
            <input type="text" name="subject" class="form-control col-10">

        </div>
        <div id="options" class="col-12">
            <div class="option form-group row col-12">
                <label class="col-2 text-right">選項1</label>
                <input type="text" name="opt[]" class="form-control col-10">
            </div>

        </div>
        <div class="chkBtn">
            <input type="submit" value="確定新增">
            <input type="reset" value="重置">
            <input type="button" value="取消新增" onclick="location.href='admin_center.php?do=survey_vote'">

        </div>
    </form>
    </div>


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