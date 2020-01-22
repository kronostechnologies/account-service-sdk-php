<?php
/**
 * ServiceAccess
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

use \ArrayAccess;
use \Equisoft\SDK\AccountService\ObjectSerializer;

/**
 * ServiceAccess Class Doc Comment
 *
 * @category Class
 * @package  Equisoft\SDK\AccountService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceAccess implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ServiceAccess';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'serviceName' => '\Equisoft\SDK\AccountService\Model\ServiceName',
        'databaseId' => 'int',
        'databaseName' => 'string',
        'databaseState' => '\Equisoft\SDK\AccountService\Model\DatabaseState',
        'userId' => 'int',
        'maxConcurrentAccess' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'serviceName' => null,
        'databaseId' => 'int64',
        'databaseName' => null,
        'databaseState' => null,
        'userId' => 'int64',
        'maxConcurrentAccess' => 'int32'
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
        'serviceName' => 'serviceName',
        'databaseId' => 'databaseId',
        'databaseName' => 'databaseName',
        'databaseState' => 'databaseState',
        'userId' => 'userId',
        'maxConcurrentAccess' => 'maxConcurrentAccess'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serviceName' => 'setServiceName',
        'databaseId' => 'setDatabaseId',
        'databaseName' => 'setDatabaseName',
        'databaseState' => 'setDatabaseState',
        'userId' => 'setUserId',
        'maxConcurrentAccess' => 'setMaxConcurrentAccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serviceName' => 'getServiceName',
        'databaseId' => 'getDatabaseId',
        'databaseName' => 'getDatabaseName',
        'databaseState' => 'getDatabaseState',
        'userId' => 'getUserId',
        'maxConcurrentAccess' => 'getMaxConcurrentAccess'
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
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['databaseId'] = isset($data['databaseId']) ? $data['databaseId'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['databaseState'] = isset($data['databaseState']) ? $data['databaseState'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['maxConcurrentAccess'] = isset($data['maxConcurrentAccess']) ? $data['maxConcurrentAccess'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['serviceName'] === null) {
            $invalidProperties[] = "'serviceName' can't be null";
        }
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
     * Gets serviceName
     *
     * @return \Equisoft\SDK\AccountService\Model\ServiceName
     */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
     * Sets serviceName
     *
     * @param \Equisoft\SDK\AccountService\Model\ServiceName $serviceName serviceName
     *
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;

        return $this;
    }

    /**
     * Gets databaseId
     *
     * @return int|null
     */
    public function getDatabaseId()
    {
        return $this->container['databaseId'];
    }

    /**
     * Sets databaseId
     *
     * @param int|null $databaseId databaseId
     *
     * @return $this
     */
    public function setDatabaseId($databaseId)
    {
        $this->container['databaseId'] = $databaseId;

        return $this;
    }

    /**
     * Gets databaseName
     *
     * @return string|null
     */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
     * Sets databaseName
     *
     * @param string|null $databaseName databaseName
     *
     * @return $this
     */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;

        return $this;
    }

    /**
     * Gets databaseState
     *
     * @return \Equisoft\SDK\AccountService\Model\DatabaseState|null
     */
    public function getDatabaseState()
    {
        return $this->container['databaseState'];
    }

    /**
     * Sets databaseState
     *
     * @param \Equisoft\SDK\AccountService\Model\DatabaseState|null $databaseState databaseState
     *
     * @return $this
     */
    public function setDatabaseState($databaseState)
    {
        $this->container['databaseState'] = $databaseState;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param int|null $userId Local ID of the user in the database.
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets maxConcurrentAccess
     *
     * @return int|null
     */
    public function getMaxConcurrentAccess()
    {
        return $this->container['maxConcurrentAccess'];
    }

    /**
     * Sets maxConcurrentAccess
     *
     * @param int|null $maxConcurrentAccess Number of concurrent desktop session allowed for Equisoft/Connect. 0 for unlimited access.
     *
     * @return $this
     */
    public function setMaxConcurrentAccess($maxConcurrentAccess)
    {
        $this->container['maxConcurrentAccess'] = $maxConcurrentAccess;

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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


