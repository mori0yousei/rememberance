<?php
  if ($_SERVER["REQUEST_METHOD"] === "GET") {
      file_put_contents("Submitted Forms/". $_GET["name"] . ".txt", $_GET["name"] . "\n" . $_GET["email"] . "\n" . $_GET["message"] . "\n" . $_GET["select"]);
  }
  header("Location: index.html");
?>