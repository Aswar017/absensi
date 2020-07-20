<?php

use app\models\MahasiswaSearch;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\MahasiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

     <?= $form->field($model, 'semester')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(MahasiswaSearch::find()->all(), 'semester', 'semester'),
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    </div>

    <?= $form->field($model, 'golongan')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(MahasiswaSearch::find()->all(), 'golongan', 'golongan'),
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
