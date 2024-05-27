<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Licznik odwiedzin</title>
</head>
<body>
<h1>Witaj na naszej stronie!</h1>
<?php
session_start();
$visit_limit = 5;
$cookie_name = "visit_count";

if (isset($_COOKIE[$cookie_name])) {
  $visit_count = $_COOKIE[$cookie_name];
  $visit_count++;
} else {
  $visit_count = 1;
}
setcookie($cookie_name, $visit_count, time() + (365 * 24 * 60 * 60));
echo "<p>To jest Twoja wizyta numer: $visit_count.</p>";
if ($visit_count == $visit_limit) {
  echo "<p>Dziękujemy za odwiedzenie naszej strony $visit_limit razy!</p>";
}
?>
</body>
</html>
