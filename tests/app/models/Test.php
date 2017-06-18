<?php
namespace app\models;

class Test extends \yii\base\Model
{
    public $faIcon;

    public function rules()
    {
        return [
            ['faIcon', 'string'],
        ];
    }
}
