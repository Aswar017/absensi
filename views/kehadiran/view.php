<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kehadiran */

$this->title = $model->mahasiswa_NIM;
$this->params['breadcrumbs'][] = ['label' => 'Kehadirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kehadiran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'mahasiswa_NIM' => $model->mahasiswa_NIM, 'mata_kuliah_kodemk' => $model->mata_kuliah_kodemk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'mahasiswa_NIM' => $model->mahasiswa_NIM, 'mata_kuliah_kodemk' => $model->mata_kuliah_kodemk], [
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
            'mahasiswa_NIM',
            'mata_kuliah_kodemk',
            'keterangan',
        ],
    ]) ?>

</div>
