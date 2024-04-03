<?php
  $n = 10;
  $fib = 0;
  $j = 0;
  $ciag = array(0 => 0);
  echo "Ciąg Fibo: ";
  for ($i = 1; $i <= $n; $i++){
    $fib += $i;
    array_push($ciag,$fib);
  }
  print_r($ciag);
  echo "Nieparzyste: ";
  echo "\n";
  foreach ($ciag as $key => $value){
    if ($value % 2 == 1){
      ++$j;
      echo $j.") ";
      print_r($value);
      echo "\n";
    }
  }

?>
