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