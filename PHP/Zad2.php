<?php
$dane = 100;
for ($i = 2; $i <= $dane; $i++){
  $p[$i] = true;
}
for ($i = 2; $i <= sqrt($dane); $i++) {
  for ($j = $i * 2; $j <= $dane; $j += $i) $p[$j] = false;
}
for ($i = 2; $i <= $dane; $i++){
  if ($p[$i]) {
    echo "$i, ";
  }
}
?>
