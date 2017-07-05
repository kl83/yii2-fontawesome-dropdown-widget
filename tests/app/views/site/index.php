<?php

use kl83\widgets\FontawesomeDropdownWidget;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<h3>Not Set</h3>
<?= FontawesomeDropdownWidget::widget([
    'name' => 'test-widget',
]); ?>

<h3>With name attribute</h3>
<?= FontawesomeDropdownWidget::widget([
    'name' => 'test-widget',
    'value' => 'fa-arrow-circle-right',
]); ?>

<h3>With model</h3>
<?php
    $model = new \app\models\Test([
        'faIcon' => 'fa-globe',
    ]);
?>
<?= FontawesomeDropdownWidget::widget([
    'model' => $model,
    'attribute' => 'faIcon',
]); ?>

<h3>Test form</h3>
<?php
    $formModel = new \app\models\Test([
        'faIcon' => 'fa-cogs',
    ]);
    $formModel->load(Yii::$app->request->get());
?>
<?php $form = ActiveForm::begin([ 'method' => 'get' ]); ?>
<?= $form->field($formModel, 'faIcon')->widget('kl83\widgets\FontawesomeDropdownWidget'); ?>
<?= Html::submitButton() ?>
<?php ActiveForm::end(); ?>
