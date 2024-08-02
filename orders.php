<?php
$title = "سفارشات شما";
include('includes/header.php');

if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)) {
?>
    <script>
        location.replace('not_logged_in.php');
    </script>
<?php
}

if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == "admin") {
?>
    <script>
        location.replace('admin_orders.php');
    </script>
<?php
}

$username = $_SESSION['username'];

include('includes/db_link.php');
$query = "SELECT * FROM `orders` WHERE `username`='$username'";
$request = mysqli_query($link, $query);
?>
<h3>سفارشات شما</h3>
<p> (کاربر گرامی <?= $_SESSION['realname'] ?>)</p>
<table border="1px" cellpadding='5px' style="text-align:center;width:100%" cellspacing=0>
    <thead style="font-weight: 700">
        <tr>
            <td>کد سفارش</td>
            <td>تاریخ سفارش</td>
            <td>کد کالای سفارش</td>
            <td>تعداد سفارش کالا</td>
            <td>قابل پرداخت</td>
            <td>کد پیگیری پست</td>
            <td>وضعیت سفارش</td>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_array($request)) {
        ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["orderdate"] ?></td>
                <td><a href="product.php?id=<?= $row["pro_id"] ?>" target="_blank">
                        <?= $row["pro_id"] ?></a></td>
                <td><?= $row["pro_qty"] ?></td>
                <td title="قیمت پایه: <?= toman($row["pro_price"], true) ?>" style="cursor:help">
                    <?= toman($row["pro_price"] * $row["pro_qty"]) ?>
                    <span title="تومان" style="font-size:16px">ت</span>
                </td>
                <td dir='ltr' style="cursor:pointer" title='<?= $row["trackcode"] ?>' onclick="copy(`<?= $row['trackcode'] ?>`)">
                    <?= trackcode($row["trackcode"]); ?></td>
                <td title="مدیریت سفارش">
                    <?php switch ($row["state"]) {
                        case 0:
                            echo "تحت بررسی";
                            break;
                        case 1:
                            echo "آماده ارسال";
                            break;
                        case 2:
                            echo "ارسال شده";
                            break;
                        case 3:
                            echo "لغو شده";
                            break;
                        default:
                            echo "نامشخص";
                    } ?></td>
            </tr>
        <?php
        }
        ?>
</table>
<script type="text/javascript">
    function copy(string) {
        navigator.clipboard.writeText(string);
        window.alert("کد پیگیری کپی شد.\n" + string);
    }
</script>
<?php
include("./includes/footer.php");
