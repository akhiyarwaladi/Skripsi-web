<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use miloschuman\highcharts\Highcharts;
use sjaakp\gcharts\LineChart;
/* @var $this yii\web\View */
/* @var $model app\models\Alatuser */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Alatusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alatuser-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'id_alat',
            'id_user',
            'nama',
        ],
    ]) ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_alat',
            'Hpsp',
            'Hpc',
            'Uk',
            // 'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        

    ]); ?>
    
    <?php
    /*
        $suhu = array();
        $ph = array();
        $do = array();
        $tgl = array();
        $hasil = array();
        $data = $dataProvider;
        $i= 1;
        foreach ($data as $dat){
            $doo = $dat->Hpsp;
            $phh = $dat->Hpc;
            $suhuu = $dat->Uk;
            $tgll = $dat->create_at;
            $hasill = $dat->id_alat;
            array_push($suhu,intval($suhuu));
            array_push($ph,intval($phh));
            array_push($do,intval($doo));
            array_push($hasil,intval($hasill));
            array_push($tgl,$i++);
        }
    ?>
    <?php
    echo Highcharts::widget([
    'dataProvider' => $dataProvider,
    'options' => [
      'title' => ['text' => 'Fruit Consumption'],
      'xAxis' => [
         'categories' => $tgl
      ],
      'yAxis' => [
         'title' => ['text' => 'Fruit eaten']
      ],
      'series' => [
         array('name' => 'HPc', 'data' => $ph),
      ]
    ]
    ]); */?>
    <?=  LineChart::widget([
    
    'dataProvider' => $dataProvider,
    'columns' => [
        'created_at:string',
        'Hpc'
    ],
    'options' => [
        'title' => 'Hpc'
    ],
    ]) ?>
    
    <?=  LineChart::widget([
    
    'dataProvider' => $dataProvider,
    'columns' => [
        'created_at:string',
        'Hpsp'
    ],
    'options' => [
        'title' => 'Hpsp'
    ],
    ]) ?>
    
     <?=  LineChart::widget([
    
    'dataProvider' => $dataProvider,
    'columns' => [
        'created_at:string',
        'Uk'
    ],
    'options' => [
        'title' => 'Uk'
    ],
    ]) ?>
</div>
