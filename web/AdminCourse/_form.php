<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CourseRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="course-record-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'course')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'courl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'access')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author_id')->textInput() ?>

    <?= $form->field($model, 'lessons')->textInput() ?>

    <?= $form->field($model, 'techno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tier')->textInput() ?>

    <?= $form->field($model, 'step')->textInput() ?>

    <?= $form->field($model, 'stat_reports')->textInput() ?>

    <?= $form->field($model, 'stat_videos')->textInput() ?>

    <?= $form->field($model, 'stat_stars')->textInput() ?>

    <?= $form->field($model, 'stat_lessons')->textInput() ?>

    <?= $form->field($model, 'stat_duration')->textInput() ?>

    <?= $form->field($model, 'is_active')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
