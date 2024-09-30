<html dir="rtl">

<head>
	<title>جدول فعالیت صفحه ۱۵۷</title>
	<style>
		@font-face {
			font-family: "Vazirmatn";
			src: url("fonts/Vazirmatn-Regular.woff2") format("woff2");
			font-weight: 400;
		}

		@font-face {
			font-family: "Vazirmatn";
			src: url("fonts/Vazirmatn-Bold.woff2") format("woff2");
			font-weight: 700;
		}

		body {
			font-family: "Vazirmatn";
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

		.next-month {
			color: #999;
		}

		.next-month:hover {
			background-color: white;
			color: black;
			font-weight: normal;
		}
	</style>
</head>

<body>
	<h1>جدول فعالیت صفحه ۱۵۷</h1>
	<?php

	$days = array("شنبه", "یک‌شنبه", "دوشنبه", "شه‌شنبه", "چهارشنبه", "پنج‌شنبه", "جمعه");
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
	$n = 1;
	for ($i = 0; $i < $max_houses - 30; $i++) {
		echo "<td title='شما دنبال چی هستی آقای فردوسی‌پور؟' class='next-month'>$n</td>";
		// این یک شوخی است
		$n += 1;
	}
	echo "</tr></tbody></table>";

	?>
	<p onclick="alert('برای مشاهده کد این صفحه، فایل calendar.php در پوشه ریشه پروژه (iranianshop) رو با یک ادیتور (مثل notepad) باز کنید.\n\nC:\\wamp64\\iranianshop\\calendar.php')">مشاهده کد این صفحه</p>
</body>

</html>