<?php

function sacar(array $conta, float $valorASacar) : array
{
    if($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar esse valor");
    }else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar) : array /*informando o tipo de dado que a função irá retornar*/
{
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    }else{
        exibeMensagem("Você não pode depositar um valor negativo");
    }
    return $conta;
}   

function exibeMensagem(string $mensagem) {
    
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
  '123.456.789-10' => [
    'titular' => 'Gustavo',
    'saldo' => 1000,
  ], 
  '123.456.789-11' => [
    'titular' => 'Vinicius',
    'saldo' => 300,
  ],
  '123.256.789-10' => [
    'titular' => 'Matheus',
    'saldo' => 7000,
  ],
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 200);


$contasCorrentes['123.256.789-10'] = depositar($contasCorrentes['123.256.789-10'], -300);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}