<?php

namespace humhub\modules\freshdesk;

use Yii;
use yii\helpers\Url;
use humhub\modules\freshdesk\widgets\FreshdeskFrame;
use yii\base\BaseObject;
use humhub\models\Setting;

class Events extends BaseObject
{

    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => Yii::t('FreshdeskModule.base', 'Freshdesk Settings'),
            'url' => Url::toRoute('/freshdesk/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-question-circle"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'freshdesk' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

    public static function addFreshdeskFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::class);
        $event->sender->addWidget(FreshdeskFrame::class, [], [
            'sortOrder' => Setting::Get('timeout', 'freshdesk')
        ]);
    }
}
