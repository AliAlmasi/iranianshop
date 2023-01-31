<?php
include('./includes/header.php');


if (
    isset($_GET['username']) && !empty($_GET['username']) &&
    isset($_GET['password']) && !empty($_GET['password'])
) {
    $username = $_GET['username'];
    $password = $_GET['password'];
} else {
    exit("لطفا فرم را کامل کنید.");
}

$link = mysqli_connect("localhost", "root", "", "iranianshop");

if (mysqli_connect_errno()) {
    exit("خطایی با شرح زیر رخ داد: " . mysqli_connect_error());
}

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$response = mysqli_query($link, $query);

$result = mysqli_fetch_array($response);

if ($result) {
    $_SESSION["state_login"] = true;
    $_SESSION["realname"] = $result['$realname'];

    if ($result["type"] == "0")
        $_SESSION["usertype"] = "nonadmin";

    elseif ($result["type"] == "1")
        $_SESSION["usertype"] = "admin";


    echo ("کاربر گرامی <b style='color:darkgreen;'>" . $username . "</b><br>
    شما با موفقیت واردحساب کاربری خود شدید."); // $result["$realname"]
} else {
    echo ("<span style='color:#ac0000'>اطلاعات وارد شده صحیح نمی‌باشد.</span>");
}

mysqli_close($link);

include('./includes/footer.php');
