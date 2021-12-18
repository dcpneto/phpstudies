<?php

    $arr = range(10, 45, 6);

    for ($i = 0; $i < count($arr); $i++) {
        if($arr[$i] < 30){
            print_r($arr[$i]);
            echo "<br>";
        } else {
            print_r($arr[$i]);
            echo "<br>";
            echo "o número é muito alto <br>";
        }
    }