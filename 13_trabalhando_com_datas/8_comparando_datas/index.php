<?php

$dataA = new DateTime();    
$dataB = new DateTime();
$dataC = new DateTime(); 

$dataB->setDate(2022, 10, 15);

if ($dataB > $dataA){
    echo "A data B é maior que a data A <br>";
}

if ($dataB < $dataA){
    echo "A data A é maior que a data B <br>";
}

if ($dataA == $dataC){
    echo "A data A é igual a data C <br>"; #Não rola pela diferença no tempo de execução
}