<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Material */
/* @var $form yii\widgets\ActiveForm */
?>


<?php $form = ActiveForm::begin(); ?>
<?php
$cat = \yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(), 'id', 'name');

$paramsCat = [
    'prompt' => 'Укажите категорию'
];
$type = \yii\helpers\ArrayHelper::map(\app\models\Type::find()->all(), 'id', 'name');

$paramsType = [
    'prompt' => 'Укажите тип'
];
?>

<?php echo $form->field($model, 'name')->textInput(['maxlength' => true])->textInput(['placeholder' => "Имя"])->label(false) ?>

<?php echo $form->field($model, 'author')->textInput(['maxlength' => true])->textInput(['placeholder' => "Автор"])->label(false) ?>

<?php echo $form->field($model, 'category_id')->dropDownList($cat, $paramsCat)->label(false) ?>

<?php echo $form->field($model, 'type_id')->dropDownList($type, $paramsType)->label(false)?>


<?php echo $form->field($model, 'description')->textarea(['rows' => 100,])->textarea(['placeholder' => "Описание"])->label(false) ?>


<div class="form-group">
    <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

<!-- </div> -->