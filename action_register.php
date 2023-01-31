<?php
include('./includes/header.php');


if (
    isset($_GET['realname']) && !empty($_GET['realname']) &&
    isset($_GET['username']) && !empty($_GET['username']) &&
    isset($_GET['password']) && !empty($_GET['password']) &&
    isset($_GET['repassword']) && !empty($_GET['repassword']) &&
    isset($_GET['email']) && !empty($_GET['email'])
) {
    $realname = $_GET['realname'];
    $username = $_GET['username'];
    $password = $_GET['password'];
    $repassword = $_GET['repassword'];
    $email = $_GET['email'];
} else {
    exit("بعضی از فیلد ها خالی هستند.");
}

if ($password != $repassword) {
    exit("کلمه عبور و تکرار آن مشابه نیستند.");
}

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    exit("پست اکترونیکی وارد شده صحیح نمیباشد.");
}


$link = mysqli_connect("localhost", "root", "", "iranianshop");

if (mysqli_connect_errno()) {
    exit("خطایی با شرح زیر رخ داد: " . mysqli_connect_error());
}

$query = "INSERT INTO users (realname, username, password, email, u_type) VALUES
('$realname', '$username', '$password', '$email', '0')";

if (mysqli_query($link, $query) === true) {
    echo ("<b style='color: darkgreen;'>" . $realname . "</b> گرامی<br>عضویت شما با نام کاربری 
    <b style='color: darkgreen'>" . $username . "</b> در فروشگاه با موفقیت انجام شد.");
} else {
    echo ("<span style='color:#ac0000'>عضویت شما در فروشگاه انجام نشد.</span>");
}


mysqli_close($link);

include('./includes/footer.php');
