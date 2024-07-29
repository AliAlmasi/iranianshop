<?php
include("includes/header.php");

if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)) {
?>
    <script>
        location.replace('not_logged_in.php');
    </script>
<?php
}

if (
    isset($_POST['id']) && isset($_POST['name']) &&
    isset($_POST['qty']) && isset($_POST['price']) &&
    isset($_POST['total']) && isset($_POST['realname']) &&
    isset($_POST['email']) && isset($_POST['number']) &&
    isset($_POST['address']) && isset($_SESSION['username'])
) {
    $pro_id = $_POST['id'];
    $pro_name = $_POST['name'];
    $pro_qty = $_POST['qty'];
    $pro_price = $_POST['price'];
    $total = $_POST['total'];
    $realname = $_POST['realname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $username = $_SESSION['username'];
}

function random_digits($length)
{
    $result = '';
    for ($i = 0; $i < $length; $i++) {
        $result .= random_int(1, 9);
    }
    return $result;
}

include("includes/db_link.php");

$today = date('y-m-d');
$random_code = random_digits(24);

$query = "INSERT INTO `orders`(
 `id`,
`username`,
`orderdate`,
`pro_id`,
`pro_qty`,
`pro_price`,
`number`,
`address`,
`trackcode`,
`state`) 
VALUES(
'0', 
'$username', 
'$today', 
'$pro_id', 
'$pro_qty', 
'$pro_price', 
'$number', 
'$address',
'$random_code',
'0')";

/* states of order:
    0 = order checking
    1 = order ready to send
    2 = order sent
    3 = order cancelled */
$request = mysqli_query($link, $query);
if ($request) {
    echo "<strong>کاربر گرامی $realname (با نام کاربری $username) سفارش شما:</strong><br>";
    echo "<strong class='done'>کالا $pro_name با کد $pro_id به تعداد $pro_qty عدد</strong><br>";
    echo "<span class='done'>با <strong>مبلغ قابل پرداخت $total تومان</strong> و با قیمت واحد $pro_price تومان</span><br>";
    echo "<span class='done'>برای شما ثبت سفارش شده است.</span><br><br>";
    echo "<span class='done'>کالا به آدرس <br><br><strong>$address</strong><br><br> از طریق پست برای شما ارسال خواهد شد.</span><br><br>";
    echo "<span class='warn'>پس از بررسی و تائید سفارش، با شما تماس خواهیم گرفت.</span><br><br>";
    echo "<span class='warn'>در هنگام تحویل گرفتن مرسوله از مامور از سلامت آن اطمینان حاصل کنید و سپس مبلغ را طبق فاکتور به مامور پست تحویل دهید.</span>";
    $query = "UPDATE products SET qty=qty-'$pro_qty' WHERE id='$pro_id'";
    mysqli_query($link, $query);
} else {
    exit("<span class='error'>خطایی در سمت دیتابیس حین ثبت سفارش رخ داد.</span><br>");
}

mysqli_close($link);

include("includes/footer.php");
