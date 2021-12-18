<?php   

    $dataNascimento = mktime(02,12,33, 12, 28, 1994);

    echo $dataNascimento . "<br>";

    $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);
    echo $dataNascimentoFormatada . "<br>";
