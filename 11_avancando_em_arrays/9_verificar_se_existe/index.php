<?php   

    $arr = [
        'nome' => 'Djalma',
        'idade' => 26
    ];

    if (array_key_exists("profissao", $arr)){
        echo "A chave existe <br>";
    } else {
        echo "A chave não existe <br>";
    }
    
    if (array_key_exists("nome", $arr)){
        echo "A chave existe <br>";
    } else {
        echo "A chave não existe <br>";
    }

    #isset serve tbm pra var
    if (isset($arr['nome'])){
        echo "A chave existe ISSET <br>";
    } else {
        echo "A chave não existe ISSET <br>";
    }
    if (isset($arr['profissao'])){
        echo "A chave existe ISSET <br>";
    } else {
        echo "A chave não existe ISSET <br>";
    }
