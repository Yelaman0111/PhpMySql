<?php

session_start();

$connection = mysqli_connect('localhost', 'root', '');

mysqli_select_db($connection, 'login');

$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from users where email = '$email' && password = '$pass'";

$result = mysqli_query($connection, $s);
echo mysqli_error($connection);

$num = mysqli_num_rows($result);

if ($num == 1) {
   $_SESSION['email'] = $email;
   header('location:home.php');
   echo "home";
} else {
   header('location:login.php');
   echo "login";
}