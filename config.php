<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

use humhub\modules\blockprofilechanges\Events;
use humhub\modules\user\controllers\AccountController;
use humhub\modules\user\widgets\AccountMenu;
use humhub\modules\user\widgets\AccountTopMenu;
use humhub\modules\user\widgets\ProfileEditButton;

/** @noinspection MissedFieldInspection */
return [
    'id' => 'block-profile-changes',
    'class' => 'humhub\modules\blockprofilechanges\Module',
    'namespace' => 'humhub\modules\blockprofilechanges',
    'events' => [
        [AccountController::class, AccountController::EVENT_BEFORE_ACTION, [Events::class, 'onControllerAction']],
        [AccountMenu::class, AccountMenu::EVENT_BEFORE_RUN, [Events::class, 'onAccountMenu']],
        [AccountTopMenu::class, AccountTopMenu::EVENT_BEFORE_RUN, [Events::class, 'onAccountTopMenu']],
        [ProfileEditButton::class, ProfileEditButton::EVENT_BEFORE_RUN, [Events::class, 'onProfileEditButton']],
    ],
];
