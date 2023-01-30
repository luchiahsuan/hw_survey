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
    include "../layouts/header.php";
?>

<h3 class="text-center">進行中的意見調查</h3>
<ul class="list-group col-md-10 m-auto">
    <li class="d-flex text-center list-group-item list-group-item-info list-group-item-action">
        <div class="col-8">主題</div>
        <div class="col-2">參與數</div>
        <div class="col-2">操作</div>
    </li>

<?php 
    $surveys=all("survey_subject",['active'=>1]);
    foreach($surveys as $survey){
?>
    <li class="d-flex list-group-item list-group-item-light list-group-item-action">
        <div class="col-8 font-weight-bolder" style="font-size:1.25rem">
            <?=$survey['subject'];?>
        </div>
        <div class="col-2 text-center">
            <?=$survey['vote'];?>
        </div>
        <div class="col-2 text-center">
            <a href="index.php?do=survey_item&id=<?=$survey['id'];?>" class="btn btn-sm btn-success mx-1">投票</a>
            <a href="index.php?do=survey_result&id=<?=$survey['id'];?>" class="btn btn-sm btn-info mx-1">結果</a>
        </div>
    </li>
<?php 
    }

?>
</ul>