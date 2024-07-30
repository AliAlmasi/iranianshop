<?php
$title = "خروج از سایت";
include("./includes/header.php");

if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
    session_start();
    session_unset();
    session_destroy();
?>
    <script type="text/javascript">
        location.replace("./signed_out.php");
    </script>
<?php
} else {
    echo "<span class='error'>شما وارد نمایه کاربری‌ای نشده‌اید که بخواهید از آن خارج شوید.</span>";
    include("includes/index_link.php");
}

include("./includes/footer.php");
