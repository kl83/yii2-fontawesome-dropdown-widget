<?php
namespace kl83\widgets;

use Yii;
use yii\helpers\Html;

class FontawesomeDropdownWidget extends \yii\widgets\InputWidget
{
    private function getFAItems()
    {
        $result = [];
        $handle = fopen(Yii::getAlias('@vendor/fortawesome/font-awesome/less/icons.less'), "r");
        if ( $handle ) {
            while ( ($line = fgets($handle)) !== false ) {
                if ( preg_match('~\}-(.*):before~', $line, $m) ) {
                    $result[] = "fa-{$m[1]}";
                }
            }
            fclose($handle);
        }
        return $result;
    }

    private function getPreparedFAItems()
    {
        $items = $this->getFAItems();
        $result = [];
        foreach ( $items as $item ) {
            $result[] = $this->render('_dropdown-item', [
                'item' => $item,
            ]);
        }
        return $result;
    }

    public function run()
    {
        FontawesomeDropdownAsset::register($this->view);
        $this->view->registerJs("fontawesomeWidgetInit('$this->id')");
        return $this->render('widget', [
            'id' => $this->id,
            'name' => isset($this->name) ? $this->name : Html::getInputName($this->model, $this->attribute),
            'value' => isset($this->name) ? $this->value : $this->model->{$this->attribute},
            'items' => array_merge([ $this->render('_search') ], $this->getPreparedFAItems()),
        ]);
    }
}
