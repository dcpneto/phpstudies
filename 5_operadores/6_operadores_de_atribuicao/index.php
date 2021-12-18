<?php
    echo "Os operadores +=, -=, /=, *= e %= farão a respectiva operação antes de sua atribuição";
    echo "<br>";
    echo "<br>";

    // +=
    $a = 0;
    $a += 10; # $a = $a + 10
    echo "0+10 | += <br>";
    echo $a . "<br>";

    echo "<br>";
    echo "<br>";

    // +=
    $b = 10;
    $b -= 5; # $b = $b - 5
    echo "10-5 | -= <br>";
    echo $b . "<br>";

    echo "<br>";    
    echo "<br>";

    // *=
    $c = 5;
    $c *= 2; # $c - $c*5
    echo "5*2 | *= <br>";
    echo $c . "<br>";

    echo "<br>";    
    echo "<br>";

    // /=
    $d = 5;
    $d /= 2; # $d - $d/2
    echo "5/2 | /= <br>";
    echo $d . "<br>";

    echo "<br>";    
    echo "<br>";

    // %=
    $e = 5;
    $e %= 2; # $e - $e/2
    echo "5/2 | %= <br>";
    echo $e . "<br>";