<?php
$file = 'lista_adresow.txt';
if (file_exists($file)) {
  $handle = fopen($file, 'r');
  while (($line = fgets($handle)) !== false) {
    $parts = explode(';', $line);

    if (count($parts) === 2) {
      $url = trim($parts[0]);
      $description = trim($parts[1]);
      echo "<li><a href=\"$url\">$description</a></li>";
    }
  }
  fclose($handle);
} else {
  echo "<p>Brak pliku \"$file\"</p>";
}
?>

