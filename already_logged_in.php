<?php
$title = "شما قبلا وارد شدید";
include("./includes/header.php");

echo "<span class='error'>کاربر گرامی {$_SESSION["realname"]}<br>شما قبلا ثبت نام کرده و وارد شده‌اید.</span>";
include("includes/index_link.php");

include("./includes/footer.php");
