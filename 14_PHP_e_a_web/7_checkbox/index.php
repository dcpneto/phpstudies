<?php

    if(isset($_POST['ingredientes'])){
        $ingredientes = $_POST['ingredientes'];
        print_r($ingredientes);
    }
    #vai imprimir só um, pq pega o ultimo enviado, pq não entende como array, tem que por o []
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="ingredientes[]" value="Tomate"> Tomate
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Abóbora"> Abóbora
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Feijáo"> Feijáo
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Alface"> Alface
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Cebola"> Cebola
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>