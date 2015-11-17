<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TinyurlSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tinyurl-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'short') ?>

    <?= $form->field($model, 'full') ?>

    <?= $form->field($model, 'created_time') ?>

    <?= $form->field($model, 'last_access') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
