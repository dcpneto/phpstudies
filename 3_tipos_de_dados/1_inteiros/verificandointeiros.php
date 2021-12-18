<?php

    if(is_int(5)){
        echo "É inteiro <br>";
    }

    if(is_int("5")){
        echo "É inteiro 2 <br>";
    }

    $a = 10;

    if(is_int($a)){
        echo "É inteiro 3 <br>";
    }