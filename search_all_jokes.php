<?php
if ($mysqli->connect_errno){
echo "Fail to connect to MySQL";
}

echo $mysqli->host_info . "<br>";

$sql = "SELECT JokeID, Joke_question, Joke_answer, users_id FROM jokes_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
  $safe_question = htmlspecialchars($row["Joke_question"]);
  $safe_answer = htmlspecialchars($row["Joke_answer"]);

  echo "<h3>" . $safe_question. "</h3>";
  echo "<div><p>" . $safe_answer. " -- submitted by user #" . $row['users_id'] . "</p></div>";
}
} else {
echo "0 results";
}
?>