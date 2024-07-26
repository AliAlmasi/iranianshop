<?php
include('./includes/header.php');

echo "<span class='error'>شما اجازه دسترسی به این صفحه را ندارید.</span><br>";
echo "<span class='warn'>این صفحه فقط برای کاربران سایت قابل مشاهده است.</span><br>";
echo "<span>برای مشاهده این صفحه، باید <a href='register.php'>عضو شوید</a> یا <a href='login.php'>وارد حساب کاربری خود شوید</a>.</span><br>";
echo "<br><br><a href='index.php'>به صفحه اصلی بروید <span style='font-weight:bold;font-size:22px'>&leftarrow;</span></a>";

include("./includes/footer.php");
