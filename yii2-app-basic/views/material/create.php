<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Material */

$this->title = 'Добавить материал';
$this->params['breadcrumbs'][] = ['label' => 'Materials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="material-create"> -->
<div class="container">
<h1 class="my-md-5 my-4"><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class='col-lg-5 col-md-8'>
           

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>

<!-- </div> -->