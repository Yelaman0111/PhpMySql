<?php

session_start();

if (!isset($_SESSION['email'])) {
   header('lacation:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

   <link type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet">

   <link type="text/css" href="style.css" rel="stylesheet">
   <title>Home page</title>
</head>

<body>

   <div class="container">
      <a class="float-right" href="logout.php">Logout</a>
      <h1>Welcome <?php echo $_SESSION['email']; ?></h1>
   </div>

</body>

</html>