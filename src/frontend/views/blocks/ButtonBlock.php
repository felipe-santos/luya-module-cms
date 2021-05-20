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

echo Html::tag('button', $this->placeholderValue('elements'), [
    'class' => $this->varValue('class'), 
    'id' => $this->varValue('id'),
    'style' => $this->varValue('style'),
    'data-toggle' => $this->varValue('data-toggle'),
    'data-target' => $this->varValue('data-target'),
    'data-dismiss' => $this->varValue('data-dismiss'),
    'aria-controls' => $this->varValue('aria-controls'),
    'aria-expanded' => $this->varValue('aria-expanded'),
    'aria-label' => $this->varValue('aria-label')
    ]);