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

    $this->registerJS("
        $('body').removeClass();
        $('body').addClass('".$this->varValue('class')."');
    ")
?>