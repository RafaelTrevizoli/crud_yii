<?php

use app\models\Livros;

$livros = Livros::find()->all();
?>

<div class="site-index container mt-5">

    <h1 class="mb-4">Livros Criados</h1>

    <?php foreach ($livros as $livro): ?>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><?= $livro->titulo ?></h5>
                    <p class="card-text">Descrição: <?= $livro->descricao ?></p>
                    <p class="card-text">Data de Publicação: <?= $livro->data_publicacao ?></p>
                    <p class="card-text">Autor: <?= $livro->autor ? $livro->autor->nome : 'Autor não informado' ?></p>
                    <a href="#" class="btn btn-primary">Ver Detalhes</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>
