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

function exibeMensagem(string $mensagem) 
{
    
    echo $mensagem . '</br>';
}

function titularComLetrasMaiusculas(array &$conta)/* & serve para informar a referencia 
                                                        do dado que está sendo passado
                                                        (isso garante que estamos recebendo, a valor em si e não uma copia)
                                                    */
{
    
    $conta['titular'] = mb_strtoupper($conta['titular']);/*a função mb_strtoupper pega uma String e 
                                                          deixa todos os caracteres em 
                                                          letras maiusculas, porem é preciso 
                                                          que sejá abilitado no arquivo php.ini
                                                        */
    //echo $conta['titular'] . PHP_EOL;
    // $conta['titular'] = strtoupper($conta['titular']);// já á strtoupper já vem nativa no php;
}

function exibeConta(array $conta){
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo </li>";
}