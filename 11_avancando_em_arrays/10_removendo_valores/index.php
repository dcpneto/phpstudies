<?php

    #Resgatar Elementos
    #Remover Elementos

    $arr = [1, 2, 3, 4, 5];

    $removidos = array_splice($arr, 1, 2);

    print_r($arr);
    echo "<br>";
    print_r($removidos);
    echo "<br>";

    $alimentos = ['batata', 'maçã', 'pera', 'feijão', 'arroz'];
    $splicados = array_splice($alimentos, 2, 2);
  
    print_r($alimentos);
    echo "<br>";
    print_r($splicados);
    echo "<br>";