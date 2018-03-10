<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\CourseRecord;
use app\models\UserRecord;
?>

<pre>Добавить пакет пользователю</pre>

<div class="course-record-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'pupil_id')
           ->dropdownList(
                    UserRecord::find()->select(['pupil', 'id'])->indexBy('id')->column(), ['prompt' => 'Выбрать пользователя']
            )
            ->label('Пользователь')
    ?>

    

    <?=
            $form->field($model, 'packet')
            ->dropdownList(
                    CourseRecord::find()->select(['course', 'id'])->indexBy('id')->column(), ['prompt' => 'Выбрать пакет']
            )
            ->label('Пакет')
    ?>
    
     <?=
            $form->field($model, 'info')
            ->textInput()
            ->label('Инфо')
    ?>

    <div class="form-group">
    <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
