<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formularz rezerwacji hotelu</title>
</head>
<body>
  <h2>Wybierz datę urodzenia:</h2>
  <form method="GET">
    <label for="birthdate">Data urodzenia:</label>
    <input type="date" id="birthdate" name="birthdate">
    <input type="submit" value="Wyślij">
  </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

  if (isset($_GET['birthdate'])) {
    $birthDate = $_GET['birthdate'];

    $dayWeek = date('l', strtotime($birthDate));

    $oneDate = date_create($birthDate);//strtotime("now");
    $twoDate = date_create('today');//strtotime($birthdate);

    $age = date_diff($oneDate, $twoDate)->y;

    $nextBirthday = date('Y') . '-' . date('m-d', strtotime($birthDate));
    if (strtotime($nextBirthday) < strtotime('today')) {
      $nextBirthday = (date('Y') + 1) . '-' . date('m-d', strtotime($birthDate));
    }
    $daysNextBirthday = (strtotime($nextBirthday) - strtotime('today')) / (60 * 60 * 24);

    echo "<p>Dzień tygodnia urodzenia: $dayWeek</p>";
    echo "<p>Ukończone lata: $age</p>";
    echo "<p>Ilość dni do najbliższych urodzin: $daysNextBirthday</p>";
  } else {
    echo "<p>Nieprawidłowa data urodzenia.</p>";
  }
}
    ?>
</body>
</html>
