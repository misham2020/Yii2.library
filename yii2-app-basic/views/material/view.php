<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Material */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Materials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<!-- <div class="material-view"> -->
<div class="content con">
    <h1 class="my-md-5 my-4"><?= Html::encode($this->title) ?></h1>

    
        <div class="container con">
            <div class="row mb-3 view">
            <div class="col-lg-6 col-md-8">
                <?= DetailView::widget([
                  
                    'model' => $model,
                    'attributes' => [
                        // 'id',
                        //'name',
                        'author',
                        'description:ntext',
                        [
                            'attribute' => 'category_id',
                            'value' => function ($data) {
                                return $data->category->name;
                            }
                        ],
                        //'category_id',
                        [
                            'attribute' => 'type_id',
                            'value' => function ($data) {
                                return $data->type->name;
                            }
                        ],
                        //'type_id',
                    ],
                ]) ?>
            </div>
        </div>
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
    </div>
    </div>
<!-- </div> -->