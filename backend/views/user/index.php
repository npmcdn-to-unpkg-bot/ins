<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'User',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['class' => 'yii\grid\ActionColumn'],
            'id',
            'username',
            //'password_hash',
           //'password_reset_token',
            //'auth_key',
            // 'role',
             'email:email',
             'status',
//              'created_at:datetime',
//              'updated_at:datetime',
            [
                'attribute' => 'created_at',
                'value'=>
                function($model){
                    return  date('Y-m-d H:i:s',$model->created_at);   //主要通过此种方式实现
                },
            ],

            [
                'attribute' => 'updated_at',
                'value'=>
                function($model){
                    return  date('Y-m-d H:i:s',$model->updated_at);   //主要通过此种方式实现
                },
            ],
             'avatar',

        ],
    ]); ?>

</div>
