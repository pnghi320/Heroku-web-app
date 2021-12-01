<?php

session_start();

if (! $_SESSION['username']){
  echo "Only logged in users may access this page. Click <a href='login_form.php'>here </a> to login<br>";
  exit;
}

include "db_connect.php";

$new_joke_question =  $_GET["joke"];
$new_joke_question =  addslashes($new_joke_question);
$userid = $_SESSION['userid'];

$new_joke_answer =  $_GET["answer"];
$new_joke_answer =  addslashes($new_joke_answer);

// search the database for the 
echo "<h2> Trying to add a new joke: $new_joke_question and $new_joke_answer</h2>";

$stmt = $mysqli->prepare("INSERT INTO jokes_table (JokeID, Joke_question, Joke_answer, users_id ) VALUES (null, ?, ?, ?)");
$stmt->bind_param("ssi", $new_joke_question, $new_joke_answer, $userid);
$stmt->execute();
$stmt->close();

include "search_all_jokes.php"
?>

<a href="index.php">Return to main page</a>