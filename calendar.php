<html dir="rtl">

<head>
	<title>جدول فعالیت صفحه ۱۵۷</title>
	<style>
		body {
			font-family: sans-serif;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		table {
			border: 2px solid orangered;
		}

		thead {
			font-weight: bold;
			color: red;
		}

		td {
			border: 1px solid darkred;
			padding: 10px 30px;
			text-align: center;
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

	for ($i = 0; $i < 12; $i++) {
		echo "<h2>{$months[$i]}</h2>";
		echo "<table><thead><tr>";
		foreach ($days as $day) {
			echo "<td>{$day}</td>";
		}
		echo "</tr></thead>";
		echo "<tbody><tr>";
		for ($j = 1; $j <= 30; $j++) {
			echo "<td>{$j}</td>";
			if ($j % 7 == 0) {
				echo "</tr><tr>";
			}
		}
		echo "</tr></tbody></table>";
	}
	?>
</body>

</html>