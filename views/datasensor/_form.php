<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Datasensor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datasensor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'id_alat')->textInput() ?>

    <?= $form->field($model, 'Hpsp')->textInput() ?>

    <?= $form->field($model, 'Hpc')->textInput() ?>

    <?= $form->field($model, 'Uk')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
