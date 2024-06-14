<?php
global $pdo;
require_once 'config.php';
require_once 'NoweAuto.php';
require_once 'AutoZDodatkami.php';
require_once 'Ubiezpieczenie.php';

try {

  $autoData = NoweAuto::getAutoById($pdo, 7);

  if ($autoData) {
    $ubiezpieczenie = new Ubiezpieczenie(
      $autoData['model'],
      $autoData['cenaEuro'],
      $autoData['kursEuroPLN'],
      $autoData['alarm'],
      $autoData['radio'],
      $autoData['klimatyzacja'],
      $autoData['procentUbezpieczenia'],
      $autoData['lataPosiadania']
    );
    echo "Koszt ubezpieczenia w PLN: " . $ubiezpieczenie->ObliczCene() . " PLN\n";
  } else {
    echo "Auto o podanym ID nie istnieje.\n";
  }
} catch (Exception $e) {
  echo "Błąd: " . $e->getMessage();
}

?>
