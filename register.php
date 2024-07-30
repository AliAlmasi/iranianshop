<?php
$title = "عضویت در سایت";
include('./includes/header.php');

if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
?> <script type="text/javascript">
        location.replace("./already_logged_in.php");
    </script><?php
            }
                ?>

<br />
<form method="post" action="action_register.php" name="register">
    <table border="0" style="width: 50%;margin-left: auto;margin-right: auto;">
        <tr>
            <td style="width: 40%;">نام واقعی <span class="required">*</span></td>
            <td style="width: 60%;"><input type="text" id="realname" name="realname" title="فقط حروف فارسی" /></td>
        </tr>
        <tr>
            <td>نام کاربری <span class="required">*</span></td>
            <td><input type="text" id="username" name="username" class="ltr" title="فقط حروف لاتین" /></td>
        </tr>
        <tr>
            <td>کلمه عبور <span class="required">*</span></td>
            <td><input type="password" id="password" name="password" class="ltr" title="اعداد، علائم و حروف لاتین" /></td>
        </tr>
        <tr>
            <td>تکرار کلمه عبور <span class="required">*</span></td>
            <td><input type="password" id="repassword" name="repassword" class="ltr" title="اعداد، علائم و حروف لاتین" /></td>
        </tr>
        <tr>
            <td>پست الکترونیکی<span class="required">*</span></td>
            <td><input type="text" id="email" name="email" class="ltr" title="اعداد، علائم و حروف لاتین" /></td>
        </tr>
        <tr>
            <td><br><br></td>
            <td>
                <input type="submit" value="ثبت نام">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" value="پاک">
            </td>
        </tr>
    </table>
</form>

<?php
include('./includes/footer.php');
?>