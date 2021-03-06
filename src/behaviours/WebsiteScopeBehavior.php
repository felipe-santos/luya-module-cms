<?php

namespace luya\cms\behaviours;

use Yii;
use luya\admin\ngrest\base\NgRestActiveQuery;
use luya\admin\ngrest\base\NgRestModel;
use yii\base\Event;

class WebsiteScopeBehavior extends \yii\base\Behavior
{
    public function events()
    {
        return [
            NgRestActiveQuery::EVENT_INIT => 'initEvent',
        ];
    }
    
    public function initEvent(Event $event)
    {
        /** @var NgRestActiveQuery $query */
        $query = $event->sender;
        $query->andWhere(['website_id' => Yii::$app->website->current['id']]);
    }
}