<?php
include_once "../db/base.php";

$data = [];
echo $_FILES['img']['tmp_name'];
$exp=explode(".",$_FILES['img']['name']);
$sub=array_pop($exp);
$img_name = date("Y-m-d-hi-s") . "." . $sub;

if ($_FILES['img']['error'] == 0) {

    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$img_name);
} else {
    echo "請重選一張投票配圖";
    echo $_FILES['img']['error'];
}

$subject = [
    'subject' => $_POST['subject'],
    'img_name' => $img_name,
    'type' => 1,
    'vote' => 0,
    'active' => 0
];


insert('survey_subject', $subject);

$subject_id = find('survey_subject', ['subject' => $_POST['subject']])['id'];

if (isset($_POST['opt'])) {
    foreach ($_POST['opt'] as $option) {
        if ($option != '') {
            $tmp = [
                'opt' => $option,
                'subject_id' => $subject_id,
                'vote' => 0
            ];
            dd($tmp);
            insert('survey_options', $tmp);
        }
    }
}


header("location:../admin_center.php?do=survey");
