<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $card_number = $_POST['card_number'];
  $order_name = $_POST['order_name'];
  $num_people = $_POST['num_people'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
</head>
<body>
<h1>Dane osób</h1>
<form action="Summary.2.php" method="post">
  <input type="hidden" name="card_number" value="<?php echo $card_number; ?>">
  <input type="hidden" name="order_name" value="<?php echo $order_name; ?>">
  <input type="hidden" name="num_people" value="<?php echo $num_people; ?>">
  <?php for ($i = 1; $i <= $num_people; $i++): ?>
    <h2>Osoba <?php echo $i; ?></h2>
    <label for="name_<?php echo $i; ?>">Imię:</label>
    <input type="text" id="name_<?php echo $i; ?>" name="name_<?php echo $i; ?>" required><br>

    <label for="surname_<?php echo $i; ?>">Nazwisko:</label>
    <input type="text" id="surname_<?php echo $i; ?>" name="surname_<?php echo $i; ?>" required><br>
  <?php endfor; ?>

  <input type="submit" value="Dalej">
</form>
</body>
</html>
