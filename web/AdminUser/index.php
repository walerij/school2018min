<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-record-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pupil',
            'email:email',
            'password',
            'auth_key',
            // 'access_token',
            // 'status',
            // 'join_date',
            // 'login_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
