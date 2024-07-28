<?php
include("./includes/header.php");

if ((isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["u_type"] === "nonadmin") ||
	!isset($_SESSION["state_login"])
) {
?>
	<script>
		location.replace("./restricted.php");
	</script>
<?php
}
?>
<br>
<form name='add_product' action='action_admin_products.php' method='post' enctype="multipart/form-data">
	<table border="0" style="width:100%;margin:0 auto;">
		<tr>
			<td style='width:22%'>کد کالا <span class="required">*</span></td>
			<td style='width:78%'><input type="text" id="id" name="id" class="ltr"></td>
		</tr>
		<tr>
			<td>نام کالا <span class="required">*</span></td>
			<td><input type="text" id="name" name="name"></td>
		</tr>
		<tr>
			<td>موجودی کالا <span class="required">*</span></td>
			<td><input type="text" id="qty" name="qty" class="ltr"></td>
		</tr>
		<tr>
			<td>قیمت کالا <span class="required">*</span></td>
			<td><input type="text" id="price" name="price" class="ltr"> <span style="font-size:14px;">تومان</span></td>
		</tr>
		<tr>
			<td>عکس کالا <span class="required">*</span></td>
			<td><input type="file" id="image" name="image" size="30"></td>
		</tr>
		<tr>
			<td>توضیحات کالا <span class="required">*</span></td>
			<td><textarea style="font-size:14px" id="details" name="details" cols="30" rows="7" wrap="virtual"></textarea></td>
		</tr>
		<tr>
			<td><br><br></td>
			<td><input type="submit" value="افزودن کالا">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="پاک"></td>
		</tr>
	</table>
</form>
<?php
include("./includes/footer.php");
?>