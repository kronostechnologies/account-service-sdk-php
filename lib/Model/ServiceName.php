<?php
/**
 * ServiceName
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
 * OpenAPI Generator version: 4.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Equisoft\SDK\AccountService\Model;
use \Equisoft\SDK\AccountService\ObjectSerializer;

/**
 * ServiceName Class Doc Comment
 *
 * @category Class
 * @package  Equisoft\SDK\AccountService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceName
{
    /**
     * Possible values of this enum
     */
    const EQUISOFT_CONNECT = 'EQUISOFT_CONNECT';
    const EQUISOFT_PLAN = 'EQUISOFT_PLAN';
    const EQUISOFT_ANALYZE_FOR_ADVISORS = 'EQUISOFT_ANALYZE_FOR_ADVISORS';
    const CPANEL = 'CPANEL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EQUISOFT_CONNECT,
            self::EQUISOFT_PLAN,
            self::EQUISOFT_ANALYZE_FOR_ADVISORS,
            self::CPANEL,
        ];
    }
}


