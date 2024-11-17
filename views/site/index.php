<?php

use app\models\Livros;

$livros = Livros::find()->all();
?>

<div class="site-index container mt-5">

    <h1 class="mb-4">Livros Criados</h1>

    <div class="row">
        <?php foreach ($livros as $livro): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="" class="card-img-top" alt="Imagem do Livro">
                    <div class="card-body">
                        <h5 class="card-title"><?= $livro->titulo ?></h5>
                        <p class="card-text">Autor: <?= $livro->autor->nome ?></p>
                        <a href="#" class="btn btn-primary">Ver Detalhes</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
