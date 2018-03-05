<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lesson Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lesson-record-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lesson Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'course_id',
            'lesson',
            'intro',
            'tasks',
            // 'video',
            // 'status',
            // 'step',
            // 'checking',
            // 'video_length',
            // 'copy_id',
            // 'demo',
            // 'need_lesson_ids',
            // 'tofill',
            // 'packet',
            // 'opencode',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
