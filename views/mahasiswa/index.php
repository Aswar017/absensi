<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mahasiswa', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Export Excel', ['export-excel'], ['class' => 'btn btn-sm btn-success']) ?>
            </p>
        </div>
        <div class="col-lg-3">
        </div>
        <div class="col-lg-3">
        </div>
        <div class="col-lg-3">
        </div>
        <div class="col-lg-3" style="margin-top: 0.1em">
            <?= $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>

    <?php Pjax::begin(); ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'NIM',
            'nama',
            'jurusan',
            'semester',
            'golongan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
