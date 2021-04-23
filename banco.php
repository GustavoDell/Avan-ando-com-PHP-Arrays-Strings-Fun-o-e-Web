<?php

require_once 'funcoes.php'; //require_once verifica se o arquivo já foi importado. 
                            //require é usado para importação de arquivos que são obrigatorios.
                            //include é usado para importação de arquivos não obrigarios.

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

unset($contasCorrentes['123.456.789-11']);//A função unset() remove variaveis dá memoria

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

foreach ($contasCorrentes as $cpf => $conta) {
  ['titular' => $titular, 'saldo' => $saldo] = $conta;//igual usar a função list()
  exibeMensagem("$cpf $titular $saldo");//interpolação de strings
}