<?php
$signal = 'red';

// if ($signal === 'red') {
//   echo '止まれ' . PHP_EOL;
// } elseif ($signal === 'yellow') {
//   echo '注意'  . PHP_EOL;
// } elseif ($signal === 'blue') {
//   echo 'いけぃ！' . PHP_EOL;
// }

switch ($signal) {
  case 'red':
    echo '止まれ' . PHP_EOL;
    break;
  case 'yellow':
    echo '注意' . PHP_EOL;
    break;
  case 'blue':
  case 'green':
    echo 'いけ' . PHP_EOL;
    break;
  default:
    echo'マチガテルヨ' . PHP_EOL;
    break;

}