<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tinyurl */

$this->title = $model->short;
$this->params['breadcrumbs'][] = ['label' => 'Tinyurls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tinyurl-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->short], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->short], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'short',
            'full',
            'created_time',
            'last_access',
        ],
    ]) ?>

</div>
