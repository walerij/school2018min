<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LessonRecord */

$this->title = 'Create Lesson Record';
$this->params['breadcrumbs'][] = ['label' => 'Lesson Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lesson-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
