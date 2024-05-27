<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
</head>
<body>
<h1>Dane ogólne</h1>
<form action="Person_info.1.php" method="post">
  <label for="card_number">Numer karty:</label>
  <input type="text" id="card_number" name="card_number" required><br>

  <label for="order_name">Name:</label>
  <input type="text" id="order_name" name="order_name" required><br>

  <label for="num_people">Ilość osób:</label>
  <input type="number" id="num_people" name="num_people" min="1" required><br>

  <input type="submit" value="Dalej">
</form>
</body>
</html>
