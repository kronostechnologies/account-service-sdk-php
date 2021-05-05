<?php
/**
 * CreateOrUpdateOrganizationPayload
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
 * The version of the OpenAPI document: 0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
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
 * CreateOrUpdateOrganizationPayload Class Doc Comment
 *
 * @category Class
 * @description A request to create or update an organization
 * @package  Equisoft\SDK\AccountService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreateOrUpdateOrganizationPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateOrUpdateOrganizationPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => '\Equisoft\SDK\AccountService\Model\LocalizedString',
        'equisoftConnectProfiles' => 'string[]',
        'equisoftPlanProfiles' => 'string[]',
        'parentUuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'equisoftConnectProfiles' => null,
        'equisoftPlanProfiles' => null,
        'parentUuid' => null
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
        'name' => 'name',
        'equisoftConnectProfiles' => 'equisoftConnectProfiles',
        'equisoftPlanProfiles' => 'equisoftPlanProfiles',
        'parentUuid' => 'parentUuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'equisoftConnectProfiles' => 'setEquisoftConnectProfiles',
        'equisoftPlanProfiles' => 'setEquisoftPlanProfiles',
        'parentUuid' => 'setParentUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'equisoftConnectProfiles' => 'getEquisoftConnectProfiles',
        'equisoftPlanProfiles' => 'getEquisoftPlanProfiles',
        'parentUuid' => 'getParentUuid'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['equisoftConnectProfiles'] = $data['equisoftConnectProfiles'] ?? null;
        $this->container['equisoftPlanProfiles'] = $data['equisoftPlanProfiles'] ?? null;
        $this->container['parentUuid'] = $data['parentUuid'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['equisoftConnectProfiles'] === null) {
            $invalidProperties[] = "'equisoftConnectProfiles' can't be null";
        }
        if ($this->container['equisoftPlanProfiles'] === null) {
            $invalidProperties[] = "'equisoftPlanProfiles' can't be null";
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
     * Gets name
     *
     * @return \Equisoft\SDK\AccountService\Model\LocalizedString
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Equisoft\SDK\AccountService\Model\LocalizedString $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets equisoftConnectProfiles
     *
     * @return string[]
     */
    public function getEquisoftConnectProfiles()
    {
        return $this->container['equisoftConnectProfiles'];
    }

    /**
     * Sets equisoftConnectProfiles
     *
     * @param string[] $equisoftConnectProfiles equisoftConnectProfiles
     *
     * @return self
     */
    public function setEquisoftConnectProfiles($equisoftConnectProfiles)
    {
        $this->container['equisoftConnectProfiles'] = $equisoftConnectProfiles;

        return $this;
    }

    /**
     * Gets equisoftPlanProfiles
     *
     * @return string[]
     */
    public function getEquisoftPlanProfiles()
    {
        return $this->container['equisoftPlanProfiles'];
    }

    /**
     * Sets equisoftPlanProfiles
     *
     * @param string[] $equisoftPlanProfiles equisoftPlanProfiles
     *
     * @return self
     */
    public function setEquisoftPlanProfiles($equisoftPlanProfiles)
    {
        $this->container['equisoftPlanProfiles'] = $equisoftPlanProfiles;

        return $this;
    }

    /**
     * Gets parentUuid
     *
     * @return string|null
     */
    public function getParentUuid()
    {
        return $this->container['parentUuid'];
    }

    /**
     * Sets parentUuid
     *
     * @param string|null $parentUuid parentUuid
     *
     * @return self
     */
    public function setParentUuid($parentUuid)
    {
        $this->container['parentUuid'] = $parentUuid;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


