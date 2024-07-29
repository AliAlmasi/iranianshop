<?php
$title = "مدیریت کالا";
include("includes/header.php");

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

$url = $id = $name = $qty = $price = $image = $details = "";
$btn_caption = "افزودن کالا";

if (isset($_GET['action']) && $_GET['action'] == "EDIT") {
	$id = $_GET['id'];
	$query = "SELECT * FROM products WHERE id = '$id'";
	$request = mysqli_query($link, $query);
	if ($row = mysqli_fetch_array($request)) {
		$name = $row['name'];
		$qty = $row['qty'];
		$price = $row['price'];
		$image = $row['image'];
		$details = $row['details'];
		$url = "?id=$id&action=EDIT";
		$btn_caption = "ویرایش کالا";
	}
}
?>
<h2>افزودن کالای جدید</h2>
<form name='add_product' action='action_admin_products.php<?php if (!empty($url)) echo $url ?>' method='post' enctype="multipart/form-data">
	<table border="0" style="width:100%;margin:0 auto;">
		<tr>
			<td style='width:22%'>کد کالا <span class="required">*</span></td>
			<td style='width:78%'><input type="text" id="id" name="id" class="ltr" value="<?= $id ?>"></td>
		</tr>
		<tr>
			<td>نام کالا <span class="required">*</span></td>
			<td><input type="text" id="name" name="name" value="<?= $name ?>"></td>
		</tr>
		<tr>
			<td>موجودی کالا <span class="required">*</span></td>
			<td><input type="text" id="qty" name="qty" class="ltr" value="<?= $qty ?>"></td>
		</tr>
		<tr>
			<td>قیمت کالا <span class="required">*</span></td>
			<td><input type="text" id="price" name="price" class="ltr" value="<?= $price ?>"> <span style="font-size:14px;">تومان</span></td>
		</tr>
		<tr>
			<td>عکس کالا <span class="required">*</span></td>
			<td><input type="file" id="image" name="image" size="30">
				<?php if (!empty($image)) echo "<img src='products/$image' width='80' height='40'>" ?>
			</td>
		</tr>
		<tr>
			<td>توضیحات کالا <span class="required">*</span></td>
			<td><textarea style="font-size:14px" id="details" name="details" cols="30" rows="4" wrap="virtual"><?= $details ?></textarea></td>
		</tr>
		<tr>
			<td><br><br></td>
			<td><input type="submit" value="<?= $btn_caption ?>">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="پاک"></td>
		</tr>
	</table>
</form>
<h2>مدیریت کالاها</h2>
<?php
$query = "SELECT * FROM products";
$request = mysqli_query($link, $query);
?>
<table border="1px" cellpadding='5px' style="text-align:center;width:100%">
	<thead>
		<tr>
			<td>کد کالا</td>
			<td>نام کالا</td>
			<td>موجودی کالا</td>
			<td>فیمت کالا</td>
			<td>تصویر کالا</td>
			<td>ابزار مدیریتی</td>
		</tr>
	</thead>
	<tbody>
		<?php
		while ($row = mysqli_fetch_array($request)) {
		?>
			<tr>
				<td><?= $row["id"] ?></td>
				<td><?= $row["name"] ?></td>
				<td><?= $row["qty"] ?></td>
				<td><?= $row["price"] ?></td>
				<td><img src="products/<?= $row["image"] ?>" width="100px" height="50px"></td>
				<td>
					<a href="action_admin_products.php?id=<?= $row["id"] ?>&action=DELETE">حذف</a>
					&nbsp;|&nbsp;
					<a href="admin_products.php?id=<?= $row["id"] ?>&action=EDIT">ویرایش</a>
				</td>
			</tr>
		<?php
		}
		?>
</table>
<?php
include("./includes/footer.php");
?>