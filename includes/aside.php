<?php
if (isset($_SESSION['state_login']) && $_SESSION['state_login'] && $_SESSION['u_type'] == "admin") {
    echo "<h4>پیوند های مدیر</h4>";
    echo "<ul style='list-style:square;font-weight:700'>";
    echo "<li><a href='admin_orders.php'>سفارشات کاربران</a></li>";
    echo "<li><a href='admin_messages.php'>پیام های کاربران</a></li>";
    echo "</ul>";
    echo "پیوند های کاربران عادی";
}
echo "<strong>";
echo "<ul style='list-style:square'>";
echo "<li><a href='http://github.com/alialmasi/iranianshop' target='_blank'>مخزن کد منبع</a></li>";
echo "<li><a href='https://parchlinux.com'>پارچ لینوکس</a></li>";
echo "</ul>";
echo "</strong>";
