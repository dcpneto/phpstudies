<?php
    
    function velocidadeMaxima($vel){
        echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    }

    velocidadeMaxima(200);
    velocidadeMaxima(180);
    velocidadeMaxima(240);
    

    function racaAnimal($nome, $raca){
        echo "O $nome é da raça $raca <br>";
    }

    racaAnimal("Machão", "SRD");
    racaAnimal("Paçoca", "Pitbull");
    racaAnimal("Zeus", "Poodle");

    echo "<br>";
    echo "<br>";

    #Parametro default / o default tem que vir por último

    function teste($a = "teste"){
        echo "O valor de A é: $a <br>";
    }

    teste();
    teste("testando");