<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tinyurl */

$this->title = 'Update Tinyurl: ' . ' ' . $model->short;
$this->params['breadcrumbs'][] = ['label' => 'Tinyurls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->short, 'url' => ['view', 'id' => $model->short]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tinyurl-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
