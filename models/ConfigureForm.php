<?php

namespace humhub\modules\freshdesk\models;

use Yii;
use yii\base\Model;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('FreshdeskModule.base', 'Feedback Widget URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('FreshdeskModule.base', 'e.g. <code>https://<your-domain>.freshdesk.com/widgets/feedback_widget/new?&widgetType=embedded&formTitle=Help+%26+Support&submitTitle=Send+Feedback&submitThanks=Thank+you+for+your+feedback!&screenshot=No&captcha=yes</code>'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('freshdesk')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('freshdesk')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
