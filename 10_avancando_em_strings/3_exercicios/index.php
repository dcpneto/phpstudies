<?php

    $arr = ["Carro" => 10000, "Sofá" => 400, "Cafeteira" => 8];

    function itensCaros ($arr){
        $arrItensCaros = [];

        foreach($arr as $itens => $preco){
            if($preco > 10) {
                array_push($arrItensCaros, $itens);
            }
        }
        return $arrItensCaros;
    }

    $novoArr = itensCaros($arr);

    var_dump($novoArr);