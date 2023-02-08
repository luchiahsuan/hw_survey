<br><br>
<h2>最新投票選項</h2>
<ul>
<li class="survey_list_1">
    <div class="survey_list_name">主題</div>
    <div class="survey_list_vote_3">已投票人數</div>
</li>    
<?php


$rows=all('survey_subject'," ORDER by `active` desc");

$hot=q("SELECT `id` FROM `survey_subject` ORDER BY `vote` desc");
foreach($rows as $row){
    if($row['active']==1){
    ?>
    <li class='survey_list'>
    <div class='survey_list_name' >
    <a href='index.php?do=news_detail&id=<?= $row['id'] ;?>'style="color: black;">
    <?= $row['subject'];?>
    </a>
    </div>
    <div class='survey_list_vote_3'>
    <?= $row['vote'];?>
    </div>
    <div class='survey_list_img' >
    <img src="./upload/<?= $row['img_name'];?>" >
        </div>

    </li>

    <?php
}
}
?>
    <?php include "./time_box.php"; ?>


</ul>
