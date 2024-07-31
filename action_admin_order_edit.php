<?php
$title = "مدیریت سفارش (نهایی)";
include("./includes/header.php");

if ((isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["u_type"] === "nonadmin") ||
    !isset($_SESSION["state_login"])
) {
?>
    <script>
        location.replace("restricted.php");
    </script>
<?php
}

include("./includes/db_link.php");

$id = "";
$state = "";
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    if ($_POST['state'] >= 4) {
        exit("<span class='error'>ورودی کد وضعیت سفارش اشتباه است</span><br><br>
            <h3>راهنمای کد وضعیت سفارش:</h3><p>0 = تحت بررسی<br>1 = آماده ارسال<br>2 = ارسال شده<br>3 = لغو شده</p>");
    }
} else {
?>
    <script>
        location.replace("admin_orders.php");
    </script>
<?php
}

$current_state = mysqli_fetch_row(mysqli_query($link, "SELECT `state` FROM `orders` WHERE `id`='$id'"))[0];

if ($current_state != $_POST['state']) {
    $query = "UPDATE `orders` SET `state`={$_POST['state']} WHERE `id`='$id'";
    $request = mysqli_query($link, $query);

    if ($request) {
        $state = "";
        switch ($_POST['state']) {
            case 0:
                $state = "تحت بررسی";
                break;
            case 1:
                $state = "آماده ارسال";
                break;
            case 2:
                $state = "ارسال شده";
                break;
            case 3:
                $state = "لغو شده";
                break;
        }
        echo "<span class='done'>سفارش با کد $id در وضعیت $state قرار گرفت.</span>";
        include('includes/index_link.php');
    } else exit("<br><span class='error'>خطایی در حین بروزرسانی وضعیت سفارش کد $id رخ داد.</span>");
} else
    exit("<br><span class='error'>هیچ تغییری در وضعیت سفارش کد $id بوجود نیامد.</span>");

include('includes/footer.php');
