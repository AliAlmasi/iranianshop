<body dir="rtl" style="font-size:32px;text-align:center">
    <?php
    // Credit to Mohammad Dayyan (https://www.codeproject.com/articles/28380/persian-calendar-in-php)
    require_once('includes/PersianCalendar.php');
    echo "تست برای <a href='https://www.codeproject.com/articles/28380/persian-calendar-in-php'>تاریخ فارسی</a><br><br>";
    echo "امروز " . mds_date("l") . "<br>";
    echo mds_date("Y/m/d", "now", 1);
    echo "<br><br>ساعت:<br>";
    echo mds_date("H:i", "now", 1);
