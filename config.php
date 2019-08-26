<?php

namespace humhub\modules\freshdesk;

return [
    'id' => 'freshdesk',
    'class' => 'humhub\modules\freshdesk\Module',
    'namespace' => 'humhub\modules\freshdesk',
    'events' => [
        ['class' => \humhub\modules\dashboard\widgets\Sidebar::class, 'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT, 'callback' => ['humhub\modules\freshdesk\Events', 'addFreshdeskFrame']],
        ['class' => \humhub\modules\space\widgets\Sidebar::class, 'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT, 'callback' => ['humhub\modules\freshdesk\Events', 'addFreshdeskFrame']],
        ['class' => \humhub\modules\admin\widgets\AdminMenu::class, 'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT, 'callback' => ['humhub\modules\freshdesk\Events', 'onAdminMenuInit']]
    ]
];
?>
