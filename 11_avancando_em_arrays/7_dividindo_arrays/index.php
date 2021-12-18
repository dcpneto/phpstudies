<?php

    $arr = range (1,20);

    print_r(array_chunk($arr, 4));

    echo "<br>";

    $arrays = array_chunk($arr, 10);
    echo "<br>";

    print_r($arrays);
