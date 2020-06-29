<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kehadiran */

$this->title = 'Update Kehadiran: ' . $model->mahasiswa_NIM;
$this->params['breadcrumbs'][] = ['label' => 'Kehadirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mahasiswa_NIM, 'url' => ['view', 'mahasiswa_NIM' => $model->mahasiswa_NIM, 'mata_kuliah_kodemk' => $model->mata_kuliah_kodemk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kehadiran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
