<!--
 * File : loginchk.php
 * Developer : Mouhcine MESMOUKI + Omar ABDELMOUJIB
 -->

<?php
session_start();
$error = '';

if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "Email or Password is invalid";
    }
    else
    {
        $connection = mysqli_connect("192.168.188.140", "crushoverride007", "mouhcine", "WebDBApp");
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        // $email      = stripslashes($email);
        // $password   = stripslashes($password);
        // $email      = mysqli_real_escape_string($connection, $_REQUEST['email']);
        // $password   = mysqli_real_escape_string($connection, $_REQUEST['password']);
        $sql        = "SELECT * from userdata where password='$password' AND email='$email'";
        $r_query    = mysqli_query($connection, $sql);
        $rows       = mysqli_num_rows($r_query);

        if ($rows == 1) {
            $_SESSION['login_user'] = $email;
            echo "<script>location='profile.php'</script>";
        }
        else {
            $error = "Email or Password is invalid";
        }

        mysqli_close($connection);
    }
}
?>
