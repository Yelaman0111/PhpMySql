<?php

session_start();
header('lacation:login.php');
$connection = mysqli_connect('localhost', 'root', '');

mysqli_select_db($connection, 'login');

$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from users where email = '$email'";

$result = mysqli_query($connection, $s);
echo mysqli_error($connection);
$num = mysqli_num_rows($result);

if ($num == 1) {
   echo "User Name already taken";
} else {
   $reg = " insert into users(email, password) values('$email' , '$pass')";
   mysqli_query($connection, $reg);
   echo mysqli_error($connection);
   echo "Registration successfull";
}
