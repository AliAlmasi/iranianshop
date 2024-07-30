<?php
$title = "ورود به سایت لازم است";
include('./includes/header.php');

echo "<span class='error'>شما اجازه دسترسی به این صفحه را ندارید.</span><br>";
echo "<span class='warn'>این صفحه فقط برای کاربران سایت قابل مشاهده است.</span><br>";
echo "<span>برای مشاهده این صفحه، باید <a href='register.php'>عضو سایت شوید</a> یا <a href='login.php'>وارد نمایه کاربری خود شوید</a>.</span><br>";
include("includes/index_link.php");

include("./includes/footer.php");
