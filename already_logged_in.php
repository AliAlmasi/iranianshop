<?php

include("./includes/header.php");

echo "<span class='error'>کاربر گرامی {$_SESSION["realname"]}<br>شما قبلا ثبت نام کرده و وارد شده‌اید.</span>";
echo "<br><br><a href='index.php'>به صفحه اصلی بروید</a>";

include("./includes/footer.php");
