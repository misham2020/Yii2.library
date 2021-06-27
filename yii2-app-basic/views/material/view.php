<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
?>
<head>
<title><?php echo $model->name?></title>
</head>
<body>
<?php echo Html::a('На главную', ['index'], ['class' => 'btn btn-primary mb-4']) ?>
<div class="main-wrapper">
        <div class="container">
            <h1 class="my-md-5 my-4"><?php echo $model->name?></h1>
            <div class="row mb-3">
                <div class="col-lg-6 col-md-8">
                    <div class="d-flex text-break">
                        <p class="col fw-bold mw-25 mw-sm-30 me-2">Авторы</p>
                        <p class="col"><?php echo $model->author?></p>
                    </div>
                    <div class="d-flex text-break">
                        <p class="col fw-bold mw-25 mw-sm-30 me-2">Тип</p>
                        <p class="col">Книга</p>
                    </div>
                    <div class="d-flex text-break">
                        <p class="col fw-bold mw-25 mw-sm-30 me-2">Категория</p>
                        <p class="col"><?php echo $model->category->name?></p>
                    </div>
                    <div class="d-flex text-break">
                        <p class="col fw-bold mw-25 mw-sm-30 me-2">Описание</p>
                        <p class="col"><?php echo $model->description?></p>
                    </div>
                </div>
            </div>
    </body>       