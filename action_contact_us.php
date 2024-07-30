<?php
$title = "ارتباط با ما (نهایی)";
include('includes/header.php');
include('includes/db_link.php');

if (
    isset($_POST['realname']) && !empty($_POST['realname']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['content']) && !empty($_POST['content'])
) {
    $realname = $_POST['realname'];
    $email = $_POST['email'];
    $content = $_POST['content'];
} else {
    exit("<span class='error'>لطفا فرم را تکمیل کنید.</span>");
}

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    exit("<span class='error'>پست اکترونیکی وارد شده صحیح نمیباشد.</span>");
}

$query = "INSERT INTO `messages` (realname, email, content) VALUES
('$realname', '$email', '$content')";

if (mysqli_query($link, $query) === true) {
    echo ("<span class='done'>کاربر گرامی {$realname}<br>پیام شما با موفقیت ثبت شد.</span><br>");
    echo "در اسرع وقت با شما از طریق پست الکترونیکی‌تان تماس خواهیم گرفت.";
    include('includes/index_link.php');
} else {
    echo ("<span class='error'>پیام شما بدلیل مشکلی در دیتابیس ثبت نشد.</span>");
}

mysqli_close($link);
include('./includes/footer.php');
