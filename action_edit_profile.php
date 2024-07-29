<?php
include('./includes/header.php');

if (
    isset($_POST['realname']) && !empty($_POST['realname']) &&
    isset($_POST['username']) && !empty($_POST['username']) &&
    isset($_POST['email']) && !empty($_POST['email'])
) {
    $new_realname = $_POST['realname'];
    $new_username = $_POST['username'];
    $new_email = $_POST['email'];
} else {
    exit("<span class='error'>لطفا فرم را تکمیل کنید.</span>");
}

if (filter_var($new_email, FILTER_VALIDATE_EMAIL) === false) {
    exit("<span class='error'>پست اکترونیکی وارد شده صحیح نمیباشد.</span>");
}

include("./includes/db_link.php");

$query = "UPDATE users SET `realname`='$new_realname',`username`='$new_username', `email`='$new_email' WHERE `username` = '{$_SESSION['username']}'";

if (mysqli_query($link, $query) === true) {
    echo ("<span class='done'>کاربر گرامی {$new_realname} (با نام کاربری {$new_username})<br>اطلاعات شما با موفقیت بروزرسانی شد.</span><br>");
    echo ("<span class='warn'><a href='logout.php'>برای تکمیل بروزرسانی، یک‌بار از نمایه کاربری خارج شوید.</a></span>");
} else {
    echo ("<span class='error'>خطایی در بروزرسانی اطلاعات رخ داد.</span>");
}

mysqli_close($link);

include('./includes/footer.php');
