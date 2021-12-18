<?php

    function quadrado($num){
        return $num * $num;
    }

    echo quadrado(5);
    echo "<br>";
    echo "<br>";

    $arr = [];

    for ($i = 0; $i <= 30; $i++){

        array_push($arr, $i);

    }

    //print_r($arr);

    function arrayMaiorQueSete($array){

        $arrayRetorno = [];

        for ($j = 0; $j < count($array); $j++){

            if ($array[$j] > 7){

                array_push($arrayRetorno, $array[$j]);

            }

        }
        
        return $arrayRetorno;
    }

    $novoArray = arrayMaiorQueSete($arr);

    echo "<br>";
    echo "<br>";


    print_r($novoArray);