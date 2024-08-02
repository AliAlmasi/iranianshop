<?php
$title = "عضویت در سایت (نهایی)";
include('./includes/header.php');

if (
    isset($_POST['realname']) && !empty($_POST['realname']) &&
    isset($_POST['username']) && !empty($_POST['username']) &&
    isset($_POST['password']) && !empty($_POST['password']) &&
    isset($_POST['repassword']) && !empty($_POST['repassword']) &&
    isset($_POST['email']) && !empty($_POST['email'])
) {
    $realname = $_POST['realname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $email = $_POST['email'];
} else {
    exit("<span class='error'>لطفا فرم را تکمیل کنید.</span>");
}

if ($password != $repassword) {
    exit("<span class='error'>کلمه عبور و تکرار آن مشابه نیستند.</span>");
}

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    exit("<span class='error'>پست اکترونیکی وارد شده صحیح نمیباشد.</span>");
}

include("./includes/db_link.php");

$query = "INSERT INTO users (realname, username, password, email, user_type) VALUES
('$realname', '$username', '$password', '$email', 0)";

if (mysqli_query($link, $query) === true) {
    echo ("<span class='done'>کاربر گرامی {$realname} (با نام کاربری {$username})<br>عضویت شما در فروشگاه با موفقیت انجام شد.</span>");
    include('includes/index_link.php');
} else {
    echo ("<span class='error'>عضویت شما در فروشگاه انجام نشد.</span>");
}

mysqli_close($link);
include('./includes/footer.php');
