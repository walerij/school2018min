<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Course Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-record-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Course Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'course',
            'courl:url',
            'info',
            'access',
            // 'author_id',
            // 'lessons',
            // 'techno',
            // 'tier',
            // 'step',
            // 'stat_reports',
            // 'stat_videos',
            // 'stat_stars',
            // 'stat_lessons',
            // 'stat_duration',
            // 'is_active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
