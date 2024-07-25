<?php
include('./includes/header.php');

if ((isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["u_type"] === "nonadmin") ||
	!isset($_SESSION["state_login"])
) {
?>
	<script>
		location.replace("./restricted.php");
	</script>
<?php
}

include('./includes/db_link.php');

$query = "SELECT * FROM `users` WHERE `username` = {$_SESSION["username"]}";
// $request = mysqli_query($link, $query);
// $response = mysqli_fetch_array($request);
?>
<form method="post" action="action_edit_profile.php" name="edit_profile">
	<table border="0" style="width: 50%;margin-left: auto;margin-right: auto;">
		<tr>
			<td style="width: 40%;">نام واقعی <span style="color:#ac0000;">*</span></td>
			<td style="width: 60%;"><input type="text" id="realname" name="realname" title="فقط حروف فارسی" /></td>
		</tr>
		<tr>
			<td>نام کاربری <span class="required">*</span></td>
			<td><input type="text" id="username" name="username" class="ltr" title="فقط حروف لاتین" /></td>
		</tr>
		<tr>
			<td>کلمه عبور <span class="required">*</span></td>
			<td><input type="password" id="password" name="password" class="ltr" title="اعداد، علائم و حروف لاتین" /></td>
		</tr>
		<tr>
			<td>تکرار کلمه عبور <span class="required">*</span></td>
			<td><input type="password" id="repassword" name="repassword" class="ltr" title="اعداد، علائم و حروف لاتین" /></td>
		</tr>
		<tr>
			<td>پست الکترونیکی<span class="required">*</span></td>
			<td><input type="text" id="email" name="email" class="ltr" title="اعداد، علائم و حروف لاتین" /></td>
		</tr>
		<tr>
			<td><br><br></td>
			<td>
				<input type="submit" value="تغییر اطلاعات">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" value="پاک">
			</td>
		</tr>
	</table>
</form>