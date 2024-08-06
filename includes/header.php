<?php
$siteTitle = "فروشگاه ایرانیان";
session_start();

function toman($number, $toman = false)
{
  return mb_substr(number_format($number, 2, "", ","), 0, -2) . ($toman ? " تومان" : "");
}

function trackcode($string)
{
  return mb_substr($string, 0, 4) . "..." . mb_substr($string, -6);
}

function details($string, $length = null)
{
  if ($length == null) {
    $count = strlen($string);
    return (mb_substr($string, 0, (int)($count / 4)) . "...");
  } else if ($length > 1) {
    return (mb_substr($string, 0, $length) . "...");
  } else exit("<span class='error'>خطا در تابع details (در فایل includes/header.php)</span>)");
}

function delete($filename)
{
  if (is_link($filename)) {
    $sym = @readlink($filename);
    if ($sym) return is_writable($filename) && @unlink($filename);
  }

  if (realpath($filename) && realpath($filename) !== $filename)
    return is_writable($filename) && @unlink(realpath($filename));

  return is_writable($filename) && @unlink($filename);
}

date_default_timezone_set("Asia/Tehran");
?>

<!DOCTYPE html>
<html lang="fa-IR">

<head>
  <meta charset="UTF-8">
  <title><?php if (isset($title)) {
            echo $title . " &ndash; " . $siteTitle;
          } else {
            echo $siteTitle;
          } ?></title>
  <link rel="stylesheet" href="./style/style.css" type="text/css">
  <link rel="stylesheet" href="./style/global.css" type="text/css">
  <link rel="shortcut icon" href="./images/shir.svg" type="image/svg">
</head>

<body>
  <div class="divTable">
    <div class="divTableRow">
      <div class="divTableCell" style="padding:0;">
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
        <nav class="divTable" style="text-align:center">
          <ul class="divTableRow">
            <li class="divTableCell"><a href="index.php">صفحهٔ اصلی</a></li>
            <li class="divTableCell"><a href="register.php">عضویت در سایت</a></li>
            <?php
            if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) { ?>
              <li class="divTableCell"><a href="logout.php">خروج از سایت
                  <span style="font-weight:normal">
                    (<?= ($_SESSION["realname"]); ?>)
                  </span></a></li>
            <?php } else {
            ?>
              <li class="divTableCell"><a href="login.php">ورود به سایت</a></li>
            <?php } ?>
            <?php
            if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
              if ($_SESSION["user_type"] === "admin") {
            ?>
                <li class="divTableCell"><a href="edit_profile.php">مدیریت نمایه (مدیر)</a></li>
                <li class="divTableCell"><a href="admin_products.php">مدیریت کالاها</a></li>
              <?php
              }

              if ($_SESSION["user_type"] !== "admin") {
              ?>
                <li class="divTableCell"><a href='orders.php'>تاریخچهٔ سفارشات شما</a></li>
                <li class="divTableCell"><a href="edit_profile.php">مدیریت نمایهٔ کاربری</a></li>
              <?php
              }
            } else {
              ?>
              <li class="divTableCell"><a href="about.html" target="_blank">درباره ما</a></li>
              <li class="divTableCell"><a href='http://donate.al1almasi.ir/' target="_blank">حمایت از ما</a></li>
            <?php
            }
            ?>
          </ul>
        </nav>
        <section class="divTable">
          <section class="divTableRow">
            <aside class="divTableCell" style="width: 20%;vertical-align:top"><?php include('includes/aside.php') ?></aside>
            <section class="divTableCell" style="width: 80%;padding-right:20px;padding-bottom:20px;padding-top:10px">