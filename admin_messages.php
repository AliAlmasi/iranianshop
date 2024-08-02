<?php
$title = "پیام‌های کاربران";
include("includes/header.php");

if ((isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["user_type"] === "nonadmin") ||
    !isset($_SESSION["state_login"])
) {
?>
    <script>
        location.replace("./restricted.php");
    </script>
<?php
}

include("includes/db_link.php");

$query = "SELECT * FROM messages";
$request = mysqli_query($link, $query);
?>
<table border="1px" cellpadding='5px' cellspacing=0 style="text-align:center;width:100%">
    <thead style="font-weight: 700">
        <tr>
            <td>کد پیام</td>
            <td>نام کاربر</td>
            <td>ایمیل کاربر</td>
            <td>متن پیام</td>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_array($request)) {
        ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["realname"] ?></td>
                <td><?= $row["email"] ?><br><a href="mailto:<?= $row["email"] ?>">ارسال ایمیل به کاربر</a></td>
                <td><textarea style="cursor:default;align-content:center" cols="25" rows="5" wrap="virtual" readonly><?= $row["content"] ?></textarea></td>
            </tr>
        <?php
        }
        ?>
</table>
<?php
include("./includes/footer.php");
?>