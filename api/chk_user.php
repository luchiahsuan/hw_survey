<?php
include "../db/base.php";

session_start();

$acc=$_POST['acc'];
$pw=$_POST['pw'];

$sql="select count(`id`) from `users` where `acc`='$acc' && `pw`='$pw' ";
$chk=$pdo->query($sql)->fetchColumn();

if($chk==1){
    $sql="select `id`,`acc`,`name`,`last_login` from `users` where `acc`='$acc' && `pw`='$pw' ";
    $user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    if($acc!='admin'){
        header("location:../front/survey.php");
        
    }else{
        header("location:../admin_center.php");

    }
    
}    else{
    if(isset($_SESSION['login_try'])){
        $_SESSION['login_try']++;
        
    }else{
        $_SESSION['login_try']=1;
    }

    header("location:../index.php?do=login&error=login");
}
