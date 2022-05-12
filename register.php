<?php
    include ('./includes/header.php');
?>
<br />
<form method="post" action="action_register.php" name="register">
    <table border="0" style="width: 50%;margin-left: auto;margin-right: auto;">
        <tr>
            <td style="width: 40%;">نام واقعی <span style="color:#ac0000;">*</span></td>
            <td style="width: 60%;"><input type="text" id="realname" name="realname" placeholder="علی الماسی" /></td>
        </tr>
        <tr>
            <td>نام کاربری <span style="color:#ac0000;">*</span></td>
            <td><input type="text" id="username" name="username" /></td>
        </tr>
        <tr>
            <td>کلمه عبور <span style="color:#ac0000;">*</span></td>
            <td><input type="password" id="password" name="password" /></td>
        </tr>
        <tr>
            <td>تکرار کلمه عبور <span style="color:#ac0000;">*</span></td>
            <td><input type="password" id="repassword" name="repassword" /></td>
        </tr>
        <tr>
            <td>پست الکترونیکی<span style="color:#ac0000;">*</span></td>
            <td><input type="text" id="email" name="email" /></td>
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
    include ('./includes/footer.php');
?>
