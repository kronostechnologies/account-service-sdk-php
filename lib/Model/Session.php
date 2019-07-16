<?php
/**
 * Session
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
 * OpenAPI Generator version: 4.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Equisoft\SDK\AccountService\Model;

use \ArrayAccess;
use \Equisoft\SDK\AccountService\ObjectSerializer;

/**
 * Session Class Doc Comment
 *
 * @category Class
 * @package  Equisoft\SDK\AccountService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Session implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Session';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sessionId' => 'string',
        'state' => '\Equisoft\SDK\AccountService\Model\SessionState',
        'created' => '\DateTime',
        'expire' => '\DateTime',
        'user' => '\Equisoft\SDK\AccountService\Model\User',
        'actor' => '\Equisoft\SDK\AccountService\Model\User',
        'sso' => '\Equisoft\SDK\AccountService\Model\SsoProvider',
        'crm' => '\Equisoft\SDK\AccountService\Model\CrmSession'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sessionId' => null,
        'state' => null,
        'created' => 'date-time',
        'expire' => 'date-time',
        'user' => null,
        'actor' => null,
        'sso' => null,
        'crm' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sessionId' => 'sessionId',
        'state' => 'state',
        'created' => 'created',
        'expire' => 'expire',
        'user' => 'user',
        'actor' => 'actor',
        'sso' => 'sso',
        'crm' => 'crm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sessionId' => 'setSessionId',
        'state' => 'setState',
        'created' => 'setCreated',
        'expire' => 'setExpire',
        'user' => 'setUser',
        'actor' => 'setActor',
        'sso' => 'setSso',
        'crm' => 'setCrm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sessionId' => 'getSessionId',
        'state' => 'getState',
        'created' => 'getCreated',
        'expire' => 'getExpire',
        'user' => 'getUser',
        'actor' => 'getActor',
        'sso' => 'getSso',
        'crm' => 'getCrm'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['expire'] = isset($data['expire']) ? $data['expire'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['actor'] = isset($data['actor']) ? $data['actor'] : null;
        $this->container['sso'] = isset($data['sso']) ? $data['sso'] : null;
        $this->container['crm'] = isset($data['crm']) ? $data['crm'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets sessionId
     *
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
     * Sets sessionId
     *
     * @param string|null $sessionId Globally unique identifier.
     *
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \Equisoft\SDK\AccountService\Model\SessionState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Equisoft\SDK\AccountService\Model\SessionState|null $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets expire
     *
     * @return \DateTime|null
     */
    public function getExpire()
    {
        return $this->container['expire'];
    }

    /**
     * Sets expire
     *
     * @param \DateTime|null $expire expire
     *
     * @return $this
     */
    public function setExpire($expire)
    {
        $this->container['expire'] = $expire;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Equisoft\SDK\AccountService\Model\User|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Equisoft\SDK\AccountService\Model\User|null $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets actor
     *
     * @return \Equisoft\SDK\AccountService\Model\User|null
     */
    public function getActor()
    {
        return $this->container['actor'];
    }

    /**
     * Sets actor
     *
     * @param \Equisoft\SDK\AccountService\Model\User|null $actor actor
     *
     * @return $this
     */
    public function setActor($actor)
    {
        $this->container['actor'] = $actor;

        return $this;
    }

    /**
     * Gets sso
     *
     * @return \Equisoft\SDK\AccountService\Model\SsoProvider|null
     */
    public function getSso()
    {
        return $this->container['sso'];
    }

    /**
     * Sets sso
     *
     * @param \Equisoft\SDK\AccountService\Model\SsoProvider|null $sso sso
     *
     * @return $this
     */
    public function setSso($sso)
    {
        $this->container['sso'] = $sso;

        return $this;
    }

    /**
     * Gets crm
     *
     * @return \Equisoft\SDK\AccountService\Model\CrmSession|null
     */
    public function getCrm()
    {
        return $this->container['crm'];
    }

    /**
     * Sets crm
     *
     * @param \Equisoft\SDK\AccountService\Model\CrmSession|null $crm crm
     *
     * @return $this
     */
    public function setCrm($crm)
    {
        $this->container['crm'] = $crm;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


