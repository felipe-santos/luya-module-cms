<?php

namespace luya\cms\frontend\blocks;

use luya\cms\frontend\Module;
use luya\cms\frontend\blockgroups\DevelopmentGroup;
use luya\cms\base\PhpBlock;

/**
 * HTML Block
 *
 * @author Basil Suter <basil@nadar.io>
 * @since 1.0.0
 */
final class MenuBlock extends PhpBlock
{
    /**
     * @inheritdoc
     */
    public $module = 'cms';

    /**
     * @inheritdoc
     */
    public $cacheEnabled = true;

    /**
     * @inheritdoc
     */
    public function blockGroup()
    {
        return DevelopmentGroup::className();
    }
    
    /**
     * @inheritdoc
     */
    public function name()
    {
        return 'Menu Block (main)';
    }
    
    /**
     * @inheritdoc
     */
    public function icon()
    {
        return 'code';
    }

    /**
     * @inheritdoc
     */
    public function config()
    {
        return [
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function admin()
    {
        $message =  Module::t('block_html_no_content');
        return <<<EOT
    	{% if vars.html is empty %}
    		<span class="block__empty-text">{$message}</span>{% else %}
    		{% if cfgs.raw == 1 %}
    			{{ vars.html | raw }}
    		{% else %}
                <code>{{ vars.html | escape }}</code>
    		{% endif %}
    	{% endif %}
EOT;
    }
}
