<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

use humhub\components\Application;
use humhub\modules\user\controllers\AccountController;
use humhub\modules\user\widgets\AccountMenu;

/** @noinspection MissedFieldInspection */
return [
    'id' => 'block-profile-changes',
    'class' => 'humhub\modules\blockprofilechanges\Module',
    'namespace' => 'humhub\modules\blockprofilechanges',
    'events' => [
        [AccountController::class, AccountController::EVENT_BEFORE_ACTION, ['\humhub\modules\blockprofilechanges\Events', 'onControllerAction']],
        [AccountMenu::class, AccountMenu::EVENT_BEFORE_RUN, ['\humhub\modules\blockprofilechanges\Events', 'onAccountMenu']]
    ]
];
?>