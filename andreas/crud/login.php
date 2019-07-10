<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet"
      href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous">

    <title>CarRental CR9 - LogIn</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="jumbotron">
        <h1 class="display-4">Login Page</h1>
        <a href="register.php" class="lead">... or register here ...</a>
        <hr class="my-4">
        <form>
          <div class="form-group">
            <label for="email">Username:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" id="pass" placeholder="Password">
          </div>
          <input type="submit" name="btn-login" class="btn btn-danger" value="Login">
        </form>
      </div>
    </div><!-- /container-fluid -->
  </body>
</html>
