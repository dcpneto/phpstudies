<?php

    include_once "backend.php";

?>

<h1>Seja Bem vindo</h1>

<h3>Dados</h3>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $pessoa =>$idade): ?>
    <tr>
        <td> <?= $pessoa; ?> </td>
        <td> <?= $idade; ?> </td>
    </tr>
    <?php endforeach; ?>
</table>