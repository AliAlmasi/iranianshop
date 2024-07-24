<?php
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


$link = mysqli_connect("localhost", "root", "", "iranianshop");

if (mysqli_connect_errno()) {
    exit("<span class='error'>خطایی با شرح زیر رخ داد: " . mysqli_connect_error() . "</span>");
}

$query = "INSERT INTO users (realname, username, password, email, u_type) VALUES
('$realname', '$username', '$password', '$email', 0)";

if (mysqli_query($link, $query) === true) {
    echo ("<span class='done'>کاربر گرامی {$realname} (با نام کاربری {$username})<br>عضویت شما در فروشگاه با موفقیت انجام شد.</span>");
} else {
    echo ("<span class='error'>عضویت شما در فروشگاه انجام نشد.</span>");
}


mysqli_close($link);

include('./includes/footer.php');
