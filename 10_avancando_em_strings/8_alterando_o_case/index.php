<?php
    #strtolower -> vai tudo pra minusculo
    #strtoupper -> vai tudo pra maiusculo
    #ucfirst -> primeira letra vai pra maiusculo
    #ucwords -> primeira letra de cada palavra vai pra maiusculo

    $str1 = "esta em caixa baixa";
    $str2 = "ESTA EM CAIXA ALTA";

    echo strtoupper($str1);
    echo "<br>";
    echo strtolower($str2);
    echo "<br>";
    echo ucfirst($str1);
    echo "<br>";
    echo ucwords($str1);