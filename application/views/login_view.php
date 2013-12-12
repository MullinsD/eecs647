<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Welcome to Pacebook!</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../jumbotron.css" rel="stylesheet">

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Login</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" action = "verifylogin" method = "post" role="form">
            <div class="form-group">
              <input type="text" name = "email" id = "email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name = "password" id = "password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to Pacebook!</h1>
        <p>Not already a member? Click below to register, all it takes is your name, email, affiliations, and password.</p>
        <p><a href = "register" class="btn btn-primary btn-lg" role="button">Register Now &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Staff Member?</h2>
          <p>If you are a staff member click below to login as staff </p>
          <p><a class="btn btn-default" href="staff_login.html" role="button">Login &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>Developed by Devin Mullins</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
