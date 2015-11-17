<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tinyurl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tinyurl-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'short')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'full')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'last_access')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
