<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fa-IR">

<head>
  <meta charset="UTF-8">
  <title>فروشگاه ایرانیان</title>
  <link rel="stylesheet" href="./style/style.css" type="text/css">
  <link rel="stylesheet" href="./style/global.css" type="text/css">
</head>

<body>
  <div class="divTable">
    <div class="divTableRow">
      <div class="divTableCell">
        <header class="divTable">
          <div class="divTableRow">
            <div class="divTableCell" id="siteInfo" style="cursor: pointer" onClick="location.replace('index.php');">
              <img src="./images/shir.svg" alt="Logo" id="siteLogo" title="شیر و خورشید یکی از نماد های ایرانیان است.">
              <div id="siteInfo__text">
                <strong id="siteTitle">فروشگاه ایرانیان</strong>
                <span>نسخه 1.0</span>
              </div>
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
                  <span style="font-weight:normal">
                    (<?php echo ($_SESSION["realname"]); ?>)
                  </span></a></li>
            <?php } else {
            ?>
              <li class="divTableCell"><a href="login.php">ورود به سایت</a></li>
            <?php } ?>
            <?php
            if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
              if ($_SESSION["u_type"] === "admin") {
            ?>
                <li class="divTableCell"><a href="edit_profile.php">مدیریت حساب</a></li>
                <li class="divTableCell"><a href="admin_products.php">محصول جدید</a></li>
              <?php
              }

              if ($_SESSION["u_type"] !== "admin") {
              ?>
                <li class="divTableCell"><a href="edit_profile.php">مدیریت حساب کاربری</a></li>
                <li class="divTableCell"><a href="http://github.com/alialmasi/iranianshop" target="_blank">مخزن کد منبع</a></li>
              <?php
              }
            } else {
              ?>

              <li class="divTableCell"><a href="http://parchlinux.com" target="_blank">پارچ لینوکس</a></li>
              <li class="divTableCell"><a href="http://github.com/alialmasi/iranianshop" target="_blank">مخزن کد منبع</a></li>

            <?php
            }
            ?>
          </ul>

        </nav>
        <section class="divTable">
          <section class="divTableRow">
            <aside class="divTableCell" style="width: 25%;">امکانات سایت</aside>
            <section class="divTableCell" style="width: 75%;">