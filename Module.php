<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\blockprofilechanges;

use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module
{

    /**
     * @var array a map of controllerId.actionId pairs which are forbiddden
     */
    public $forbiddenActions = [
        'account.change-email',
        'account.change-password',
        'account.delete',
        'account.edit',
    ];

    /**
     * @inheritdoc
     */
    public $resourcesPath = 'resources';

}