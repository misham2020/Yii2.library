<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Material */
/* @var $form yii\widgets\ActiveForm */
?>

<!-- <div class="material-form"> -->


<?php $form = ActiveForm::begin([
    'fieldConfig' => [
        'template' => "
                <div class='form-select'>
                {input}
                </div>
            ",
    ]
]); ?>
<?
$cat = \yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(), 'id', 'name');

$paramsCat = [
    'prompt' => 'Укажите категорию'
];
$type = \yii\helpers\ArrayHelper::map(\app\models\Type::find()->all(), 'id', 'name');

$paramsType = [
    'prompt' => 'Укажите тип'
];
?>

<?= $form->field($model, 'name', ['inputOptions' => ['class' => 'fas']])->textInput(['maxlength' => true])->textInput(['placeholder' => "Имя"])->label(false) ?>

<?= $form->field($model, 'author', ['inputOptions' => ['class' => 'fas']])->textInput(['maxlength' => true])->textInput(['placeholder' => "Автор"])->label(false) ?>

<?/*= $form->field($model, 'category_id')->textInput() */ ?>

<?= $form->field($model, 'category_id', ['inputOptions' => ['class' => 'fas']])->dropDownList($cat, $paramsCat)->label(false) ?>


<?/*= $form->field($model, 'type_id')->textInput() */ ?>
<?= $form->field($model, 'type_id', ['inputOptions' => ['class' => 'fas']])->dropDownList($type, $paramsType)->label(false) ?>


<?= $form->field($model, 'description')->textarea(['rows' => 100,])->textarea(['placeholder' => "Описание"])->label(false) ?>


<div class="form-group">
    <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

<!-- </div> -->