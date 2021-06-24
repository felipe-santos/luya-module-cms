<?php

namespace luya\cms\frontend\blocks;

use luya\cms\admin\Module;
use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Ul Block.
 *
 * File has been created with `block/create` command. 
 */
class ChangeClassBodyBlock extends PhpBlock
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
        return 'Change Class Body Block';
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
        return '<h5 class="mb-3">Change Class Body Block</h5>' .
            '<table class="table table-bordered">' .
            '{% if vars.class is not empty %}' .
            '<tr><td><b>Class Name</b></td><td>{{vars.class}}</td></tr>' .
            '{% endif %}'.
            '</table>';
    }
}