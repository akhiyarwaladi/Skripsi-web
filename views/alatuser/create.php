<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Alatuser */

$this->title = 'Create Alatuser';
$this->params['breadcrumbs'][] = ['label' => 'Alatusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alatuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
