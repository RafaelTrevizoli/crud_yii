<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Livros $model */

$this->title = 'Create Livros';
$this->params['breadcrumbs'][] = ['label' => 'Livros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="livros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
