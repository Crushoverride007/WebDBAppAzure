<!--
 * File : data.php
 * Developer : Mouhcine MESMOUKI + Omar ABDELMOUJIB
 -->

<?php
$link = mysqli_connect("192.168.188.140", "crushoverride007", "mouhcine", "WebDBApp");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$comment = $_POST['comment'];
$sql = "INSERT INTO userdata (firstname,lastname,email, password, age,phone,gender,dob,comment) VALUES ('" . $firstname . "','" . $lastname . "','" . $email . "','" . $password . "','" . $age . "','" . $phone . "','" . $gender . "','" . $dob . "','" . $comment . "')";
mysqli_query($link, $sql);
mysqli_close($link);

echo "<h2>Details added to WebDBApp database, 'THANKS TO OMAR AND MOUHCINE' !</h2>"

?>
