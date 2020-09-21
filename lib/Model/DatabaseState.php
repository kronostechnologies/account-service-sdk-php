<?php
/**
 * DatabaseState
 *
 * PHP version 7.2
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
 * OpenAPI Generator version: 5.0.0-beta2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Equisoft\SDK\AccountService\Model;
use \Equisoft\SDK\AccountService\ObjectSerializer;

/**
 * DatabaseState Class Doc Comment
 *
 * @category Class
 * @description States: * &#x60;ENABLED&#x60; - Database is active. * &#x60;DISABLED&#x60; - Access to this database is suspended. * &#x60;DELETED&#x60; - Database is deleted. * &#x60;MAINTENANCE&#x60; - Database is in maintenance, login temporarily suspended.
 * @package  Equisoft\SDK\AccountService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DatabaseState
{
    /**
     * Possible values of this enum
     */
    const ENABLED = 'ENABLED';
    const DISABLED = 'DISABLED';
    const DELETED = 'DELETED';
    const MAINTENANCE = 'MAINTENANCE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ENABLED,
            self::DISABLED,
            self::DELETED,
            self::MAINTENANCE,
        ];
    }
}


