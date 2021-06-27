<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Material */

$this->title = 'Update Material: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Materials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="material-update">
<?php echo Html::a('На главную', ['index'], ['class' => 'btn btn-primary mb-4']) ?>
    <h1><?php echo Html::encode($this->title) ?></h1>
    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
