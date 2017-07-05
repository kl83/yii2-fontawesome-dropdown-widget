<?php
namespace kl83\widgets;

class FontawesomeDropdownAsset extends \yii\web\AssetBundle
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
        'kl83\assets\FontawesomeAsset',
    ];
    public function init()
    {
        $this->sourcePath = __DIR__.'/../dist';
    }
}
