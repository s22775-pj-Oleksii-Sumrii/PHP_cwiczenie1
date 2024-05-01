<?php
$n = readline();
function fiboRecursive($n) {
  if ($n <= 1) {
    return $n;
  } else {
    return fiboRecursive($n - 1) + fiboRecursive($n - 2);
  }
}

function fiboIterative($n) {
  $fib = array(0, 1);
  for ($i = 2; $i <= $n; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
  }
  return $fib[$n];
}

$startTimeRecursive = microtime(true);
$fibonacciRecursive = fiboRecursive($n);
$endTimeRecursive = microtime(true);

$startTimeIterative = microtime(true);
$fibonacciIterative = fiboIterative($n);
$endTimeIterative = microtime(true);

$timeRecursive = $endTimeRecursive - $startTimeRecursive;
$timeIterative = $endTimeIterative - $startTimeIterative;

echo "N-ty element ciągu Fibonacciego rekurencyjnie dla $n: $fibonacciRecursive \n";
echo "Czas działania funkcji rekurencyjnej: " . ($timeRecursive) . " sekund \n";
echo "N-ty element ciągu Fibonacciego iteracyjnie dla $n: $fibonacciIterative \n";
echo "Czas działania funkcji iteracyjnej: " . ($timeIterative) . " sekund \n";

if ($timeIterative < $timeRecursive){
  echo "Iteracyjna szybciej rekurencyjnej \n";
} else {
  echo "Rekurencyjna szybciej Iteracyjna \n";
}

?>
