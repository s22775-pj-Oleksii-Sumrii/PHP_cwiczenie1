<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $card_number = $_POST['card_number'];
  $order_name = $_POST['order_name'];
  $num_people = $_POST['num_people'];

  $people = [];
  for ($i = 1; $i <= $num_people; $i++) {
    $people[] = [
      'name' => $_POST['name_' . $i],
      'surname' => $_POST['surname_' . $i]
    ];
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
</head>
<body>
<h1>Podsumowanie</h1>
<h2>Dane ogólne</h2>
<p>Numer karty: <?php echo $card_number; ?></p>
<p>Imie zamawiającego: <?php echo $order_name; ?></p>
<p>Ilość osób: <?php echo $num_people; ?></p>

<h2>Dane osób</h2>
<?php foreach ($people as $index => $person): ?>
  <h3>Osoba <?php echo $index + 1; ?></h3>
  <p>Imię: <?php echo $person['name']; ?></p>
  <p>Nazwisko: <?php echo $person['surname']; ?></p>
<?php endforeach; ?>
</body>
</html>
