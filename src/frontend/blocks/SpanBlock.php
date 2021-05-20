<?php

namespace luya\cms\frontend\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;
use luya\cms\admin\Module;

/**
 * Span Block.
 *
 * File has been created with `block/create` command. 
 */
class SpanBlock extends PhpBlock
{
    /**
     * @var string The module where this block belongs to in order to find the view files.
     */
    public $module = 'cms';

    /**
     * @var bool Choose whether a block can be cached trough the caching component. Be carefull with caching container blocks.
     */
    public $cacheEnabled = true;
    
    /**
     * @var int The cache lifetime for this block in seconds (3600 = 1 hour), only affects when cacheEnabled is true
     */
    public $cacheExpiration = 3600;

    /**
     * @inheritDoc
     */
    public function blockGroup()
    {
        return ProjectGroup::class;
    }

    /**
     * @inheritDoc
     */
    public function name()
    {
        return 'Span Block';
    }
    
    /**
     * @inheritDoc
     */
    public function icon()
    {
        return 'extension'; // see the list of icons on: https://design.google.com/icons/
    }
 
    /**
     * @inheritDoc
     */
    public function config()
    {
        return [
            'vars' => [
                ['var' => 'label', 'label' => Module::t('block_span_text'), 'type' => 'zaa-text'],
            ],
            'cfgs' => [
                 ['var' => 'class', 'label' => 'Class Name', 'type' => self::TYPE_TEXT],
                 ['var' => 'id', 'label' => 'Id', 'type' => self::TYPE_TEXT],
                 ['var' => 'style', 'label' => 'Style', 'type' => self::TYPE_TEXT],
            ],
            /*'placeholders' => [
                ['var' => 'elements', 'label' => 'Span', 'type' => self::TYPE_LIST_ARRAY],
            ],*/
        ];
    }
    
    /**
     * {@inheritDoc} 
     *
     * @param {{vars.class}}
    */
    public function admin()
    {
        return '<h5 class="mb-3">Span Block</h5>' .
            '<table class="table table-bordered">' .
            
            '{% if vars.label is not empty %}' .'<tr><td><b>Label:</b></td><td>{{vars.label}}</td></tr>' . '{% endif %}'.
            '{% if vars.class is not empty %}' .'<tr><td><b>Class: </b></td><td>{{vars.class}}</td></tr>' .'{% endif %}'.
            '{% if vars.id is not empty %}' .'<tr><td><b>Id:</b></td><td>{{vars.id}}</td></tr>' .'{% endif %}'.
            '{% if vars.style is not empty %}' .'<tr><td><b>Style:</b></td><td>{{vars.style}}</td></tr>' .'{% endif %}'.
            
            '</table>';
    }
}