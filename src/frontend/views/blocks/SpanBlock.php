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

echo Html::tag('span', $this->varValue('label').$this->placeholderValue('elements'), [
    'class' => $this->cfgValue('class'), 
    'id' => $this->cfgValue('id'), 
    'style' => $this->cfgValue('style')
]);