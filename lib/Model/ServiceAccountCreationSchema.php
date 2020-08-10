<?php
/**
 * ServiceAccountCreationSchema
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

use \ArrayAccess;
use \Equisoft\SDK\AccountService\ObjectSerializer;

/**
 * ServiceAccountCreationSchema Class Doc Comment
 *
 * @category Class
 * @description A request to create a new account
 * @package  Equisoft\SDK\AccountService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceAccountCreationSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ServiceAccountCreationSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'serviceName' => 'string',
        'name' => 'string',
        'clientId' => 'string',
        'displayName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'serviceName' => null,
        'name' => null,
        'clientId' => null,
        'displayName' => null
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
        'name' => 'name',
        'clientId' => 'clientId',
        'displayName' => 'displayName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serviceName' => 'setServiceName',
        'name' => 'setName',
        'clientId' => 'setClientId',
        'displayName' => 'setDisplayName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serviceName' => 'getServiceName',
        'name' => 'getName',
        'clientId' => 'getClientId',
        'displayName' => 'getDisplayName'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
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
     * Gets serviceName
     *
     * @return string|null
     */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
     * Sets serviceName
     *
     * @param string|null $serviceName serviceName
     *
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets clientId
     *
     * @return string|null
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     *
     * @param string|null $clientId clientId
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string|null $displayName displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

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


