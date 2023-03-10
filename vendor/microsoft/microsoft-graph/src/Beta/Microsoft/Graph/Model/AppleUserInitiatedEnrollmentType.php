<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppleUserInitiatedEnrollmentType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* AppleUserInitiatedEnrollmentType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppleUserInitiatedEnrollmentType extends Enum
{
    /**
    * The Enum AppleUserInitiatedEnrollmentType
    */
    const UNKNOWN = "unknown";
    const DEVICE = "device";
    const USER = "user";
    const ACCOUNT_DRIVEN_USER_ENROLLMENT = "accountDrivenUserEnrollment";
    const WEB_DEVICE_ENROLLMENT = "webDeviceEnrollment";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
