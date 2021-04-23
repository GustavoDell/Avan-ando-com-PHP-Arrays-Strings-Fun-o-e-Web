<?php

$idadeList = [21,23,19,25,30,41,18];

list($idadeVinicius, $idadeGustavo, $idadeMaria) = $idadeList;/*Pega os valores do array e vai atribuindo
                                                                de acordo com seu indice nas variaveis do list*/

$idadeList[] = 20; //adicinando itens ao array, se não informa nenhum indice ele coloca no proximo indice disponivel

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}

