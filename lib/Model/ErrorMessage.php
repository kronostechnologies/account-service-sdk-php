<?php
/**
 * ErrorMessage
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
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Equisoft\SDK\AccountService\Model;
use \Equisoft\SDK\AccountService\ObjectSerializer;

/**
 * ErrorMessage Class Doc Comment
 *
 * @category Class
 * @package  Equisoft\SDK\AccountService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ErrorMessage
{
    /**
     * Possible values of this enum
     */
    const SERVER_ERROR = 'SERVER_ERROR';
    const NOT_FOUND = 'NOT_FOUND';
    const BAD_REQUEST = 'BAD_REQUEST';
    const ACCESS_DENIED = 'ACCESS_DENIED';
    const PASSWORD_RESET_REQUESTED = 'PASSWORD_RESET_REQUESTED';
    const SESSION_ALREADY_IMPERSONATED = 'SESSION_ALREADY_IMPERSONATED';
    const SESSION_NOT_IMPERSONATED = 'SESSION_NOT_IMPERSONATED';
    const SESSION_NOT_ENABLED = 'SESSION_NOT_ENABLED';
    const USER_NOT_ENABLED = 'USER_NOT_ENABLED';
    const USER_AGREEMENT_REQUESTED = 'USER_AGREEMENT_REQUESTED';
    const CONCURRENT_ACCESS = 'CONCURRENT_ACCESS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SERVER_ERROR,
            self::NOT_FOUND,
            self::BAD_REQUEST,
            self::ACCESS_DENIED,
            self::PASSWORD_RESET_REQUESTED,
            self::SESSION_ALREADY_IMPERSONATED,
            self::SESSION_NOT_IMPERSONATED,
            self::SESSION_NOT_ENABLED,
            self::USER_NOT_ENABLED,
            self::USER_AGREEMENT_REQUESTED,
            self::CONCURRENT_ACCESS,
        ];
    }
}

