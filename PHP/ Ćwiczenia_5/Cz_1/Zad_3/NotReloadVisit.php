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

$cookie_visit_count = "visit_count";
$cookie_last_visit = "last_visit";
$new_visit_time = 30;

$current_time = time();
$last_visit_time = $_COOKIE[$cookie_last_visit];

if ($current_time - $last_visit_time > $new_visit_time) {
  $visit_count = ($_COOKIE[$cookie_visit_count] ?? 0) + 1;
  setcookie($cookie_visit_count, $visit_count, time() + (365 * 24 * 60 * 60));
  setcookie($cookie_last_visit, $current_time, time() + (365 * 24 * 60 * 60));
} else {
  $visit_count = $_COOKIE[$cookie_visit_count] ?? 1;
}

echo "Liczba odwiedzin: $visit_count";
?>
</body>
</html>
