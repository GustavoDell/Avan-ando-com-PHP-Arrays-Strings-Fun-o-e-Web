<?php

$conta1 = [
 'titular' => 'Gustavo',
 'saldo' => 1000,
]; /*Array assoativo no PHP é uma forma 
    de mapa aonde se tem um indice que
     manda para um valor vinculado aquele 
     indice*/

$conta2 = [
    'titular' => 'Vinicius',
    'saldo' => 5000,
];
$conta3 = [
    'titular' => 'Matheus',
    'saldo' => 7000,
];

$contasCorrentes = [$conta1, $conta2, $conta3];//Guardando arrays dentro de arrays

for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}