<?php
include("includes/header.php");
include("includes/db_link.php");

$id = 0;
$query = "";
if (isset($_GET['id'])) {
    $id = $_GET["id"];
    setcookie("last-viewed-item", $id);
    $query = "SELECT * FROM products WHERE id = '$id'";
} else {
    if (isset($_COOKIE["last-viewed-item"])) {
        $id = $_COOKIE["last-viewed-item"];
        $query = "SELECT * FROM products WHERE id = '$id'";
        echo "شما درحال مشاهده آخرین کالایی که بازدید کردید هستید.";
        // TODO: add to project_guide
    } else {
        exit("<span class='error'>خطایی در حین دریافت اطلاعات کالا از دیتابیس رخ داده.</span>");
    }
}
$request = mysqli_query($link, $query);
?>
<table style="width: 100%" border='0' cellpadding="10px">
    <tre>
        <?php
        if ($row = mysqli_fetch_array($request)) {
        ?>
            <td style="vertical-align: top; width: 100%; display:flex;flex-direction: column">
                <h2 style='color:saddlebrown;align-self: center'><?php echo $row["name"]; ?></h2>
                <img src='products/<?php echo $row["image"]; ?>' style="align-self: center">
                <br>
                <span style='font-size:18px'>قیمت: <?php echo substr(number_format($row["price"], 2, "", ","), 0, -2); ?> تومان</span> <br>
                <span style='font-size:18px'>موجودی: <?php echo $row["qty"]; ?> </span> <br>
                <span style="font-size: 14px; text-align: justify">توضیحات: <?php echo $row["details"]; ?> </span> <br>
                <br>
                <strong><a href='order.php?id=<?php echo $row["id"]; ?>'>سفارش این محصول &leftarrow;</a></strong>
            </td>
            </td>
        <?php
        }

        ?>
        </tr>

</table>
<?php
include("includes/footer.php");
?>