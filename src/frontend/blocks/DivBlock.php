<?php

namespace luya\cms\frontend\blocks;

use luya\cms\admin\Module;
use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Div Block.
 *
 * File has been created with `block/create` command. 
 */
class DivBlock extends PhpBlock
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
        return 'Div Block';
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
                [
                    'var' => 'class', 
                    'label' => Module::t('class_name'), 
                    'type' => self::TYPE_TEXT
                ],
                [
                    'var' => 'id', 
                    'label' => Module::t('id'), 
                    'type' => self::TYPE_TEXT
                ],
                [
                    'var' => 'classMobileHidden', 
                    'label' => Module::t('block_list_class_mobile_hidden'), 
                    'type' => self::TYPE_TEXT
                ],
                [
                    'var' => 'mobileHidden', 
                    'label' => Module::t('block_mobile_hidden'), 
                    'type' => self::TYPE_CHECKBOX
                ],
                [
                    'var' => 'style', 
                    'label' =>  Module::t('style'), 
                    'type' => self::TYPE_TEXT
                ],
                [
                    'var' => 'image', 
                    'label' =>  Module::t('background_image'), 
                    'type' => self::TYPE_IMAGEUPLOAD
                ],
                [
                    'var' => 'subClass', 
                    'label' => Module::t('block_list_elements_label'), 
                    'type' => self::TYPE_LIST_ARRAY
                ],
            ],
            'cfgs' => [
                ['var' => 'raw', 'label' => Module::t('block_html_cfg_raw_label'), 'type' => self::TYPE_CHECKBOX]
            ],
            'placeholders' => [
                ['var' => 'elements', 'label' => 'DIV', 'type' => self::TYPE_LIST_ARRAY],
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
        return '<h5 class="mb-3">Div Block</h5>' .
            '<table class="table table-bordered">' .
            '{% if vars.class is not empty %}' .
            '<tr><td><b>Class Name</b></td><td>{{vars.class}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.id is not empty %}' .
            '<tr><td><b>ID Name</b></td><td>{{vars.id}}</td></tr>' .
            '{% endif %}'.
            '</table>';
    }
}