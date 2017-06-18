<?php
use yii\bootstrap\Html;
use yii\bootstrap\Dropdown;

?>
<div class="fontawesome-dropdown-widget" id="<?= $id ?>">
    <?= Html::hiddenInput($name, $value, [
        'id' => "$id-input",
    ]) ?>
    <div class="dropdown">
        <div data-toggle="dropdown" class="dropdown-handler">
            <i class="fa <?= $value ?>"></i> <span class="value"><?= $value ? str_replace('-', ' ', substr($value, 3)) : Yii::t('yii', '(not set)') ?></span>
        </div>
        <?= Dropdown::widget([
            'items' => $items,
        ]); ?>
    </div>
</div>
