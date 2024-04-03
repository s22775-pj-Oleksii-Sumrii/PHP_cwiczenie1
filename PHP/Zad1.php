<?php

$owoce = array("jablko","banan","pomelo","pomarancza","sliwa");
foreach ($owoce as $poberam_owoc){
  $dlugosc_slowa = strlen($poberam_owoc);
  echo "Ten owoc: ";
  for ($dlugosc_slowa > 0; $dlugosc_slowa--;){
    echo $poberam_owoc[$dlugosc_slowa];
  }
  if (strtolower($poberam_owoc[0]) == 'p'){
    echo " zaczyna się od p";
  } else {
    echo " nie zaczyna się od p";
  }
  echo "\n";
}
?>
