<?php

namespace luya\cms\frontend\controllers;

use Yii;
use yii\web\View;
use yii\web\NotFoundHttpException;
use Exception;
use luya\cms\frontend\base\Controller;
use luya\cms\models\NavItem;
use luya\cms\models\Redirect;
use yii\web\Response;
use luya\web\filters\ResponseCache;

/**
 * CMS Default Rendering
 *
 * @author Basil Suter <basil@nadar.io>
 * @since 1.0.0
 */
class DefaultController extends Controller
{
    /**
     * @inheritdoc
     */
    public $enableCsrfValidation = false;
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        
        // enable content compression to remove whitespace
        if (!YII_DEBUG && YII_ENV_PROD && $this->module->contentCompression) {
            $this->view->on(View::EVENT_AFTER_RENDER, [$this, 'minify']);
        }
    }

    /**
     * Determines whether the full page cache is enabled or not.
     *
     * @return boolean
     * @since 2.1.0
     */
    private function isFullPageCacheEnabled()
    {
        // if the page could not be found, caching is disable otherwise the behaviors method would
        // throw an exception which then would stop execute the "find redirects" task.
        try {
            return $this->module->fullPageCache 
                && Yii::$app->request->isGet 
                && Yii::$app->menu->current
                && Yii::$app->menu->current->type == NavItem::TYPE_PAGE
                && !Yii::$app->menu->current->is404Page
                && $this->isAdminLoggedIn()
                && (int) NavItem::find()->where(['nav_id' => Yii::$app->menu->current->navId, 'lang_id' => Yii::$app->adminLanguage->activeId])->select(['is_cacheable'])->scalar();
        } catch (NotFoundHttpException $notFound) {
            return false;
        }
    }

    /**
     * Returns whether admin user is working in frontend context.
     *
     * @return boolean Whether caching should be enabled or not.
     * @since 3.5.0
     */
    private function isAdminLoggedIn()
    {
        return Yii::$app->has('adminuser') ? Yii::$app->adminuser->isGuest : true;
    }

    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // enable full page cache behavior if supported by page and enabled in module.
        $behaviors['pageCache'] = [
            'class' => ResponseCache::class,
            'variations' => [
                Yii::$app->request->url,
            ],
            'duration' => $this->module->fullPageCacheDuration,
            'dependency' => [
                'class' => 'yii\caching\DbDependency',
                'sql' => 'SELECT max(timestamp_update) FROM cms_nav_item',
            ],
            'enabled' => $this->isFullPageCacheEnabled(),
        ];

        return $behaviors;
    }

    /**
     * Minify the view content.
     *
     * @param \yii\base\ViewEvent $event
     * @return string
     */
    public function minify($event)
    {
        return $event->output = $this->view->compress($event->output);
    }

    /**
     *
     * @throws NotFoundHttpException
     * @return string
     */
    public function actionIndex()
    {
        try {
            $current = Yii::$app->menu->current;
        } catch (Exception $e) {
            // An exception while resolving, check for internal redirect otherwise throw not found exception.
            if (($redirect = $this->findInternalRedirect())) {
                return $redirect;
            }
            
            throw new NotFoundHttpException($e->getMessage());
        }

        // the current resolved item seems to be the 404 page
        if ($current->is404Page) {
            // find redirects
            if (($redirect = $this->findInternalRedirect())) {
                return $redirect;
            }

            // set status 404 and render the item
            Yii::$app->response->statusCode = 404;
        }

        //$content = $this->renderItem($current->id, Yii::$app->menu->currentAppendix);
        $content = $this->renderItem($current->id, Yii::$app->menu->currentAppendix);

        $confs = \luya\cms\models\NavItem::find()
            ->select([
                'cms_nav_item.id', 
                'nav_id', 
                'has_header', 
                'has_footer', 
                'has_header_panel', 
                'has_footer_panel', 
                'has_menu_panel', 
                'has_banner', 
                'has_banner_mini', 
                'has_popup'
            ])
            ->joinWith(['nav' => function($query){
                $query;
            }])
            ->where(['cms_nav_item.id' => $current->id])->one();

        $container_id = $confs->nav->navContainer->id;

        $header = $footer = $header_panel = $footer_panel = $menu_panel = $banner = $banner_mini = $popup_login = $popup = '';
        
        // POPUP LOGIN
        $id_popup_login = \luya\cms\models\NavItem::find()->joinWith(['nav'])
            ->select(['cms_nav_item.id', 'nav_id', 'is_deleted'])
            ->andFilterWhere(['=', 'cms_nav.is_popup_login', 1])
            ->andFilterWhere(['=', 'cms_nav.nav_container_id', $container_id])
            ->one();
        if($id_popup_login !== null){
            $popup_login = $this->renderItem($id_popup_login->id, Yii::$app->menu->currentAppendix);
        }

        if($confs !== null && $confs->has_header){
            $id_header = \luya\cms\models\NavItem::find()->joinWith(['nav'])
                ->select(['cms_nav_item.id', 'nav_id', 'is_deleted'])
                ->andFilterWhere(['=', 'cms_nav.is_header', 1])
                ->andFilterWhere(['=', 'cms_nav.nav_container_id', $container_id])
                ->one();
            if($id_header !== null){
                $header = $this->renderItem($id_header->id, Yii::$app->menu->currentAppendix);
            }else{
                
                $id_header = \luya\cms\models\NavItem::find()->joinWith(['nav'])
                    ->select(['cms_nav_item.id', 'nav_id', 'is_deleted'])
                    ->andFilterWhere(['=', 'cms_nav.is_header', 1])
                    //->andFilterWhere(['=', 'cms_nav.nav_container_id', 1])
                    ->one();
                    
                
                if($id_header !== null){
                    $header = $this->renderItem($id_header->id, Yii::$app->menu->currentAppendix);
                }
            }
        }
        
        if($confs !== null && $confs->has_footer){
            $id_footer = \luya\cms\models\NavItem::find()->joinWith(['nav'])
                ->select(['cms_nav_item.id', 'nav_id', 'is_deleted'])
                ->andFilterWhere(['=', 'cms_nav.is_footer', 1])
                ->andFilterWhere(['=', 'cms_nav.nav_container_id', $container_id])
                ->one();
            if($id_footer !== null){
                $footer = $this->renderItem($id_footer->id, Yii::$app->menu->currentAppendix);
            }
        }
        if($confs !== null && $confs->has_header_panel){
            $id_header_panel = \luya\cms\models\NavItem::find()->joinWith(['nav'])
                ->select(['cms_nav_item.id', 'nav_id', 'is_deleted'])
                ->andFilterWhere(['=', 'cms_nav.is_header_panel', 1])
                ->andFilterWhere(['=', 'cms_nav.nav_container_id', $container_id])
                ->one();
            if($id_header_panel !== null){
                $header_panel = $this->renderItem($id_header_panel->id, Yii::$app->menu->currentAppendix);
            }
        }
        if($confs !== null && $confs->has_footer_panel){
            $id_footer_panel = \luya\cms\models\NavItem::find()->joinWith(['nav'])
                ->select(['cms_nav_item.id', 'nav_id', 'is_deleted'])
                ->andFilterWhere(['=', 'cms_nav.is_footer_panel', 1])
                ->andFilterWhere(['=', 'cms_nav.nav_container_id', $container_id])
                ->one();
            if($id_footer_panel !== null){
                $footer_panel = $this->renderItem($id_footer_panel->id, Yii::$app->menu->currentAppendix);
            }
        }
        if($confs !== null && $confs->has_menu_panel){
            $id_menu_panel = \luya\cms\models\NavItem::find()->joinWith(['nav'])
                ->select(['cms_nav_item.id', 'nav_id', 'is_deleted'])
                ->andFilterWhere(['=', 'cms_nav.is_menu_panel', 1])
                ->andFilterWhere(['=', 'cms_nav.nav_container_id', $container_id])
                ->one();
            if($id_menu_panel !== null){
                $menu_panel = $this->renderItem($id_menu_panel->id, Yii::$app->menu->currentAppendix);
            }
        }
        if($confs !== null && $confs->has_banner){
            $id_banner = \luya\cms\models\NavItem::find()->joinWith(['nav'])
                ->select(['cms_nav_item.id', 'nav_id', 'is_deleted'])
                ->andFilterWhere(['=', 'cms_nav.is_banner', 1])
                ->andFilterWhere(['=', 'cms_nav.nav_container_id', $container_id])
                ->one();
            if($id_banner !== null){
                $banner = $this->renderItem($id_banner->id, Yii::$app->menu->currentAppendix);
            }
        }
        if($confs !== null && $confs->has_banner_mini){
            $id_banner_mini = \luya\cms\models\NavItem::find()->joinWith(['nav'])
                ->select(['cms_nav_item.id', 'nav_id', 'is_deleted'])
                ->andFilterWhere(['=', 'cms_nav.is_banner_mini', 1])
                ->andFilterWhere(['=', 'cms_nav.nav_container_id', $container_id])
                ->one();
            if($id_banner_mini !== null){
                $banner_mini = $this->renderItem($id_banner_mini->id, Yii::$app->menu->currentAppendix);
            }
        }
        if($confs !== null && $confs->has_popup){
            $id_popup = \luya\cms\models\NavItem::find()->joinWith(['nav'])
                ->select(['cms_nav_item.id', 'nav_id', 'is_deleted'])
                ->andFilterWhere(['=', 'cms_nav.is_popup', 1])
                ->andFilterWhere(['=', 'cms_nav.nav_container_id', $container_id])
                ->one();
            if($id_popup !== null){
                $popup = $this->renderItem($id_popup->id, Yii::$app->menu->currentAppendix);
            }
        }
        // It seems to be a json response. Yii::$app->response->format should be FORMAT_JSON or FORMAT_JSONP
        if (is_array($content)) {
            return $this->asJson([
                'footer' => $footer, 
                'header_panel' => $header_panel, 
                'footer_panel' => $footer_panel, 
                'menu_panel' => $menu_panel, 
                'banner' => $banner, 
                'banner_mini' => $banner_mini, 
                'popup' => $popup, 
                'popup_login' => $popup_login,
                'header' => $header, 
                'content' => $content,
                
            ]);
        }
        
        // Default format is FORMAT_HTML, if RAW is used we render the content without layout.
        // @see https://github.com/luyadev/luya-module-cms/issues/35
        if (Yii::$app->response->format == Response::FORMAT_RAW) {
            return $content;
        }
        
        //return $this->renderContent($content);
        return $this->renderContent([
            'footer' => $footer, 
            'header_panel' => $header_panel, 
            'footer_panel' => $footer_panel, 
            'menu_panel' => $menu_panel, 
            'banner' => $banner, 
            'banner_mini' => $banner_mini, 
            'popup' => $popup,
            'popup_login' => $popup_login,
            'header' => $header, 
            'content' => $content,
            
        ]);
    }
    
    protected function findInternalRedirect()
    {
        $path = Yii::$app->request->pathInfo;
        $compositePath = Yii::$app->composition->prependTo($path);
        foreach (Redirect::find()->all() as $redirect) {
            if ($wildcard = $redirect->matchRequestPath($path)) {
                return $this->redirect($redirect->getRedirectUrl($wildcard), $redirect->redirect_status_code);
            }

            // if its a multi linguage website and the language has not been omited form request path compare this version too.
            // this is requred since the luya UrlManager can change the pathInfo
            if ($path !== $compositePath) {
                if ($wildcard = $redirect->matchRequestPath($compositePath)) {
                    return $this->redirect($redirect->getRedirectUrl($wildcard), $redirect->redirect_status_code);
                }
            }
        }
        
        return false;
    }
}
