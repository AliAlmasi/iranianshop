<?php
include('./includes/header.php');

if (
    isset($_POST['username']) && !empty($_POST['username']) &&
    isset($_POST['password']) && !empty($_POST['password'])
) {
    $username = $_POST['username'];
    $password = $_POST['password'];
} else {
    exit("لطفا فرم را کامل کنید.");
}

$link = mysqli_connect("localhost", "root", "", "iranianshop");

if (mysqli_connect_errno()) {
    exit("خطایی با شرح زیر رخ داد: " . mysqli_connect_error());
}

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$request = mysqli_query($link, $query);
$result = mysqli_fetch_array($request);

if ($result) {
    $_SESSION["state_login"] = true;
    $_SESSION["realname"] = $result["realname"];

    if ($result["u_type"] == 0)
        $_SESSION["u_type"] = "nonadmin";

    elseif ($result["u_type"] == 1)
        $_SESSION["u_type"] = "admin";


    echo ("کاربر گرامی <b style='color:darkgreen;'>" . $result["realname"] . "</b> با نام کاربری <b style='color:darkgreen;'>" . $result["username"] . "</b><br>
    شما با موفقیت واردحساب کاربری خود شدید.");
    echo "<br><br><a href='index.php'>به صفحه اصلی بروید</a>";
} else {
    echo ("<span style='color:#ac0000'>اطلاعات وارد شده صحیح نمی‌باشد.</span>");
}

mysqli_close($link);

include('./includes/footer.php');
