<?php

    function soma ($a, $b){

        print_r(func_get_args()); #Retorna os arumentos

        echo "<br>";

        echo func_num_args() . "<br>"; #Retorna a quantidade de argumentos

        return $a + $b;
    }

    soma(2, 4);
    