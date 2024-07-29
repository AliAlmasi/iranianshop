<?php
$title = "مدیریت کالا (نهایی)";
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

include("./includes/db_link.php");

$id = $name = $qty = $price = $image = $details = "";

if (
	isset($_POST['id']) && !empty($_POST['id']) &&
	isset($_POST['name']) && !empty($_POST['name']) &&
	isset($_POST['qty']) && !empty($_POST['qty']) &&
	isset($_POST['price']) && !empty($_POST['price']) &&
	isset($_POST['details']) && !empty($_POST['details'])
) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$qty = $_POST['qty'];
	$price = $_POST['price'];
	$image = basename($_FILES['image']['name']);
	$details = $_POST['details'];
} else {
	if (isset($_GET['action']) && $_GET['action'] == "DELETE") {
		$id = $_GET['id'];
		$imagefile = mysqli_fetch_row(mysqli_query($link, "SELECT `image` FROM `products` WHERE `id`='$id'"))[0];
		$query = "DELETE FROM `products` WHERE `id`='$id'";
		if (mysqli_query($link, $query) && unlink("products/$imagefile")) {
			echo "<span class='done'>کالا با موفقیت حذف شد.</span>";
			include("includes/index_link.php");
		} else
			echo "<span class='error'>خطایی در حین حذف کالا رخ داد.</span>";
		exit();
	} else
		exit("<span class='error'>لطفا فرم را تکمیل کنید.</span>");
}

if (isset($_GET['action']) && $_GET['action'] == "EDIT") {
	$id = $_GET['id'];
	$query = "UPDATE `products` SET `id`='$id',
			`name`='$name',
			`qty`='$qty',
			`price`='$price',
			`details`='$details' WHERE `id`='$id'";
	$request = mysqli_query($link, $query);
	if ($request) {
		echo "<span class='done'>کالا با موفقیت ویرایش شد.</span>";
		include("includes/index_link.php");
	} else
		echo "<span class='error'>خطایی در حین ویرایش کالا رخ داد.</span>";
	mysqli_close($link);
	include("includes/footer.php");
	exit();
}

$target_dir = "./products/";
$target_file = $target_dir . $_FILES["image"]["name"];
$upload_code = 1;
$image_filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// $check = getimagesize($_FILES['image']["tmp_name"]);
// if ($check !== false) {
// 	echo "<span class='done'>نوع فایل انتخابی {$check['mime']} است.</span><br>";
// 	$upload_code = 1;
// } else {
// 	echo "<span class='warn'>فایل انتخابی یک عکس نیست</span><br>";
// 	$upload_code = 0;
// }

if (file_exists($target_file)) {
	echo "<span class='warn'>فایلی با همین نام در سرور وجود دارد.</span><br>";
	$upload_code = 0;
}

if ($_FILES['image']['size'] > (500 * 1024)) {
	echo "<span class='warn'>فایل انتخابی بیشتر از ۵۰۰ کیلوبایت است.</span><br>";
	$upload_code = 0;
}

$image_filetype = strtolower($image_filetype);
if ($image_filetype !== "jpg" && $image_filetype !== "png" && $image_filetype !== "jpeg") {
	echo "<span class='warn'>فقط فایل با پسوند های png و jpg و jpeg مجاز هستند.</span><br>";
	$upload_code = 0;
}

if ($upload_code === 0)
	echo "<span class='error'>فایل انتخاب شده به سرور ارسال نشد.</span><br>";
else {
	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
		echo "<span class='done'>فایل {$_FILES['image']['name']} با موفقیت به سرور ارسال شد.</span><br>";
		$upload_code = 1;
	} else {
		echo "<span class='error'>خطایی در ارسال فایل عکس به سرور رخ داد.</span><br>";
		$upload_code = 0;
	}
}

if ($upload_code === 1) {
	include("./includes/db_link.php");
	$query = "INSERT INTO `products`(`id`, `name`, `qty`, `price`, `image`, `details`) VALUES ('$id','$name','$qty','$price','$image','$details')";
	$request = mysqli_query($link, $query);
	if ($request)
		echo "<span class='done'>کالا با موفقیت اضافه شد.</span><br>";
	else
		echo "<span class='error'>خطایی در سمت دیتابیس حین ثبت مشخصات کالا رخ داد.</span><br>";
} else
	echo "<span class='error'>خطایی کلی در ثبت مشخصات کالا رخ داد.</span><br>";

mysqli_close($link);

include('./includes/footer.php');
