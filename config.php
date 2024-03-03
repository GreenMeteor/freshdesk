<?php

namespace humhub\modules\freshdesk;

use humhub\modules\dashboard\widgets\Sidebar as DashBar;
use humhub\modules\space\widgets\Sidebar as SpaceBar;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\freshdesk\Events;
use humhub\modules\freshdesk\Module;

return [
    'id' => 'freshdesk',
    'class' => Module::class,
    'namespace' => 'humhub\modules\freshdesk',
    'events' => [
        ['class' => DashBar::class, 'event' => DashBar::EVENT_INIT, 'callback' => [Events::class, 'addFreshdeskFrame']],
        ['class' => SpaceBar::class, 'event' => SpaceBar::EVENT_INIT, 'callback' => [Events::class, 'addFreshdeskFrame']],
        ['class' => AdminMenu::class, 'event' => AdminMenu::EVENT_INIT, 'callback' => [Events::class, 'onAdminMenuInit']]
    ]
];
