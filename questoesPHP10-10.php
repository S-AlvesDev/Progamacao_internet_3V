<?php
$termo1 = 0;
$termo2 = 1;

for ($i = 1; $i <= 15; $i++) {
    echo $termo1 . " ";
    $proximo = $termo1 + $termo2;
    $termo1 = $termo2;
    $termo2 = $proximo;
}
echo "\n";