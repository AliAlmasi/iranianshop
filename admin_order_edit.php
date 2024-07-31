<?php
$title = "مدیریت سفارش";
include("includes/header.php");
require_once("includes/PersianCalendar.php");

if ((isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["u_type"] === "nonadmin") ||
    !isset($_SESSION["state_login"])
) {
?>
    <script>
        location.replace("./restricted.php");
    </script>
<?php
}

include("includes/db_link.php");

$id = "";
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
?>
    <script>
        location.replace("admin_orders.php");
    </script>
<?php
}

$query = "SELECT * FROM orders WHERE id='$id'";
$request = mysqli_query($link, $query);
$order = mysqli_fetch_array($request);
?>
<form method="post" action="action_admin_order_edit.php?id=<?= $order['id'] ?>" name="action_admin_order_edit">
    <table border=0 style="width:60%;margin:0 auto">
        <tr>
            <td style="width: 40%;">کد سفارش</td>
            <td style="width: 60%;"><span><?= $order['id'] ?></span></td>
        </tr>
        <tr>
            <td>نام کاربری مشتری</td>
            <td><span><?= $order['username'] ?></span></td>
        </tr>
        <tr>
            <td>تاریخ سفارش</td>
            <td><span><?= $order['orderdate'] ?></span></td>
        </tr>
        <tr>
            <td>کد کالای سفارش</td>
            <td><span><?= $order['pro_id'] ?></span></td>
        </tr>
        <tr>
            <td>تعداد سفارش کالا</td>
            <td><span><?= $order['pro_qty'] ?></span></td>
        </tr>
        <tr>
            <td>قابل پرداخت</td>
            <td><span><?= toman($order['pro_price'] * $order['pro_qty'], true) ?></td>
        </tr>
        <tr>
            <td>شماره تماس مشتری</td>
            <td><span><?= $order['number'] ?></span></td>
        </tr>
        <tr>
            <td>کد پیگیری پست</td>
            <td><span><?= $order['trackcode'] ?></span></td>
        </tr>
        <tr>
            <td>وضعیت سفارش <span class="required">*</span></td>
            <td><input class="ltr" required value="<?= $order['state'] ?>" type="text" id="state" name="state" style="text-align:center;font-size:18px" onclick="window.alert('راهنمای کد وضعیت سفارش:\n\n0 = تحت بررسی\n1 = آماده ارسال\n2 = ارسال شده\n3 = لغو شده')"></td>
        </tr>
        <tr>
            <td><br><br></td>
            <td>
                <input type="submit" value="تغییر اطلاعات">
                &nbsp;&nbsp;&nbsp;&nbsp;
            </td>
        </tr>
    </table>
</form>