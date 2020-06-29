<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kehadiran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kehadiran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mahasiswa_NIM')->textInput() ?>

    <?= $form->field($model, 'mata_kuliah_kodemk')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
