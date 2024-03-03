<?php

namespace humhub\modules\freshdesk;

use Yii;
use yii\helpers\Url;
use yii\base\BaseObject;
use humhub\modules\ui\menu\MenuLink;
use humhub\modules\ui\icon\widgets\Icon;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\admin\permissions\ManageModules;
use humhub\modules\freshdesk\widgets\FreshdeskFrame;

class Events extends BaseObject
{

    public static function onAdminMenuInit($event)
    {
        if (!Yii::$app->user->can(ManageModules::class)) {
            return;
        }

        /** @var AdminMenu $menu */
        $menu = $event->sender;

        $menu->addEntry(new MenuLink([
            'label' => Yii::t('FreshdeskModule.base', 'Freshdesk Settings'),
            'url' => Url::toRoute('/freshdesk/admin/index'),
            'group' => 'settings',
            'icon' => Icon::get('question-circle'),
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'freshdesk' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650,
            'isVisible' => true,
        ]));
    }

    public static function addFreshdeskFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }

        $event->sender->view->registerAssetBundle(Assets::class);
        $event->sender->addWidget(FreshdeskFrame::class, [], []);
    }
}
