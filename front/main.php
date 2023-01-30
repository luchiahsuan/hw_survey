<h1 class="text-center">最新投票選項</h1>
<ul class="list-group">
<li class='list-group-item list-group-item-action d-flex text-center bg-info text-white'>
    <div class='col-md-10'>標題</div>
    <div class='col-md-2'>已投票人數</div>
</li>    
<?php


$rows=all('survey_subject'," ORDER by `active` desc");

$hot=q("SELECT `id` FROM `survey_subject` ORDER BY `vote` desc");
foreach($rows as $row){
    ?>
    <li class='list-group-item list-group-item-action d-flex'>
    <div class='col-md-10'>
    <a href='index.php?do=news_detail&id=<?= $row['id'] ;?>'>
    <?= $row['subject'];?>
    </a>
    </div>
    <div class='col-md-2 text-center'>
    <?= $row['vote'];?>
    </div>
    </li>

    <?php
}

?>

</ul>