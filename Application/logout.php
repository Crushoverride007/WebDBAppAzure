<!--
 * File : logout.php
 * Developer : Team Crushoverride007
 -->

<?php
session_start();
if(session_destroy()) {
    echo "<script>location='index.php'</script>";
}
?>
