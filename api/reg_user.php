<?php
include "../db/base.php";

$acc=trim(strip_tags($_POST['acc']));
$pw=trim($_POST['pw']);
$name=trim($_POST['name']);
$email=trim($_POST['email']);

$sql="insert into `users` (`acc`,`pw`,`name`,`email`) values('$acc','$pw','$name','$email')";

if($acc!='' && $pw!='' &&  $name!='' &&  $email!=''){
    echo "acc=>".$acc;
    echo "<br>";
    echo "pw=>".$pw;
    echo "<br>";
    echo "name=>".$name;
    echo "<br>";
    echo "email=>".$email;
    echo "<br>";
    $pdo->exec($sql);

    header("location:../index.php?do=login");
}else{
    echo "請勿留有空白！";
?>
<input type="button" value="回註冊頁" onclick="location.href='../index.php?do=reg'">


<?php
};
?>
