<?php
$lines = [];
if (!$fd = fopen('plik.txt', 'r')) {
  echo "Nie mogę otworzyć plik.txt";
} else {
  while (!feof($fd)) {
    $str = fgets($fd);
    $str = trim($str);
    array_push($lines, $str);
  }
  fclose($fd);

  $reversedLines = array_reverse($lines);


  if (!$fd = fopen('plik_odwrocony.txt', 'w')) {
    echo "Nie mogę utworzyć plik_odwrocony.txt";
  } else {
    foreach ($reversedLines as $line) {
      fwrite($fd, $line . "\n");
    }
    fclose($fd);
    echo "Plik został odwrócony. Możesz pobrać odwróconą wersję <a href='plik_odwrocony.txt'>tutaj</a>.";
  }
}
?>
