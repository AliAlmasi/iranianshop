<?php
$title = "مدیریت سفارشات";
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

$query = "SELECT * FROM orders";
$request = mysqli_query($link, $query);
?>
<h3>راهنمای کد وضعیت سفارش:</h3>
<p>0 = تحت بررسی<br>1 = آماده ارسال<br>2 = ارسال شده<br>3 = لغو شده</p>
<table border="1px" cellpadding='5px' style="text-align:center;width:100%" cellspacing=0>
	<thead style="font-weight: 700">
		<tr>
			<td>کد سفارش</td>
			<td>نام کاربری مشتری</td>
			<td>تاریخ سفارش</td>
			<td>کد کالای سفارش</td>
			<td>تعداد سفارش کالا</td>
			<td>قابل پرداخت</td>
			<td>شماره تماس مشتری</td>
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
				<td><?= $row["username"] ?></td>
				<td><?= $row["orderdate"] ?></td>
				<td><a href="product.php?id=<?= $row["pro_id"] ?>" target="_blank">
						<?= $row["pro_id"] ?></a></td>
				<td><?= $row["pro_qty"] ?></td>
				<td title="قیمت پایه: <?= toman($row["pro_price"], true) ?>" style="cursor:help">
					<?= toman($row["pro_price"] * $row["pro_qty"]) ?>
					<span title="تومان" style="font-size:16px">ت</span>
				</td>
				<td><?= $row["number"] ?></td>
				<td dir='ltr' style="cursor:pointer" title='<?= $row["trackcode"] ?>' onclick="copy(`<?= $row['trackcode'] ?>`)">
					<?= mb_substr($row["trackcode"], 0, 4) . "..." . mb_substr($row["trackcode"], -6) ?></td>
				<!-- states of order:
				0 = order checking
				1 = order ready to send
				2 = order sent
				3 = order cancelled -->
				<td title="مدیریت سفارش"><a href="admin_order_edit.php?id=<?= $row["id"] ?>">
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
						} ?></a></td>
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
