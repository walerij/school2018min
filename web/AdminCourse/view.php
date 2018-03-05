<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CourseRecord */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Course Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-record-view">

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
            'course',
            'courl:url',
            'info',
            'access',
            'author_id',
            'lessons',
            'techno',
            'tier',
            'step',
            'stat_reports',
            'stat_videos',
            'stat_stars',
            'stat_lessons',
            'stat_duration',
            'is_active',
        ],
    ]) ?>

</div>
