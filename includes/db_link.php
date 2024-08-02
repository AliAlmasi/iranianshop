<?php
$link = mysqli_connect("localhost", "root", "", "iranianshop");

if (mysqli_connect_errno()) {
	$errorText = strval(mysqli_connect_errno() . ": " . mysqli_connect_error());
?>
	<script type="text/javascript">
		console.error("Database error <?= $errorText ?>");
	</script>
<?php
	exit("<span class='error'>خطایی در سمت دیتابیس با شرح زیر رخ داد:</span><p class='error code'>" . $errorText . "</p>");
} else {
?>
	<script type="text/javascript">
		console.log("✅ MySQL connection OK.");
	</script>
<?php
}
