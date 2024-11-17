<?php

use app\models\Livros;

$livros = Livros::find()->all();
?>

<div class="site-index">

    <h1>Livros Criados</h1>

    <ul>
        <?php foreach ($livros as $livro): ?>
            <li><?= $livro->titulo ?> (Autor: <?= $livro->autor->nome ?>)</li>
        <?php endforeach; ?>
    </ul>

</div>
