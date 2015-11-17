<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tinyurl */

$this->title = 'Create Tinyurl';
$this->params['breadcrumbs'][] = ['label' => 'Tinyurls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tinyurl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
