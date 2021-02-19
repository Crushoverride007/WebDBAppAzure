<!--
 * File : logout.php
 * Developer : Mouhcine MESMOUKI and Omar ABDELMOUJIB
 -->

<?php
session_start();
if(session_destroy()) {
    echo "<script>location='index.php'</script>";
}
?>
