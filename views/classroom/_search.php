<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\controllers\ClassroomSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classroom-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'class_id') ?>

    <?= $form->field($model, 'mentor_id') ?>

    <?= $form->field($model, 'stream') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'section') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
