<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<pre>Добавить пакет пользователю</pre>

<div class="course-record-form">

    <?php $form = ActiveForm::begin(); ?>

  

    <?= $form->field($model, 'pupil_id')->textInput(['maxlength' => true])
             ->label('ID пользователя') ?>

    <?= $form->field($model, 'packet')->textInput(['maxlength' => true]) 
            ->label('Пакет')?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' =>  'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
