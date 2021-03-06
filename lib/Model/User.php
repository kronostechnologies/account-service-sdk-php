<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category Class
 * @package  Equisoft\SDK\AccountService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class User implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'uuid' => 'string',
        'displayName' => 'string',
        'email' => 'string',
        'mobilePhone' => 'string',
        'locale' => 'string',
        'state' => '\Equisoft\SDK\AccountService\Model\UserState',
        'locked' => 'bool',
        'legacyRoles' => 'string[]',
        'deletable' => 'bool',
        'billable' => 'bool',
        'agreement' => '\Equisoft\SDK\AccountService\Model\UserAgreement',
        'created' => '\DateTime',
        'services' => '\Equisoft\SDK\AccountService\Model\ServiceAccess[]',
        'servicesUsers' => '\Equisoft\SDK\AccountService\Model\UserServiceAssociation[]',
        'authType' => 'string',
        'ssoProvider' => '\Equisoft\SDK\AccountService\Model\UserSsoProvider',
        'ssoIdentifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'uuid' => null,
        'displayName' => null,
        'email' => null,
        'mobilePhone' => null,
        'locale' => null,
        'state' => null,
        'locked' => null,
        'legacyRoles' => null,
        'deletable' => null,
        'billable' => null,
        'agreement' => null,
        'created' => 'date-time',
        'services' => null,
        'servicesUsers' => null,
        'authType' => null,
        'ssoProvider' => null,
        'ssoIdentifier' => null
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
        'id' => 'id',
        'uuid' => 'uuid',
        'displayName' => 'displayName',
        'email' => 'email',
        'mobilePhone' => 'mobilePhone',
        'locale' => 'locale',
        'state' => 'state',
        'locked' => 'locked',
        'legacyRoles' => 'legacyRoles',
        'deletable' => 'deletable',
        'billable' => 'billable',
        'agreement' => 'agreement',
        'created' => 'created',
        'services' => 'services',
        'servicesUsers' => 'servicesUsers',
        'authType' => 'authType',
        'ssoProvider' => 'ssoProvider',
        'ssoIdentifier' => 'ssoIdentifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'uuid' => 'setUuid',
        'displayName' => 'setDisplayName',
        'email' => 'setEmail',
        'mobilePhone' => 'setMobilePhone',
        'locale' => 'setLocale',
        'state' => 'setState',
        'locked' => 'setLocked',
        'legacyRoles' => 'setLegacyRoles',
        'deletable' => 'setDeletable',
        'billable' => 'setBillable',
        'agreement' => 'setAgreement',
        'created' => 'setCreated',
        'services' => 'setServices',
        'servicesUsers' => 'setServicesUsers',
        'authType' => 'setAuthType',
        'ssoProvider' => 'setSsoProvider',
        'ssoIdentifier' => 'setSsoIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'uuid' => 'getUuid',
        'displayName' => 'getDisplayName',
        'email' => 'getEmail',
        'mobilePhone' => 'getMobilePhone',
        'locale' => 'getLocale',
        'state' => 'getState',
        'locked' => 'getLocked',
        'legacyRoles' => 'getLegacyRoles',
        'deletable' => 'getDeletable',
        'billable' => 'getBillable',
        'agreement' => 'getAgreement',
        'created' => 'getCreated',
        'services' => 'getServices',
        'servicesUsers' => 'getServicesUsers',
        'authType' => 'getAuthType',
        'ssoProvider' => 'getSsoProvider',
        'ssoIdentifier' => 'getSsoIdentifier'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['displayName'] = $data['displayName'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['mobilePhone'] = $data['mobilePhone'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['locked'] = $data['locked'] ?? null;
        $this->container['legacyRoles'] = $data['legacyRoles'] ?? null;
        $this->container['deletable'] = $data['deletable'] ?? null;
        $this->container['billable'] = $data['billable'] ?? null;
        $this->container['agreement'] = $data['agreement'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['services'] = $data['services'] ?? null;
        $this->container['servicesUsers'] = $data['servicesUsers'] ?? null;
        $this->container['authType'] = $data['authType'] ?? null;
        $this->container['ssoProvider'] = $data['ssoProvider'] ?? null;
        $this->container['ssoIdentifier'] = $data['ssoIdentifier'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
        }
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['locked'] === null) {
            $invalidProperties[] = "'locked' can't be null";
        }
        if ($this->container['legacyRoles'] === null) {
            $invalidProperties[] = "'legacyRoles' can't be null";
        }
        if ($this->container['deletable'] === null) {
            $invalidProperties[] = "'deletable' can't be null";
        }
        if ($this->container['billable'] === null) {
            $invalidProperties[] = "'billable' can't be null";
        }
        if ($this->container['agreement'] === null) {
            $invalidProperties[] = "'agreement' can't be null";
        }
        if ($this->container['services'] === null) {
            $invalidProperties[] = "'services' can't be null";
        }
        if ($this->container['servicesUsers'] === null) {
            $invalidProperties[] = "'servicesUsers' can't be null";
        }
        if ($this->container['authType'] === null) {
            $invalidProperties[] = "'authType' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string $displayName displayName
     *
     * @return self
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets mobilePhone
     *
     * @return string|null
     */
    public function getMobilePhone()
    {
        return $this->container['mobilePhone'];
    }

    /**
     * Sets mobilePhone
     *
     * @param string|null $mobilePhone Mobile phone used for sms password reset.
     *
     * @return self
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->container['mobilePhone'] = $mobilePhone;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale locale
     *
     * @return self
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \Equisoft\SDK\AccountService\Model\UserState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Equisoft\SDK\AccountService\Model\UserState $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return bool
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param bool $locked locked
     *
     * @return self
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

        return $this;
    }

    /**
     * Gets legacyRoles
     *
     * @return string[]
     */
    public function getLegacyRoles()
    {
        return $this->container['legacyRoles'];
    }

    /**
     * Sets legacyRoles
     *
     * @param string[] $legacyRoles Legacy roles the user is member of
     *
     * @return self
     */
    public function setLegacyRoles($legacyRoles)
    {
        $this->container['legacyRoles'] = $legacyRoles;

        return $this;
    }

    /**
     * Gets deletable
     *
     * @return bool
     */
    public function getDeletable()
    {
        return $this->container['deletable'];
    }

    /**
     * Sets deletable
     *
     * @param bool $deletable User deletion is disabled.
     *
     * @return self
     */
    public function setDeletable($deletable)
    {
        $this->container['deletable'] = $deletable;

        return $this;
    }

    /**
     * Gets billable
     *
     * @return bool
     */
    public function getBillable()
    {
        return $this->container['billable'];
    }

    /**
     * Sets billable
     *
     * @param bool $billable User is accounted for billing.
     *
     * @return self
     */
    public function setBillable($billable)
    {
        $this->container['billable'] = $billable;

        return $this;
    }

    /**
     * Gets agreement
     *
     * @return \Equisoft\SDK\AccountService\Model\UserAgreement
     */
    public function getAgreement()
    {
        return $this->container['agreement'];
    }

    /**
     * Sets agreement
     *
     * @param \Equisoft\SDK\AccountService\Model\UserAgreement $agreement agreement
     *
     * @return self
     */
    public function setAgreement($agreement)
    {
        $this->container['agreement'] = $agreement;

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
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \Equisoft\SDK\AccountService\Model\ServiceAccess[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \Equisoft\SDK\AccountService\Model\ServiceAccess[] $services services
     *
     * @return self
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets servicesUsers
     *
     * @return \Equisoft\SDK\AccountService\Model\UserServiceAssociation[]
     */
    public function getServicesUsers()
    {
        return $this->container['servicesUsers'];
    }

    /**
     * Sets servicesUsers
     *
     * @param \Equisoft\SDK\AccountService\Model\UserServiceAssociation[] $servicesUsers servicesUsers
     *
     * @return self
     */
    public function setServicesUsers($servicesUsers)
    {
        $this->container['servicesUsers'] = $servicesUsers;

        return $this;
    }

    /**
     * Gets authType
     *
     * @return string
     */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
     * Sets authType
     *
     * @param string $authType authType
     *
     * @return self
     */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;

        return $this;
    }

    /**
     * Gets ssoProvider
     *
     * @return \Equisoft\SDK\AccountService\Model\UserSsoProvider|null
     */
    public function getSsoProvider()
    {
        return $this->container['ssoProvider'];
    }

    /**
     * Sets ssoProvider
     *
     * @param \Equisoft\SDK\AccountService\Model\UserSsoProvider|null $ssoProvider ssoProvider
     *
     * @return self
     */
    public function setSsoProvider($ssoProvider)
    {
        $this->container['ssoProvider'] = $ssoProvider;

        return $this;
    }

    /**
     * Gets ssoIdentifier
     *
     * @return string|null
     */
    public function getSsoIdentifier()
    {
        return $this->container['ssoIdentifier'];
    }

    /**
     * Sets ssoIdentifier
     *
     * @param string|null $ssoIdentifier ssoIdentifier
     *
     * @return self
     */
    public function setSsoIdentifier($ssoIdentifier)
    {
        $this->container['ssoIdentifier'] = $ssoIdentifier;

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


