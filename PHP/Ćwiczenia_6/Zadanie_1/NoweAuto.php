<?php
class NoweAuto
{
  protected $model;
  protected $cenaEuro;
  protected $kursEuroPLN;

  public function __construct($model, $cenaEuro, $kursEuroPLN) {
    $this->model = $model;
    $this->cenaEuro = $cenaEuro;
    $this->kursEuroPLN = $kursEuroPLN;
  }

  public function ObliczCene() {
    return $this->cenaEuro * $this->kursEuroPLN;
  }
  public static function getAutoById($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM auta WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
?>
