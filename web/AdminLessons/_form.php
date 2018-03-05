<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LessonRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lesson-record-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'course_id')->textInput() ?>

    <?= $form->field($model, 'lesson')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tasks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'step')->textInput() ?>

    <?= $form->field($model, 'checking')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video_length')->textInput() ?>

    <?= $form->field($model, 'copy_id')->textInput() ?>

    <?= $form->field($model, 'demo')->textInput() ?>

    <?= $form->field($model, 'need_lesson_ids')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tofill')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'packet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'opencode')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
