<?php
/**
 * UserState
 *
 * PHP version 5
 *
 * @category Class
 * @package  Equisoft\SDK\AccountService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * User account and session management
 *
 * Provides HTTP endpoints to manage User Accounts and User Sessions.
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Equisoft\SDK\AccountService\Model;
use \Equisoft\SDK\AccountService\ObjectSerializer;

/**
 * UserState Class Doc Comment
 *
 * @category Class
 * @description States: * &#x60;DELETED&#x60; - User is soft deleted or archived. * &#x60;DISABLED&#x60; - Temporarily denied login. * &#x60;ENABLED&#x60; - Allowed to login.
 * @package  Equisoft\SDK\AccountService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserState
{
    /**
     * Possible values of this enum
     */
    const DELETED = 'DELETED';
    const DISABLED = 'DISABLED';
    const ENABLED = 'ENABLED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DELETED,
            self::DISABLED,
            self::ENABLED,
        ];
    }
}


