<?php

$contasCorrentes = [
  '123.456.789-10' => [
    'titular' => 'Gustavo',
    'saldo' => 1000,
  ], 
  '123.456.789-11' => [
    'titular' => 'Vinicius',
    'saldo' => 5000,
  ],
  '123.256.789-10' => [
    'titular' => 'Matheus',
    'saldo' => 7000,
  ],
];

$contasCorrentes['123.654.987-32'] = [
    'titular' => 'Claudia',
    'saldo' => 2000, 
];

$contasCorrentes[] = [
    'titular' => 'João',
    'saldo' => 7000, 
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}