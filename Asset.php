<?php
namespace kl83\fontawesomedropdownwidget;

class Asset extends \yii\web\AssetBundle
{
    public $js = [
        'base.js',
    ];
    public $css = [
        'base.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'kl83\fontawesomeasset\FontawesomeAsset',
    ];
    public function init()
    {
        $this->sourcePath = __DIR__.'/assets';
    }
}
