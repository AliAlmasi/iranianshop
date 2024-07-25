<?php
$link = mysqli_connect("localhost", "root", "", "iranianshop");

if (mysqli_connect_errno()) {
	exit("<span class='error'>خطایی با شرح زیر رخ داد:</span><p class='error'>" . mysqli_connect_errno() . ": " . mysqli_connect_error() . "</p>");
} else {
?>
	<script>
		console.log("MySQL connection OK. ✅");
	</script>
<?php
}
