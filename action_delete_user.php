<?php
$title = "حذف نمایه کاربری (نهایی)";
include('./includes/header.php');

if (!isset($_SESSION["state_login"]) && $_SESSION["state_login"] != true) {
?>
    <script type="text/javascript">
        location.replace('not_logged_in.php');
    </script>
<?php
}

include("./includes/db_link.php");

$query = "DELETE FROM `users` WHERE username = '" . $_SESSION["username"] . "'";

if (mysqli_query($link, $query) === true) {
    session_unset();
    session_destroy();
    echo ("<span class='done'>نمایه کاربری شما حذف شد.</span><br>");
    echo ("<span class='warn'><a href='index.php'>برای تکمیل فرآیند، اینجا کلیک کنید.</a></span>");
} else {
    echo ("<span class='error'>خطایی در سمت دیتابیس رخ داد.</span>");
}

mysqli_close($link);

include('./includes/footer.php');
