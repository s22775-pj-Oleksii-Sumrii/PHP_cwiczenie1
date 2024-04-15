<!DOCTYPE html>
<head>
<body>
<h2>Kalkulator</h2>
<form method="POST" action="">
  <input type="text" name="liczba1" size="10">
  <select name="znak">
    <option>+</option>
    <option>-</option>
    <option>*</option>
    <option>/</option>
  </select>
  <input type="text" name="liczba2" size="10">
  <input type="submit" value="Oblicz">
</form>
<?php
$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
$znak = $_POST['znak'];
$wynik = "";
switch ($znak)
{
  case "+":
    $wynik = $liczba1+$liczba2;
    break;
  case "-":
    $wynik = $liczba1-$liczba2;
    break;
  case "*":
    $wynik = $liczba1*$liczba2;
    break;
  case "/":
    $wynik = $liczba1/$liczba2;
    break;
}
echo $wynik;
?>
</body>
</head>
</html>
