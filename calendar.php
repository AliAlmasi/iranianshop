<html dir="rtl">

<head>
	<title>جدول فعالیت صفحه ۱۵۷</title>
	<style>
		body {
			font-family: tahoma, sans-serif;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		table {
			font-size: 18px;
			padding: 10px;
			border: 2px dashed orangered;
		}

		thead {
			font-weight: bold;
			color: red;
		}

		td {
			border: 1px solid darkred;
			padding: 1em 2em;
			text-align: center;
			transition: color 0.2s, background-color 0.2s;
		}

		td:hover {
			background-color: darkred;
			color: white;
			font-weight: bold;
		}

		.holiday {
			background-color: lightcoral;
		}

		tbody {
			color: darkred;
		}
	</style>
</head>

<body>
	<h1>جدول فعالیت صفحه ۱۵۷</h1>
	<?php

	$days = array("شنبه", "یک‌شنبه", "دوشنبه", "شه‌شنبه", "چهارشنبه", "پنج‌شنبه", "جمعه");
	$months = array("فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند");
	$titles = array(
		"اول", "دوم", "سوم", "چهارم", "پنجم", "ششم", "هفتم", "هشتم", "نهم", "دهم",
		"یازدهم", "دوازدهم", "سیزدهم", "چهاردهم", "پانزدهم", "شانزدهم", "هفدهم", "هجدهم", "نوزدهم", "بیستم",
		"بیست‌ویکم", "بیست‌ودوم", "بیست‌وسوم", "بیست‌وچهارم", "بیست‌وپنجم", "بیست‌وششم", "بیست‌وهفتم", "بیست‌وهشتم", "بیست‌ونهم", "سی‌ام"
	);
	$max_houses = 7 * 5;

	echo "<table><thead><tr>";
	foreach ($days as $day) {
		echo "<td title='{$day}'>{$day}</td>";
	}
	echo "</tr></thead>";
	echo "<tbody><tr>";
	$h = 8;
	for ($j = 1; $j <= 30; $j++) {
		if ($j % $h == 0) {
			echo "<td class='holiday' title='{$titles[$j - 1]} - تعطیل رسمی'>{$j}</td>";
			$h += 5;
		} else {
			echo "<td title='{$titles[$j - 1]}'>{$j}</td>";
		}
		if ($j % 7 == 0) {
			echo "</tr><tr>";
		}
	}
	for ($i = 0; $i < $max_houses - 30; $i++) {
		echo "<td title='شما دنبال چی هستی آقای فردوسی‌پور؟'>&nbsp;</td>";
		// این یک شوخی است
	}
	echo "</tr></tbody></table>";

	?>
</body>

</html>