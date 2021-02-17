<!-- 
// for ($i = 1; $i <= 50; $i++) {
  // if ($i === 4) {
    // continueの場合はスキップする
  // if ($i % 3 === 0) {
    // 3の倍数　割ってあまりが０
    // continue;

//   }
//   echo $i . PHP_EOL;
// }


<?php
for ($i = 1; $i <= 10; $i++) {
  if ($i === 4) {
    break;
  }
  echo $i . PHP_EOL;
}