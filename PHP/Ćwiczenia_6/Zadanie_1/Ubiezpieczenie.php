<?php

require_once 'AutoZDodatkami.php';
class Ubiezpieczenie extends AutoZDodatkami
{
  private $procentUbezpieczenia;
  private $lataPosiadania;

  public function __construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja, $procentUbezpieczenia, $lataPosiadania) {
    parent::__construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja);
    $this->procentUbezpieczenia = $procentUbezpieczenia;
    $this->lataPosiadania = $lataPosiadania;
  }

  public function ObliczCene() {
    $cenaSamochoduZDodatkami = parent::ObliczCene();
    $znizka = 1 - ($this->lataPosiadania / 100);
    $kosztUbezpieczenia = $this->procentUbezpieczenia * $cenaSamochoduZDodatkami * $znizka;
    return $kosztUbezpieczenia;
  }
}
