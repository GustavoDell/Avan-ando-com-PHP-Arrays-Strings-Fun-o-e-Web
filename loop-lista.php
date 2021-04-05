<?php

$idadeList = [21,23,19,25,30,41,18,18,35];

echo "Quantidade de itens que lista possui: " . count($idadeList) . PHP_EOL;//função do php que informa a quantidade de itens que uma lista possui.

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}