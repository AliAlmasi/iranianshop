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
	$image = $_FILES['image']['name'];
	$details = $_POST['details'];
} else {
	exit("<span class='error'>لطفا فرم را تکمیل کنید.</span>");
}

$target_dir = "./products/";
$target_file = $target_dir . $_FILES["image"]["name"];
$upload_code = 1;
$image_filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$check = getimagesize($_FILES['image']["tmp_name"]);
if ($check !== false) {
	echo "<span class='done'>نوع فایل انتخابی {$check['mime']} است.</span><br>";
	$upload_code = 1;
} else {
	echo "<span class='warn'>فایل انتخابی یک عکس نیست</span><br>";
	$upload_code = 0;
}

if (file_exists($target_file)) {
	echo "<span class='warn'>فایلی با همین نام در سرور وجود دارد.</span><br>";
	$upload_code = 0;
}

if ($_FILES['image']['size'] > (500 * 1024)) {
	echo "<span class='warn'>فایل انتخابی بیشتر از ۵۰۰ کیلوبایت است.</span><br>";
	$upload_code = 0;
}

$image_filetype = strtolower($image_filetype);
if ($image_filetype !== "jpg" && $image_filetype !== "png") {
	echo "<span class='warn'>فقط فایل با پسوند های png و jpg مجاز هستند.</span><br>";
	$upload_code = 0;
}

if ($upload_code === 0) {
	echo "<span class='error'>فایل انتخاب شده به سرور ارسال نشد.</span>";
} else {
	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
		echo "<span class='done'>فایل {$_FILES['image']['name']} با موفقیت به سرور ارسال شد.</span>";
		$upload_code = 1;
	} else {
		echo "<span class='error'>خطایی در ارسال فایل عکس به سرور رخ داد.</span><br>";
		$upload_code = 0;
	}
}

if ($upload_code === 1) {
	include("./includes/db_link.php");
	$query = "INSERT INTO `products` (`id`, `name`, `qty`, `price`, `image`, `details`)
	VALUES (`{$id}`, `{$name}`, `{$qty}`, `{$price}`, `{$image}`, `{$details}`)";
	$request = mysqli_query($link, $query);
	if ($request) {
		echo "<span class='done'>کالا با موفقیت اضافه شد.</span>";
	} else {
		echo "<span class='error'>خطایی در ثبت مشخصات کالا رخ داد.</span>";
	}
} else {
	echo "<span class='error'>خطایی در ثبت مشخصات کالا رخ داد.</span>";
}

mysqli_close($link);

include('./includes/footer.php');
