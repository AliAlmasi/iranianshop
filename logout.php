<?php
session_start();
session_unset();
session_destroy();
?>

<script type="text/javascript">
    alert("شما با موفقیت از سایت خارج شدید.")
    location.replace("index.php")
</script>