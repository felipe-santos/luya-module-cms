<?php
/**
 * View file for block: HeaderBlock 
 *
 * File has been created with `block/create` command. 
 *
 * @param $this->varValue('class');
 *
 * @var \luya\cms\base\PhpBlockView $this
 */

use yii\helpers\Html;
$subClasses = $this->varValue('subClass');
$attributes = [
    'class' => $this->varValue('class'),
    'id' => $this->varValue('id'),
    'style' => $this->varValue('style')
];

if(!empty($subClasses)){
    foreach($subClasses as $subClass){
        $json = json_decode($subClass['value'], true);
        $attributes[$json['attr']] = $json['val'];
    }
}

echo Html::tag('ul', $this->placeholderValue('elements'), 
    $attributes
);