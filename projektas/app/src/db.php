<?php
  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASSWORD", "root");
  define("DB_NAME", "contactForm");

  $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
  if ($mysqli->connect_error) {
    echo "Atsiprašome, bet svetainė susidūrė su problema. \n";
    echo 'Klaida: ' . $mysqli-connect_error . '\n';
    exit();
  }

  mysqli_query($mysqli, "INSERT INTO interested (name, email, message) VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]')");


?>
