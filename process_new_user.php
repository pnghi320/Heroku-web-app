<?php
  include "db_connect.php";
  $new_username = $_GET['username'];
  $new_password1 = $_GET['password1'];
  $new_password2 = $_GET['password2'];
  $hashed_password = password_hash($new_password1, PASSWORD_DEFAULT);

  echo "<h2>Trying to add a new user " . $new_username . " pw = " . $new_password1 . " and " . $new_password2 . "</h2>";
  
  // check to see if the username is already in the database
  $sql = "SELECT * FROM users WHERE username = '$new_username'";
  $result = $mysqli->query($sql) or die (mysqli_error($mysqli));
  if($result->num_rows > 0) {
    echo "Username already exists!";
    exit;
  }

  // inserting new user into the database
  if ($new_password1 != $new_password2) {
    echo "<h2>Passwords do not match</h2>";
    exit;
  }

  preg_match('/[0-9]+/', $new_password1, $matches);
  if (count($matches) == 0) {
    echo "<h2>Password must contain at least one number</h2>";
    exit;
  }
  preg_match('/[!@#$%^&*()]+/', $new_password1, $matches);
  if (count($matches) == 0) {
    echo "<h2>Password must contain at least one special character</h2>";
    exit;
  }
  if (strlen($new_password1) < 8) {
    echo "<h2>Password must be at least 8 characters long</h2>";
    exit;
  }
  
  // $sql = "INSERT INTO users (id, username, password) VALUES (null, '$new_username', '$hashed_password')";
  $stmt = $mysqli->prepare("INSERT INTO users (id, username, password) VALUES (null, ?, ?)");
  $stmt->bind_param("ss", $new_username, $hashed_password);
  $result = $stmt->execute();

  // $result = $mysqli->query($sql) or die (mysqli_error($mysqli));

  if ($result) {
    echo "<h2>User added</h2>";
  } else {
    echo "<h2>User not added</h2>";
  }

  echo "<a href='index.php'>Back to home page</a>";
?>