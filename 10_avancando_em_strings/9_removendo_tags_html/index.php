<?php
    #strip_tags tira as tags html

    $textoHtml = "<p> Testando Paragrafo </p> <div> Uma Div </div><p>Outro paragrafo</p>";
    echo $textoHtml;

    $salvarPlainTextHTML = strip_tags($textoHtml);
    echo "<br>";
    echo $salvarPlainTextHTML;