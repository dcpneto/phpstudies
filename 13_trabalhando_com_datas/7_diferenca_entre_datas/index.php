<?php   

    $dataA = new DateTime();    
    $dataB = new DateTime();    
    
    $dataB->setDate(2001, 10, 15);

    $diferenca = $dataA->diff($dataB);

    print_r($diferenca);
    echo "<br>";