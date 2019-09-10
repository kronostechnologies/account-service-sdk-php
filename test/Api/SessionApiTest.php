<?php
/**
 * SessionApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace Equisoft\SDK\AccountService;

use \Equisoft\SDK\AccountService\Configuration;
use \Equisoft\SDK\AccountService\ApiException;
use \Equisoft\SDK\AccountService\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * SessionApiTest Class Doc Comment
 *
 * @category Class
 * @package  Equisoft\SDK\AccountService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SessionApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for createSession
     *
     * Create a user session..
     *
     */
    public function testCreateSession()
    {
    }

    /**
     * Test case for deleteAllSessions
     *
     * Delete all sessions.
     *
     */
    public function testDeleteAllSessions()
    {
    }

    /**
     * Test case for deleteExpiredSessions
     *
     * Delete all expired sessions..
     *
     */
    public function testDeleteExpiredSessions()
    {
    }

    /**
     * Test case for deleteSession
     *
     * Delete a user session..
     *
     */
    public function testDeleteSession()
    {
    }

    /**
     * Test case for deleteSessionSsoToken
     *
     * Delete a sso token for the session for a given id/name/type.
     *
     */
    public function testDeleteSessionSsoToken()
    {
    }

    /**
     * Test case for enableSession
     *
     * Allow activation for sessions created with enable=false. This may be extended to enable specific services. Disabled sessions are not allowed to be used by first-party application (Equisoft/Connect, Equisoft/Plan)..
     *
     */
    public function testEnableSession()
    {
    }

    /**
     * Test case for enableSessionForEquisoftConnect
     *
     * Enable session for the Equisoft/Connect service.
     *
     */
    public function testEnableSessionForEquisoftConnect()
    {
    }

    /**
     * Test case for getSession
     *
     * Get detailed information about a user session..
     *
     */
    public function testGetSession()
    {
    }

    /**
     * Test case for getSessionSsoToken
     *
     * Get a stored sso token for the session.
     *
     */
    public function testGetSessionSsoToken()
    {
    }

    /**
     * Test case for impersonate
     *
     * Impersonate the given user context..
     *
     */
    public function testImpersonate()
    {
    }

    /**
     * Test case for revertIdentity
     *
     * Revert an impersonated session to the context of the \"admin\" user who initiated the impersonation..
     *
     */
    public function testRevertIdentity()
    {
    }

    /**
     * Test case for setSessionSsoToken
     *
     * Store a sso token for the session for a given id/name/type.
     *
     */
    public function testSetSessionSsoToken()
    {
    }
}
