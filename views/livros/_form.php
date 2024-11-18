<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Autores;

// Supondo que você tenha esse modelo para autores

/** @var yii\web\View $this */
/** @var app\models\Livros $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="livros-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'autor_id')->dropDownList(
        ArrayHelper::map(Autores::find()->all(), 'id', 'nome'),
        ['prompt' => 'Selecione um autor...']
    ) ?>

    <?= $form->field($model, 'descricao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'data_publicacao')->input('date', ['class' => 'form-control', 'placeholder' => 'Selecione a data ...']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
