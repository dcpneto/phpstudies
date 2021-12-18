<?php   

    $arr = ["banana", "maçã", "batata", "pera", "mamao"];

    if(in_array("batata", $arr)){
        echo "Há o item no array <br>";
    } else {
        echo "não há o item no array <br>";
    }

    if(in_array("teste", $arr)){
        echo "Há o item no array2 <br>";
    } else {
        echo "Não há o item no array2 <br>";
    }