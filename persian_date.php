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
        font-size: 32px;
        text-align: center;
        user-select: none;
    }

    h1 {
        font-size: larger;
    }

    a:link,
    a:visited {
        color: black;
        text-decoration: none;
        border-bottom: 1px solid black;
    }
</style>

<body dir="rtl">
    <?php
    require_once('includes/PersianCalendar.php');

    function day()
    {
        $day =  mds_date('d');
        $titles = array(
            "اول", "دوم", "سوم", "چهارم", "پنجم", "ششم", "هفتم", "هشتم", "نهم", "دهم",
            "یازدهم", "دوازدهم", "سیزدهم", "چهاردهم", "پانزدهم", "شانزدهم", "هفدهم", "هجدهم", "نوزدهم", "بیستم",
            "بیست‌ویکم", "بیست‌ودوم", "بیست‌وسوم", "بیست‌وچهارم", "بیست‌وپنجم", "بیست‌وششم", "بیست‌وهفتم", "بیست‌وهشتم", "بیست‌ونهم", "سی‌ام"
        );
        return $titles[$day - 1];
    }

    echo "<h1>تاریخ شمسی در PHP</h1>";
    echo "امروز: " . mds_date("Y/m/d", "now", 1) . "<br>";
    echo mds_date("l ") .
        day() . mds_date(" M", "now", 1) . "<br>";
    echo "<br> ساعت: ";
    echo mds_date("H:i", "now", 1) . "<br>";
    echo mds_date("A g:i", "now", 1);
    ?>
    <script>
        setInterval(() => window.location.reload(), 5 * 1000);
    </script>