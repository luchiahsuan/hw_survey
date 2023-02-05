<div class="log_reg">
    <h2> >登入< </h2>
<?php
if(isset($_GET['error'])){
    echo "<div class='text-danger text-center'>";
    echo "帳號或密碼錯誤";
    echo "登入嘗試".$_SESSION['login_try']."次";
    echo "</div>";
}
?>

<form action="./api/chk_user.php" method="post" class="">
    <div class="">
        <label>帳號</label> 
        <input class="" type="text" name="acc" id=""></div>
    <div class="">
        <label>密碼</label>
        <input class="" type="password" name="pw" id=""></div>
    <div class="">
        <input class="" type="submit" value="登入" id="">
    </div>
</form>
</div>