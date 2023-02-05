<?php include_once "../db/base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票選項</title>
    <?php include "../layouts/link_css.php";?>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <?php
if(isset($_GET['id'])){
    $survey=find("survey_subject",$_GET['id']);
    $options=all("survey_options",['subject_id'=>$_GET['id']]);
}else{
    $error="請回到問卷首頁選擇正確的題目來進行";
}

?>
<h3 class="text-center font-weight-bold"><?=$survey['subject'];?></h3>

<form action="../api/survey_vote.php" method="post">
<div class="col-8 mx-auto mt-4">
    <?php
    if(isset($error)){
        echo "<span style='color:red'>".$error."</span>";
    }else{
        foreach($options as $option){
    ?>
    <div class="input-group" style="margin-top:-1px">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <input type="radio" name="option" value="<?=$option['id'];?>">
            </div>
        </div>
        <div class="form-control">
            <?=$option['opt'];?>
        </div>
    </div>   
    <?php
        }
    }
    ?>
</div>
<?php
if(!isset($error)){
?>
    <div class="text-center mt-4">
        <input type="submit" class="btn btn-primary mx-1" value="投票">
        <!-- <input type="hidden" name="subject_id" value="<?=$survey['id'];?>"> -->
        <a href="./survey.php" class="btn btn-warning mx-1">取消返回</a>
    </div>
<?php
}
?>
</form>