<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Semester;
use app\models\Golongan;
use app\models\MataKuliah;


/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NIM')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jurusan')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'mata_kuliah')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(MataKuliah::find()->all(), 'kode_mk', 'nama'),
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <?= $form->field($model, 'semester')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(semester::find()->all(), 'id', 'nama'),
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <?= $form->field($model, 'golongan')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Golongan::find()->all(), 'id', 'kategori'),
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
