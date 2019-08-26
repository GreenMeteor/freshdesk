<?php

namespace humhub\modules\freshdesk;

use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module
{

    public $resourcesPath = 'resources';

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to([
                    '/freshdesk/admin'
        ]);
    }
    public function getServerUrl()
    {
        $url = $this->settings->get('serverUrl');
        if (empty($url)) {
            return 'https://.freshdesk.com';
        }
        return $url;
    }

}
