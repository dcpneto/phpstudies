<?php

    $arr = [12, 5, 1, 4, 13, 15, 3, 2];

    print_r($arr);

    echo "<br>";

    sort($arr); #crescente
    print_r($arr);
    echo "<br>";
    rsort($arr); #decrescente
    print_r($arr);
    echo "<br>";

    #Sort serve para ordenar por ordem alfabética tbm
    #arsort para valor das chaves
    #ksort para ordenar pelas chaves