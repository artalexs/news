<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\View;
use app\models\News;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->title;
//$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div>
    <h1><?= Html::decode($this->title) ?></h1>
    
    <?= DetailView::widget([
        'model' => $model,
        'formatter' => [
            'class' => '\yii\i18n\Formatter',
            'dateFormat' => 'dd/MM/yyyy',
            'datetimeFormat' => 'dd/MM/yyyy HH:mm::ss',
        ],
        'attributes' => [
            'idate:date',
            'content:html',
        ],
    ]) ?>

    <p>
        <?= Html::a('<<<Список новостей', ['/news'])?>
    </p>

</div>
