<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\NewsSearch;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => "На странице {begin} - {end} из {totalCount} новостей",
        'formatter' => [
            'class' => '\yii\i18n\Formatter',
            'dateFormat' => 'dd/MM/yyyy',
            'datetimeFormat' => 'dd/MM/yyyy HH:mm::ss',
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'idate:date',
            'title:html',
            //'announce:html',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'view'=> function($url, $model){
                        return Html::a('Подробнее', $url, ['class' => 'btn btn-primary']);
                    },
            ],
                'visibleButtons' => [
                    'update' => function ($model) {
                        return \Yii::$app->user->can('updatePost', ['news' => $model]);
                    },
                    'delete' => function ($model) {
                        return \Yii::$app->user->can('updatenews', ['news' => $model]);
                    },
                ]
        ],
        ],
    ]); ?>
</div>
