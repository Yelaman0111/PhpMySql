<!DOCTYPE html>
<html lang="en">

<head>
   <title>Login</title>

   <link type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">

   <link type="text/css" href="style.css" rel="stylesheet">
</head>

<body>
   <div class="container">
      <div class="login-box">

         <div class="row">

            <div class="col-md-6 login-left">
               <h2>Login here</h2>
               <form action="validation.php" method="post">
                  <div class="form-group">
                     <label>User name</label>
                     <input type="text" name="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label>User password</label>
                     <input type="password" name="password" class="form-control" required>
                  </div>
                  <button type="submit" class="btn btn-primary mt-2">Login</button>
               </form>
            </div>


            <div class="col-md-6 login-right">
               <h2>Register here</h2>
               <form action="registration.php" method="post">
                  <div class="form-group">
                     <label>User name</label>
                     <input type="text" name="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label>User password</label>
                     <input type="password" name="password" class="form-control" required>
                  </div>
                  <button type="submit" class="btn btn-primary mt-2">Register</button>
               </form>
            </div>

         </div>
      </div>
   </div>
</body>

</html>