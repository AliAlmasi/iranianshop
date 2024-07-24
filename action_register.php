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
('$realname', '$username', '$password', '$email', 0)";

if (mysqli_query($link, $query) === true) {
    echo ("<b style='color: darkgreen;'>" . $realname . "</b> گرامی<br>عضویت شما با نام کاربری 
    <b style='color: darkgreen'>" . $username . "</b> در فروشگاه با موفقیت انجام شد.");
} else {
    echo ("<span style='color:#ac0000'>عضویت شما در فروشگاه انجام نشد.</span>");
}


mysqli_close($link);

include('./includes/footer.php');
