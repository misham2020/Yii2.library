<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MaterialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Материалы';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="material-index"> -->
<div class="container">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-primary mb-4']) ?>
    </p>
    <div class="row">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="table-responsive">
    <?= GridView::widget([
         'tableOptions' => ['class' => 'table'],

        'dataProvider' => $dataProvider,
        'summary' => false,
       // 'filterModel' => $searchModel,
        'columns' => [
            /* ['class' => 'yii\grid\SerialColumn'], */
        [
            'attribute' => 'name',
            'value' => function ($data) {
                return Html::a(Html::encode($data->name), Url::to(['view', 'id' => $data->id]));
            },
            'format' => 'raw',
        ],
            'author',
           // 'description:ntext',
            [
                'attribute' => 'category_id',
                'value' => function($data){
                    return $data->category->name;
                }
            ],
            [
                'attribute' => 'type_id',
                'value' => function($data){
                    return $data->type->name;
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => ' {update} {delete}{link}',
            ],
           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
<!-- 
</div> -->
