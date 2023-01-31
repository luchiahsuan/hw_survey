<?php
include_once "../db/base.php";

$id=$_GET['id'];


del("survey_subject",$id);

del("survey_options",['subject_id'=>$id]);

header("location:../admin_center.php?do=survey");
?>