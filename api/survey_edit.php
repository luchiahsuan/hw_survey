<?php
include_once "../db/base.php";


$file=find("survey_subject",$_POST['img']);

update('survey_subject',['subject'=>$_POST['subject']],$_POST['subject_id']);

$data = [];
$data = $_POST['subject_id'];

$exp=explode(".",$_POST['img']);
$sub=array_pop($exp);
$img_name = date("Y-m-d-hi-s") . "." . $sub;

echo $file;
echo $_POST['subject_id'];
// echo $_FILES['img'];

if(!empty($_FILES['img_name']['tmp_name'])){
    move_uploaded_file($_FILES['img_name']['tmp_name'],"../upload/".$img_name);
    $_POST['img_name']=$_FILES['img_name']['name'];
    update('survey_subject',['img_name'=>$img_name],$_POST['subject_id']);
} else {
     echo "請重選一張投票配圖";
     echo $_POST['img_name']['error'];
 }

// if ($_FILES['img']['error'] == 0) {

// echo $img_name;
// echo $_POST['img'];

//     move_uploaded_file($_POST['img'],"../upload/".$img_name);

//     update('survey_subject',['img_name'=>$img_name],$_POST['subject_id']);
// } else {
//     echo "請重選一張投票配圖";
//     echo $_POST['img']['error'];
// }


foreach($_POST['opt_id'] as $idx => $id){
    $option=find('survey_options',$id);
    update('survey_options',['opt'=>$_POST['opt'][$idx]],$id);
}

if(isset($_POST['optn'])){
    foreach($_POST['optn'] as $option){
        if($option!=''){
            $tmp=['opt'=>$option,
                  'subject_id'=>$_POST['subject_id'],
                  'vote'=>0];
            dd($tmp);
            insert('survey_options',$tmp);
        } 
    }
}

header("location:../admin_center.php?do=survey");

?>