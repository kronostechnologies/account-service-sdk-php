<?php
/**
 * UserAgreementState
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
 * UserAgreementState Class Doc Comment
 *
 * @category Class
 * @description States: * &#x60;ACCEPTED&#x60; - User agreement and term of use accepted by user. * &#x60;REQUESTED&#x60; - User has yet to approve user agreements.
 * @package  Equisoft\SDK\AccountService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserAgreementState
{
    /**
     * Possible values of this enum
     */
    const ACCEPTED = 'ACCEPTED';
    const REQUESTED = 'REQUESTED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCEPTED,
            self::REQUESTED,
        ];
    }
}


