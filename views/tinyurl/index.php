<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TinyurlSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tinyurls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tinyurl-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tinyurl', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'short',
            'full',
            'created_time',
            'last_access',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
