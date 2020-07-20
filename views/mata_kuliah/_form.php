<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Dosen;	

/* @var $this yii\web\View */
/* @var $model app\models\MataKuliah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mata-kuliah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_mk')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    

    <?= $form->field($model, 'dosen_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Dosen::find()->all(), 'Nip_dosen', 'Nama'),
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
