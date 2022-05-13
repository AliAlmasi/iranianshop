<?php
    session_start();
    session_unset();
    session_destroy();
?>

<script type="text/javascript">
location.replace("index.php")
</script>