<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\MaterialSearch;

/* @var $this yii\web\View */
/* @var $model app\models\MaterialSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="material-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
<?php
/* @var $searchModel app\models\UserSearch */
echo $form->field($model, 'searchstring', [
        'template' => '<div class="col-md-8 input-group">{input}<span class="input-group-btn">' .
        Html::submitButton('Искать', ['class' => 'btn btn-primary']) .
        '</span></div>',
    ])->textInput(['placeholder' => 'Искать']);
?>
 

    <?php // echo $form->field($model, 'type_id') ?> 

    <div class="form-group">
        <!-- <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?> -->
        <!-- <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?> -->
    </div>

    <?php ActiveForm::end(); ?>

</div>
