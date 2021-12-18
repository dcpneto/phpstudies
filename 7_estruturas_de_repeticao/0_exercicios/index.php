<?php

    $var = 4;

    while ($var <= 30){
        echo "$var <br>";

        if ($var === 24){
            echo "chegou em 24 <br>";
            break;
        }

        $var += 2;
    }