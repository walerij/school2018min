<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\accessRecord */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Access Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="access-record-view">

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
            'pupil_id',
            'payment_id',
            'packet',
            'status',
            'access_from',
            'access_till',
            'info:ntext',
            'bonus_till',
        ],
    ]) ?>

</div>
