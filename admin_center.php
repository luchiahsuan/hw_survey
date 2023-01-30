<?php
include "./db/base.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後台管理中心</title>
    <?php include "./layouts/link_css.php";?>
    <link rel="stylesheet" href="./css/back.css">

</head>
<body>
<?php
    include "./layouts/header.php";
?>
<main class="container">

    <?php
$do=$_GET['do']??'main';
$file='./back/'.$do.".php";
if(file_exists($file)){
    include $file;
}else{
    // include "./back/survey_vote.php";
?>
    <h3>
        <a href="./back/survey_vote.php">投票資訊管理</a>
        </h3>
        
<?php
}
?>
</main>
<?php include "./layouts/scripts.php";?>
</body>
</html>