<?php
$title = "ارتباط با ما";
include('includes/header.php');

if ((isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["u_type"] === "admin")) {
    exit("<span class='error'>شما یک کاربر مدیر هستید.<br>نمیتوانید برای خودتان پیام ارسال کنید.</span>");
}

$realname = "";
$email = "";
if (!empty($_SESSION["realname"]) && !empty($_SESSION["email"])) {
    $realname = $_SESSION["realname"];
    $email = $_SESSION["email"];
}
?>
<br />
<form method="post" action="action_contact_us.php" name="message">
    <table border="0" style="width: 50%;margin-left: auto;margin-right: auto;">
        <tr>
            <td style="width: 40%;">نام و نام خانوادگی <span class="required">*</span></td>
            <td style="width: 60%;"><input type="text" id="realname" name="realname" title="فقط حروف فارسی" <?= "value='$realname'" ?> /></td>
        </tr>
        <tr>
            <td>پست الکترونیکی<span class="required">*</span></td>
            <td><input type="text" id="email" name="email" class="ltr" title="اعداد، علائم و حروف لاتین" <?= "value='$email'" ?> /></td>
        </tr>
        <tr>
            <td>متن پیام <span class="required">*</span></td>
            <td><textarea style="font-size:14px;" id="content" name="content" cols="30" rows="7" wrap="virtual"></textarea></td>
        </tr>
        <tr>
            <td><br><br></td>
            <td>
                <input type="submit" value="ثبت پیام">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" value="پاک">
            </td>
        </tr>
    </table>
</form>