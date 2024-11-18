<?php

use app\models\Livros;

$livros = Livros::find()->all();
?>

<div class="container mt-5">

    <h1 class="mb-4 text-center">Livros Criados</h1>

    <div class="row">
        <?php foreach ($livros as $livro): ?>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?= $livro->titulo ?></h5>
                        <p class="card-text"><?= substr($livro->descricao, 0, 100) ?>...</p>
                        <p class="card-text"><strong>Data de Publicação:</strong> <?= $livro->data_publicacao ?></p>
                        <p class="card-text"><strong>Autor:</strong> <?= $livro->autor ? $livro->autor->nome : 'Autor não informado' ?></p>
                        <a href="#" class="btn btn-primary">Ver Detalhes</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
