<?php

    $a = true;

    if (is_bool($a)){
        echo "É booleano <br>";
    }

    if (is_bool(0)){ #interpretou como int
        echo "É booleano 2 <br>";
    }

    if (is_bool(false)){
        echo "É booleano 3 <br>";
    }

    if (is_bool(0 == false)){
        echo "0 nesse caso é considerado falso <br>";
    }