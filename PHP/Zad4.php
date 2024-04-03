<?php
$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$array = explode(" ", $text);

$count = count($array);
for ($i = 0; $i < $count; $i++) {
  $word = $array[$i];
  $lastChar = substr($word, -1);
  if (in_array($lastChar, [",", ".", "'", "!", "?", ";", ":"])) {
    unset($array[$i]);
  }
}
$impl = implode(" ", $array);
print_r($impl);
echo "\n"."\n";
$array = array_values($array);

$assocArray = array();
$count = count($array);
for ($i = 0; $i < $count; $i++) {
  if ($i % 2 == 0) {
    $key = $array[$i];
    $value = ($i + 1 < $count) ? $array[$i + 1] : null;
    $assocArray[$key] = $value;
  }
}

foreach ($assocArray as $key => $value) {
  echo "$key - $value\n";
}
?>
