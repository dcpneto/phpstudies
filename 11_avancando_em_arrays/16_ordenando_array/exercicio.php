<?php  
    include_once "backend.php";

?>

<h1>Seja Bem vindo</h1>

<h3>Notas</h3>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Nota</th>
    </tr>
    <?php foreach($notas as $nome =>$nota): ?>
    <tr>
        <td> <?= $nome; ?> </td>
        <td> <?= $nota; ?> </td>
    </tr>
    <?php endforeach; ?>
</table>