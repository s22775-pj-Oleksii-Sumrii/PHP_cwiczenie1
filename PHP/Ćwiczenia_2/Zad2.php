<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formularz rezerwacji hotelu</title>
</head>
<body>
<h2>Formularz rezerwacji hotelu</h2>
<form method="POST" action="">
  <label for="ilosc_osob">Ilość osób (1-4):</label>
  <select name="ilosc_osob" id="ilosc_osob" required>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
  <br>
  <label for="imie">Imię:</label>
  <input type="text" name="imie" id="imie" required>
  <br>
  <label for="nazwisko">Nazwisko:</label>
  <input type="text" name="nazwisko" id="nazwisko" required>
  <br>
  <label for="adres">Adres:</label>
  <input type="text" name="adres" id="adres" required>
  <br>
  <label for="karta_kredytowa">Dane karty kredytowej:</label>
  <input type="text" name="karta_kredytowa" id="karta_kredytowa" required>
  <br>
  <label for="email">E-mail:</label>
  <input type="email" name="email" id="email" required>
  <br>
  <label for="data_pobytu">Data pobytu:</label>
  <input type="date" name="data_pobytu" id="data_pobytu" required>
  <br>
  <label for="godzina_przyjazdu">Godzina przyjazdu:</label>
  <input type="time" name="godzina_przyjazdu" id="godzina_przyjazdu" required>
  <br>
  <label for="dostawka">Dostawka dla dziecka:</label>
  <input type="checkbox" name="dostawka" id="dostawka">
  <br>
  <label for="udogodnienia">Udogodnienia:</label>
  <select name="udogodnienia[]" id="udogodnienia" multiple>
    <option value="klimatyzacja">Klimatyzacja</option>
    <option value="alkochol">alkochol</option>
    <option value="woda">Gorąca woda</option>
  </select>
  <br>
  <input type="submit" value="Wyślij">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  echo "\n";
  echo "<h2>Podsumowanie rezerwacji</h2>";
  echo "\n";

  $ilosc_osob = $_POST["ilosc_osob"];
  $imie = $_POST["imie"];
  $nazwisko = $_POST["nazwisko"];
  $adres = $_POST["adres"];
  $karta_kredytowa = $_POST["karta_kredytowa"];
  $email = $_POST["email"];
  $data_pobytu = $_POST["data_pobytu"];
  $godzina_przyjazdu = $_POST["godzina_przyjazdu"];
  $dostawka = isset($_POST["dostawka"]) ? "Tak" : "Nie";
  $udogodnienia = isset($_POST["udogodnienia"]) ? implode(", ", $_POST["udogodnienia"]) : "Brak";


  echo "<p><strong>Ilość osób:</strong> $ilosc_osob</p>";
  echo "<p><strong>Imię:</strong> $imie</p>";
  echo "<p><strong>Nazwisko:</strong> $nazwisko</p>";
  echo "<p><strong>Adres:</strong> $adres</p>";
  echo "<p><strong>Dane karty kredytowej:</strong> $karta_kredytowa</p>";
  echo "<p><strong>E-mail:</strong> $email</p>";
  echo "<p><strong>Data pobytu:</strong> $data_pobytu</p>";
  echo "<p><strong>Godzina przyjazdu:</strong> $godzina_przyjazdu</p>";
  echo "<p><strong>Potrzeba dostawki dla dziecka:</strong> $dostawka</p>";
  echo "<p><strong>Wybrane udogodnienia:</strong> $udogodnienia</p>";
}
?>
</body>
</html>


