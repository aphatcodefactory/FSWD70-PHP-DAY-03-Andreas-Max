<?php
  require_once 'actions/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet"
      href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous">

    <title>CarRental CR9 - Register</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="jumbotron">
        <h1 class="display-4">Register here</h1>
        <?php
          if (isset($errMSG)) {
            echo "<div class=\"alert {$errTyp}\">{$errMSG}</div>";
          } else {
            $errMSG = null;
          }
        ?>
        <a href="./" class="lead">Here goes back to the login page.</a>
        <hr class="my-4">
        <form action="actions/a_register.php" method="post">
          <div class="form-group">
            <label for="email">Username:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
          </div>
          <input type="submit" name="btn-signup" class="btn btn-danger" value="Sign Up">
        </form>
      </div>
    </div><!-- /container-fluid -->
  </body>
</html>
