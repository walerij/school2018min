<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Access Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="access-record-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Access Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pupil_id',
            'payment_id',
            'packet',
            'status',
            // 'access_from',
            // 'access_till',
            // 'info:ntext',
            // 'bonus_till',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
