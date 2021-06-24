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

echo Html::tag('header', $this->placeholderValue('elements'), [
    'class' => $this->varValue('class'), 
    'id' => $this->varValue('id'), 
    'style' => $this->varValue('style')
]);