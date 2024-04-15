<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sprawdź czy liczba jest liczbą pierwszą</title>
</head>
<body>
<h2>Sprawdź czy liczba jest liczbą pierwszą</h2>
<form method="POST" action="">
  <label for="liczba">Wpisz liczbę:</label>
  <input type="number" name="liczba" id="liczba" required min="1" step="1">
  <br>
  <input type="submit" value="Sprawdź">
</form>
<h2>Wynik sprawdzania liczby pierwszej</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $liczba = isset($_POST["liczba"]) ? (int)$_POST["liczba"] : null;
  if ($liczba !== null && $liczba > 0) {
    $liczba_pierwsza = czyLiczbaPierwsza($liczba);

    if ($liczba_pierwsza) {
      echo "<p>Liczba $liczba jest liczbą pierwszą.</p>";
    } else {
      echo "<p>Liczba $liczba nie jest liczbą pierwszą.</p>";
    }
  } else {
    echo "<p>Proszę podać dodatnią liczbę całkowitą.</p>";
  }
}
function czyLiczbaPierwsza($liczba): bool
{
  if ($liczba <= 1) {
    return false;
  }
  for ($i = 2; $i <= sqrt($liczba); $i++) {
    if ($liczba % $i == 0) {
      return false;
    }
  }
  return true;
}
?>
</body>
</html>
