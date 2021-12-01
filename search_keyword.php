<header>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
  $(function() {
    $("#accordion").accordion();
  });
  </script>
  <style>
  * {
    font-family: Ariel,
      Helvetica,
      sans-serif;
  }
  </style>
</header>


<?php include "db_connect.php";
  $keywordfromform="%" . $_GET["keyword"] . "%";
  // search the database for the keyword
  echo "<h1> Show al jokes with the word $keywordfromform </h1>";
  
  // $sql="SELECT JokeID, Joke_question, Joke_answer, users_id, username FROM jokes_table JOIN users ON users.id = jokes_table.users_id WHERE Joke_answer LIKE '%$keywordfromform%'";
  $stmt = $mysqli->prepare("SELECT JokeID, Joke_question, Joke_answer, users_id, username FROM jokes_table JOIN users ON users.id = jokes_table.users_id WHERE Joke_answer LIKE ?");
  $stmt->bind_param("s", $keywordfromform);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($JokeID, $Joke_question, $Joke_answer, $users_id, $username);

  ?><div id="accordion"><?php if ($stmt->num_rows > 0) {

    // output data of each row
    while($stmt->fetch()) {
      $safe_joke_question = htmlspecialchars($Joke_question, ENT_QUOTES);
      $safe_joke_answer = htmlspecialchars($Joke_answer, ENT_QUOTES);
      echo "<h3>" .  $safe_joke_question  . "</h3>";
      echo "<div> <p>" . $safe_joke_answer . "-- Submitted by user " . $username . "</p> </div>";
    }
  }

  else {
    echo "0 results";
  }

  ?></div>