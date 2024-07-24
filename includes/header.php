<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>فروشگاه ایرانیان</title>
  <link rel="stylesheet" href="./style/style.css" type="text/css">
</head>

<body>
  <div class="divTable">
    <div class="divTableRow">
      <div class="divTableCell">
        <header class="divTable">
          <div class="divTableRow">
            <div class="divTableCell siteInfo">
              <img src="./files/shir.svg" alt="Logo" id="siteLogo">
              <strong class="siteTitle">فروشگاه ایرانیان</strong>
            </div>
          </div>
        </header>

        <nav class="divTable">
          <ul class="divTableRow">
            <li class="divTableCell"><a href="index.php">صفحه اصلی</a></li>
            <li class="divTableCell"><a href="register.php">عضویت در سایت</a></li>
            <?php
            if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) { ?>
              <li class="divTableCell"><a href="logout.php">خروج از سایت
                  <span>
                    (<?php echo ($_SESSION["realname"]); ?>)
                  </span></a></li>
            <?php } else {
            ?><li class="divTableCell"><a href="login.php">ورود به سایت</a></li>
            <?php } ?>
            <li class="divTableCell"><a href="http://github.com/alialmasi/iranianshop" target="_blank">کد منبع</a></li>
            <li class="divTableCell"><a href="http://al1almasi.ir" target="_blank">برنامه‌نویس</a></li>
          </ul>

        </nav>
        <section class="divTable">
          <section class="divTableRow">
            <aside class="divTableCell" style="width: 25%;">امکانات سایت</aside>
            <section class="divTableCell" style="width: 75%;">