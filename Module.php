<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\blockprofilechanges;

class Module extends \humhub\components\Module
{
    /**
     * @var array a map of controllerId.actionId pairs which are forbidden
     */
    public $forbiddenActions = [
        'account.change-email',
        'account.change-email-validate',
        'account.change-password',
        'account.change-username',
        'account.delete',
        'account.edit',
    ];

    /**
     * @inheritdoc
     */
    public $resourcesPath = 'resources';

}
