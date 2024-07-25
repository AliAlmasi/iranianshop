<?php

include("./includes/header.php");

if (isset($_SESSION["state_login"]) && ($_SESSION["state_login"] === true || $_SESSION["state_login"] == 1)) {
    session_start();
    session_unset();
    session_destroy();
?>
    <script type="text/javascript">
        location.replace("./signed_out.php");
    </script>
<?php
} else {
    echo "<span class='error'>شما وارد حساب کاربری‌ای نشده‌اید که بخواهید از آن خارج شوید.</span>";
    echo "<br><br><a href='index.php'>به صفحه اصلی بروید <span style='font-weight:bold;font-size:22px'>&leftarrow;</span></a>";
}

include("./includes/footer.php");
