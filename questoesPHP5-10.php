<?php
$numero = 15;

if ($numero % 3 == 0 && $numero % 5 == 0) {
    echo "É múltiplo de 3 e 5 ao mesmo tempo.\n";
} elseif ($numero % 3 == 0) {
    echo "É múltiplo de 3.\n";
} elseif ($numero % 5 == 0) {
    echo "É múltiplo de 5.\n";
} else {
    echo "Não é múltiplo de nenhum dos dois.\n";
}