<?php
include('./includes/header.php');


if (
    isset($_POST['username']) && !empty($_POST['username']) &&
    isset($_POST['password']) && !empty($_POST['password'])
){
    $username = $_POST['username'];
    $password = $_POST['password'];
} else {
    exit("لطفا فرم را کامل کنید.");
}

$link = mysqli_connect("localhost", "root", "", "iranianshop");

if (mysqli_connect_errno()){
    exit("خطایی با شرح زیر رخ داد: ". mysqli_connect_error());
}

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$response = mysqli_query($link, $query);

$result = mysqli_fetch_array($response);

if($result){
    echo("کاربر گرامی <b style='color:darkgreen;'>".$username."</b><br>
    شما با موفقیت واردحساب کاربری خود شدید.");
}
else {
    echo("<span style='color:#ac0000'>اطلاعات وارد شده صحیح نمی‌باشد.</span>");
}

mysqli_close($link);

include('./includes/footer.php');
?>