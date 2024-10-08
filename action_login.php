<?php
$title = "ورود به سایت (نهایی)";
include('./includes/header.php');

if (
    isset($_POST['username']) && !empty($_POST['username']) &&
    isset($_POST['password']) && !empty($_POST['password'])
) {
    $username = $_POST['username'];
    $password = $_POST['password'];
} else {
    exit("<span class='error'>لطفا فرم را تکمیل کنید.</span>");
}

include("./includes/db_link.php");

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$request = mysqli_query($link, $query);
$result = mysqli_fetch_array($request);

if ($result) {
    $_SESSION["state_login"] = true;
    $_SESSION["realname"] = $result["realname"];
    $_SESSION["username"] = $result["username"];
    $_SESSION["email"] = $result["email"];

    if ($result["user_type"] == 0)
        $_SESSION["user_type"] = "nonadmin";

    elseif ($result["user_type"] == 1)
        $_SESSION["user_type"] = "admin";


    echo ("<span class='done'>کاربر گرامی {$result["realname"]} (با نام کاربری {$result["username"]}) <br> شما با موفقیت وارد نمایه کاربری خود شدید.</span>");

    if ($_SESSION["user_type"] === "admin") {
        echo "<br><br><span class='warn'>شما یک مدیر هستید.</span>";
    }

    include("includes/index_link.php");
} else {
    echo ("<span class='error'>اطلاعات وارد شده صحیح نمی‌باشد.</span>");
}

mysqli_close($link);

include('./includes/footer.php');
