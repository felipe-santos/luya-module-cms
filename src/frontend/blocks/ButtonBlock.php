<?php

namespace luya\cms\frontend\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Button Block.
 *
 * File has been created with `block/create` command. 
 */
class ButtonBlock extends PhpBlock
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
        return 'Button Block';
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
                 ['var' => 'class', 'label' => 'Class Name', 'type' => self::TYPE_TEXT],
                 ['var' => 'id', 'label' => 'Id', 'type' => self::TYPE_TEXT],
                 ['var' => 'style', 'label' => 'Style', 'type' => self::TYPE_TEXT],
                 ['var' => 'type', 'label' => 'Type', 'type' => self::TYPE_TEXT],
                 ['var' => 'data-toggle', 'label' => 'Data-toggle', 'type' => self::TYPE_TEXT],
                 ['var' => 'data-target', 'label' => 'Data-target', 'type' => self::TYPE_TEXT],
                 ['var' => 'data-dismiss', 'label' => 'Data-dismiss', 'type' => self::TYPE_TEXT],
                 ['var' => 'aria-controls', 'label' => 'Aria-controls', 'type' => self::TYPE_TEXT],
                 ['var' => 'aria-expanded', 'label' => 'Aria-expanded', 'type' => self::TYPE_TEXT],
                 ['var' => 'aria-label', 'label' => 'Aria-label', 'type' => self::TYPE_TEXT],
                 
            ],
            'placeholders' => [
                ['var' => 'elements', 'label' => 'Button', 'type' => self::TYPE_LIST_ARRAY],
            ],
        ];
    }
    
    /**
     * {@inheritDoc} 
     *
     * @param {{vars.class}}
    */
    public function admin()
    {
        return '<h5 class="mb-3">Button Block</h5>' .
            '<table class="table table-bordered">' .
            '{% if vars.class is not empty %}' .
            '<tr><td><b>Class Name</b></td><td>{{vars.class}}</td></tr>' .
            '{% endif %}'.
            '</table>';
    }
}