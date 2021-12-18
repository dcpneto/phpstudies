<?php
    #trim limpa espaços antes e depois
    #ltrim limpa espaços a esquerda/inicio (Left)
    #rtrim limpa espaços a direita/final (Right)

    $str1 = "     Djalma     ";
    echo "Esta é a string 1:$str1." . "<br>";
    $str1limpa = trim($str1);
    echo "Esta é a string 1:$str1limpa. Limpa" . "<br>";