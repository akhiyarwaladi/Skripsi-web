<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Alatuser */

$this->title = 'Update Alatuser: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Alatusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alatuser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
