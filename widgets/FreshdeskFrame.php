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
        $url = Yii::$app->getModule('freshdesk')->getServerUrl() . '/widgets/feedback_widget/new';
        return $this->render('freshdeskframe', ['freshdeskUrl' => $url]);
    }
}
