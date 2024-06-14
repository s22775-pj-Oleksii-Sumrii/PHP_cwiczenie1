<?php

require_once 'NoweAuto.php';
class AutoZDodatkami extends NoweAuto
{
  private $alarm;
  private $radio;
  private $klimatyzacja;

  public function __construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja) {
    parent::__construct($model, $cenaEuro, $kursEuroPLN);
    $this->alarm = $alarm;
    $this->radio = $radio;
    $this->klimatyzacja = $klimatyzacja;
  }

  public function ObliczCene() {
    $cenaPodstawowaPLN = parent::ObliczCene();
    $cenaDodatkow = $this->alarm + $this->radio + $this->klimatyzacja;
    return $cenaPodstawowaPLN + $cenaDodatkow;
  }
}
