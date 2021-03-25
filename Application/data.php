<!--
 * File : data.php
 * Developer : Team Crushoverride007
 -->

<?php
$link = mysqli_connect("51.178.49.186", "crushoverride007", "mouhcine", "WebDBApp");

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

echo "<h2>Details added to WebDBApp database, 'THANKS TO TEAM CRUSHOVERRIDE007' !</h2>"

?>
