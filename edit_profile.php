<?php
$title = "بروزرسانی نمایه کاربری";
include('./includes/header.php');

if (!isset($_SESSION["state_login"]) && $_SESSION["state_login"] !== true) {
?>
	<script>
		location.replace("./not_logged_in.php");
	</script>
<?php
}
?>
<form method="post" action="action_edit_profile.php" name="edit_profile">
	<table border="0" style="width: 50%;margin-left: auto;margin-right: auto;">
		<tr>
			<td style="width: 40%;">نام واقعی</td>
			<td style="width: 60%;"><input type="text" id="realname" name="realname" value="<?php echo $_SESSION['realname']; ?>" title="فقط حروف فارسی" /></td>
		</tr>
		<tr>
			<td>نام کاربری</td>
			<td><input type="text" id="username" name="username" value="<?php echo $_SESSION['username']; ?>" class="ltr" title="فقط حروف لاتین" /></td>
		</tr>
		<tr>
			<td>پست الکترونیکی</td>
			<td><input type="text" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" class="ltr" title="اعداد، علائم و حروف لاتین" /></td>
		</tr>
		<tr>
			<td><br><br></td>
			<td>
				<input type="submit" value="تغییر اطلاعات">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" value="پاک">
			</td>
		</tr>
		<tr>
			<td><br></td>
			<td><input type='button' onclick='delete_user()' value='حدف نمایه کاربری' style='color:red'></td>
		</tr>
	</table>
</form>
<script type="text/javascript">
	function delete_user() {
		if (confirm("آیا از حذف نمایه کاربری خود مطمئن هستید؟"))
			location.replace("action_delete_user.php");
	}
</script>