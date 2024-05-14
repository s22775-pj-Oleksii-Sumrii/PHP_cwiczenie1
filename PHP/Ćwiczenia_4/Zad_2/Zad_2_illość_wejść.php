<?php
$counter_file = 'licznik.txt';

if (!file_exists($counter_file)) {
  $counter = 1;
} else {
  $counter = intval(file_get_contents($counter_file));
  $counter++;
}

file_put_contents($counter_file, $counter);

echo "Liczba odwiedzin witryny: $counter";
?>
