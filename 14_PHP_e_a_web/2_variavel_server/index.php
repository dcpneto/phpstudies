<?php   

    /*
    SERVER_SOFTWARE - Identificacao do servidor
    SERVER_NAME - Hostname, DNS ou IP
    SERVER_PROTOCOL - Protocolo do Servidor
    SERVER_PORT - Porta do servidor
    QUERY_STRING - Argumentos após o ? na URL
    */

    print_r($_SERVER);

    echo "<br>";

    echo $_SERVER['MYSQL_HOME'] . "<br>";

    if($_SERVER['SERVER_NAME'] == 'localhost'){
        echo "Está acessando pelo localhost <br>";
    }