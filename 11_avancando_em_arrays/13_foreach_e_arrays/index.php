<?php

    #chave => valor é o indicado para arrays associativos
    #foreach($item as $chave => $valor){}

    $Djalma = [
        'nome' => 'Djalma',
        'idade' => 27,
        'profissao' => 'Programador'
    ];

    $Daniel = [
        'nome' => 'Daniel',
        'idade' => 20,
        'profissao' => 'Estudante'
    ];

    foreach($Djalma as $carac => $value){
        echo "$carac => $value <br>";
    }

    foreach($Daniel as $carac => $value){
        echo "$carac => $value <br>";
    }