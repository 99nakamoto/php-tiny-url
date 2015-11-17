<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Tinyurl Services';
?>
<div class="site-index">

    <div class="jumbotron">
        <p class="lead">Please input an url for us to shorten: </p>

		<div class="country-form">

			<!-- added by Ran -->
			<?php $form = ActiveForm::begin(); ?>
			<!-- The view uses a powerful widget called ActiveForm to build the HTML form. -->
			    <?= $form->field($model, 'link') ?>
			    <!-- input fields are created by the field() method -->
			    <div class="form-group">
			        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
			    </div>
			<?php ActiveForm::end(); ?>

		</div>

		<a class="btn btn-lg btn-success" 
			href="http://localhost:81/index.php?r=site/redirect&short=test" 
			target="_blank">example link</a>
        <a class="btn btn-lg btn-success" href="/index.php?r=tinyurl">manage urls </a>
    </div>
</div>
