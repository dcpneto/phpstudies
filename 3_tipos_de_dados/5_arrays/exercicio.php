<?php

    $carro = [
    'marca' => 'Honda', 
    'modelo' => 'Civic', 
    'ano' => 2021,
    'blindado' => true
    ];

    print_r($carro);
    echo "<br>";
    
    echo $carro['modelo'];
    echo "<br>";
    echo $carro['ano'];

    $marca = $carro['marca'];
    $modelo = $carro['modelo'];
    $ano = $carro['ano'];
    $blindado = $carro['blindado'];

    echo "<br>";

    echo "O carro é da marca $marca, sendo um $modelo versão $ano";

    if($blindado = true){
        echo "<br> O carro é blindado";
    }