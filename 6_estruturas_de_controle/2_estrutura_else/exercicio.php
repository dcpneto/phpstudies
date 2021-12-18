<?php
    $varString = "Djalma";
    $varInt = 26;
    $varBool = true;

    if (is_string($varString)){
        echo "$varString É String <br>";
    } else {
        echo "$varString não é uma string <br>";
    }

    
    if (is_string($varInt)){
        echo "$varInt É String <br>";
    } else {
        echo "$varInt não é uma string <br>";
    }

    
    if (is_string($varBool)){
        echo "$varBool É String <br>";
    } else {
        echo "$varBool não é uma string <br>";
    }

    if (is_int($varString)){
        echo "$varString É Inteiro <br>";
    } else {
        echo "$varString não é inteiro <br>";
    }

    
    if (is_int($varInt)){
        echo "$varInt É Inteiro <br>";
    } else {
        echo "$varInt não é inteiro <br>";
    }

    
    if (is_int($varBool)){
        echo "$varBool É Inteiro <br>";
    } else {
        echo "$varBool não é inteiro <br>";
    }

    if (is_bool($varString)){
        echo "$varString É Booleano <br>";
    } else {
        echo "$varString não é booleano <br>";
    }

    
    if (is_bool($varInt)){
        echo "$varInt É Booleano <br>";
    } else {
        echo "$varInt não é booleano <br>";
    }

    
    if (is_bool($varBool)){
        echo "$varBool É Booleano <br>";
    } else {
        echo "$varBool não é booleano <br>";
    }