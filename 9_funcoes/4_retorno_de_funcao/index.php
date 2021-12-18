<?php   

    function soma($n1, $n2){
        return $n1 + $n2;
    }

    soma(2,2); #Não imprime pq não tem o echo lá dentro
    echo soma(2, 2);

    echo "<br>";

    $x = soma(2, 2);

    echo $x . "<br>";

    $y = soma($x, 4); #X encapsulado participando da outra soma

    echo $y . "<br>";