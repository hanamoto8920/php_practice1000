<?php

function showAd($message = 'やあ')   //仮引数
{
  echo '----------' . PHP_EOL;
  echo '-----' . $message . '-----' . PHP_EOL;
  echo '----------' . PHP_EOL;
}

showAd('Header');
echo 'Tom is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd();
echo 'Steve is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd('Footer');