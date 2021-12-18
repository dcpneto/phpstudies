<?php

    include_once "backend.php";

?>

<h1>Seja Bem vindo a sua garagem</h1>
<p><?= $nome; ?> veja quais modalidades de veículos estão em sua garagem</p>

<h2>Confira as modalidades</h2>
<ul>
    <?php foreach($veiculos as $veiculo): ?>
    <li> <?= $veiculo; ?> </li>
    <?php endforeach; ?>
</ul>
