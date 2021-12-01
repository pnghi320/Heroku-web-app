<!DOCTYPE html>
<html>

<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <body>
    <h1>Please Register</h1>


    <?php 
      include "db_connect.php";
     ?>

    <form class="form-horizontal" action="/process_new_user.php">
      <fieldset>

        <!-- Form Name -->

        <!-- user input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="username">Username</label>
          <div class="col-md-5">
            <input id="username" name="username" type="text" placeholder="your name" class="form-control input-md"
              required="">
            <p class="help-block">Please enter a username</p>
          </div>
        </div>

        <!-- user input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="password1">Password</label>
          <div class="col-md-5">
            <input id="password1" name="password1" type="password" placeholder="your password"
              class="form-control input-md" required="">
            <p class="help-block">Please enter a password</p>
          </div>
        </div>

        <!-- user input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="password2">Password</label>
          <div class="col-md-5">
            <input id="password2" name="password2" type="password" placeholder="your password"
              class="form-control input-md" required="">
            <p class="help-block">Please confirm the password</p>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="submit"></label>
          <div class="col-md-4">
            <button id="submit" name="submit" class="btn btn-primary">Create new user</button>
          </div>
        </div>

      </fieldset>
    </form>

    <?php
    $mysqli->close();
    ?>
  </body>
</body>

</html>