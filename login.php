<?php
include('./includes/header.php');

if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
?> <script type="text/javascript">
        location.replace("./already_logged_in.php");
    </script><?php
            }
                ?>

<br />
<form method="post" action="action_login.php" name="login">
    <table border="0" style="width: 50%;margin:0 auto;">
        <tr>
            <td>نام کاربری <span class="required">*</span></td>
            <td><input type="text" id="username" name="username" class="ltr" title="فقط حروف لاتین" /></td>
        </tr>
        <tr>
            <td>کلمه عبور <span class="required">*</span></td>
            <td><input type="password" id="password" name="password" class="ltr" title="اعداد، علائم و حروف لاتین" /></td>
        </tr>
        <tr>
            <td><br><br></td>
            <td>
                <input type="submit" value="ورود">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" value="پاک">
            </td>
        </tr>
    </table>
</form>

<?php
include('./includes/footer.php');
?>