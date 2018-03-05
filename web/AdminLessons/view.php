<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LessonRecord */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lesson Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lesson-record-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'course_id',
            'lesson',
            'intro',
            'tasks',
            'video',
            'status',
            'step',
            'checking',
            'video_length',
            'copy_id',
            'demo',
            'need_lesson_ids',
            'tofill',
            'packet',
            'opencode',
        ],
    ]) ?>

</div>
