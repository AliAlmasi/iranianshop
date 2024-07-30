<?php
$title = "سفارش کالا";
include("includes/header.php");
include("includes/db_link.php");

$id = 0;
$query = "";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM products WHERE id = '$id'";
} else {
    if (isset($_COOKIE["last-viewed-item"])) {
        $id = $_COOKIE["last-viewed-item"];
        $query = "SELECT * FROM products WHERE id = '$id'";
    } else {
        exit("<span class='error'>خطایی در حین دریافت اطلاعات کالا از دیتابیس رخ داده.</span>");
    }
}

if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)) {
?>
    <script>
        location.replace('not_logged_in.php');
    </script>
<?php
}
$request = mysqli_query($link, $query);
?>
<form name="order" action="action_order.php" method="POST">
    <table style="width: 100%;" border='1px'>
        <tr>
            <td style="width: 60%;">
                <?php

                if ($row = mysqli_fetch_array($request)) {
                ?>
                    <br>

                    <table style="width: 100%;" border="0">
                        <tr>
                            <td style="width: 22%;">کد کالا</td>
                            <td style="width: 78%;"> <input type="text" id="id" name="id" value="
<?php echo ($id); ?>" class="readonly" readonly> </td>
                        </tr>
                        <tr>
                            <td>نام کالا</td>
                            <td> <input type="text" id="name" name="name" value="
<?php echo ($row['name']); ?>" class="readonly" readonly> </td>
                        </tr>
                        <tr>
                            <td>تعداد سفارش <span class="required">*</span></td>
                            <td> <input type="text" class="ltr" id="qty" name="qty" onchange="calc_price();"> </td>
                        </tr>
                        <tr>
                            <td>قیمت واحد کالا</td>
                            <td><input type="text" class="ltr readonly" id="price" name="price" value="<?php echo $row['price'];  ?>" readonly> تومان</td>
                        </tr>
                        <tr>
                            <td>مبلغ قابل پرداخت <span class="required"> *</span></td>
                            <td>
                                <input type="text" class="ltr readonly" id="total" name="total" value="0" readonly> تومان
                            </td>
                        </tr>
                        <!--cal script-->
                        <script type="text/javascript">
                            function calc_price() {
                                var qty = <?php echo $row['qty']; ?>;
                                var price = document.getElementById('price').value;
                                var count = document.getElementById('qty').value;
                                if (count > qty) {
                                    alert('تعداد موجودی انبار کمتر از درخواست شما است !');
                                    document.getElementById('qty').value = 0;
                                    count = 0;
                                }
                                if (count == 0 || count == '')
                                    total = 0;
                                else
                                    total = count * price;
                                document.getElementById('total').value = total;
                            }
                        </script>

                        <?php
                        $query = "SELECT * FROM `users` WHERE username='{$_SESSION['username']}'";
                        $request = mysqli_query($link, $query);
                        $user_row =  mysqli_fetch_array($request);
                        ?>
                        <tr>
                            <td><br><br><br></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">نام خریدار</td>
                            <td style="width: 40%;">
                                <input type="text" id="realname" name="realname" value="<?php echo $user_row['realname']; ?>" class="readonly">
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">ایمیل</td>
                            <td style="width: 40%;">
                                <input type="text" id="email" name="email" value="<?php echo $user_row['email']; ?>" class="ltr readonly">
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">شماره همراه <span class="required">*</span></td>
                            <td style="width: 40%;">
                                <input type="text" id="number" name="number" value="" class="ltr">
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">آدرس پستی گیرنده <span class="required">*</span></td>
                            <td style="width: 40%;">
                                <textarea id="address" name="address" cols="30" rows="4" wrap="virtual"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><br><br><br><br></td>
                            <td><input type="button" value="خرید کالا" onclick="check_input();"></td>
                        </tr>
                    </table>
            </td>
            <td>
                <!-- script -->
                <script type="text/javascript">
                    function check_input() {
                        var r = confirm("از اطلاعات وارد شده اطمینان دارید ؟");
                        if (r == true) {
                            var validation = true;
                            var count = document.getElementById('qty').value;
                            var number = document.getElementById('number').value;
                            var address = document.getElementById('address').value;
                            if (count == 0 || count == '')
                                validation = false;
                            if (number.length < 11)
                                validation = false;
                            if (address.length < 15)
                                validation = false;

                            if (validation)
                                document.order.submit();
                            else
                                alert('برخی از ورودی ها فرم سفارش کالا به درستی پر نشده اند.');

                        }
                    }
                </script>


                <table>
                    <tr>
                        <td style="vertical-align:top;width:33%;">
                            <h3 style="color:saddlebrown;margin: 10px 0;"> <?php echo $row['name']; ?> </h3>
                            <img src="products/<?php echo $row['image']; ?>" width="250px" height="120px">
                            <br>
                            <span>قیمت: <?php echo substr(number_format($row["price"], 2, "", ","), 0, -2); ?> تومان</span>
                            <br>
                            <span>تعداد موجودی: <?php echo ($row['qty']); ?></span>
                            <br>
                            <span style="font-size: 14px; text-align: justify">توضیحات: <?php
                                                                                        $count = strlen($row['details']);
                                                                                        echo (substr($row['details'], 0, (int)($count / 4)) . " ..."); ?></span>
                            <br><br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
<?php
                }
                include('includes/footer.php');
?>