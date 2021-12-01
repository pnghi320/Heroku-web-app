<?php 

  session_start();

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  include "db_connect.php";

  $username = addslashes($_POST['username']);
  $password = addslashes($_POST['password']);

  echo "You attempted to login with " . $username . " and " . $password;

  // search the database for the keyword
  
  $stmt = $mysqli->prepare("SELECT id, username, password FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);

  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($userid, $uname, $pw);
  if ($stmt->num_rows == 1) {
    $stmt->fetch();
    echo "Found one user <br>";
    if (password_verify($password, $pw)) {
      $_SESSION['userid'] = $userid;
      $_SESSION['username'] = $uname;
      echo "Login success<br>";
      exit;
    } else {
      $_SESSION = [];
      session_destroy();
    }
  } else {
    $_SESSION = [];
    session_destroy();
  }
  echo "Login failed<br>";
  
  echo "SESSION = <br>";
  echo  "<pre>";
  print_r($_SESSION);
  echo  "</pre>";
  ?>