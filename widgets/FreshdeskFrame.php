<?php

namespace humhub\modules\freshdesk\widgets;

use Yii;
use yii\base\Widget;

/**
 *
 * @author Felli
 */
class FreshdeskFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $module = Yii::$app->getModule('freshdesk');
        $url = $module->getServerUrl() . '/widgets/feedback_widget/new';

        if (!$url) {
            return '';
        }

        return $this->render('freshdeskframe', ['freshdeskUrl' => $url]);
    }
}
