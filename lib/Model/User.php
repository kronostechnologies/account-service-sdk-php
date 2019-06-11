<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category Class
 * @package  Equisoft\SDK\AccountService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

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
        'displayName' => 'string',
        'email' => 'string',
        'mobilePhone' => 'string',
        'locale' => '\Equisoft\SDK\AccountService\Model\UserLocale',
        'state' => '\Equisoft\SDK\AccountService\Model\UserState',
        'roles' => 'string[]',
        'deletable' => 'bool',
        'billable' => 'bool',
        'agreement' => '\Equisoft\SDK\AccountService\Model\UserAgreement',
        'created' => '\DateTime',
        'crm' => '\Equisoft\SDK\AccountService\Model\UserDatabase',
        'fna' => '\Equisoft\SDK\AccountService\Model\UserDatabase'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'displayName' => null,
        'email' => null,
        'mobilePhone' => null,
        'locale' => null,
        'state' => null,
        'roles' => null,
        'deletable' => null,
        'billable' => null,
        'agreement' => null,
        'created' => 'date-time',
        'crm' => null,
        'fna' => null
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
        'displayName' => 'displayName',
        'email' => 'email',
        'mobilePhone' => 'mobilePhone',
        'locale' => 'locale',
        'state' => 'state',
        'roles' => 'roles',
        'deletable' => 'deletable',
        'billable' => 'billable',
        'agreement' => 'agreement',
        'created' => 'created',
        'crm' => 'crm',
        'fna' => 'fna'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'displayName' => 'setDisplayName',
        'email' => 'setEmail',
        'mobilePhone' => 'setMobilePhone',
        'locale' => 'setLocale',
        'state' => 'setState',
        'roles' => 'setRoles',
        'deletable' => 'setDeletable',
        'billable' => 'setBillable',
        'agreement' => 'setAgreement',
        'created' => 'setCreated',
        'crm' => 'setCrm',
        'fna' => 'setFna'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'displayName' => 'getDisplayName',
        'email' => 'getEmail',
        'mobilePhone' => 'getMobilePhone',
        'locale' => 'getLocale',
        'state' => 'getState',
        'roles' => 'getRoles',
        'deletable' => 'getDeletable',
        'billable' => 'getBillable',
        'agreement' => 'getAgreement',
        'created' => 'getCreated',
        'crm' => 'getCrm',
        'fna' => 'getFna'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['mobilePhone'] = isset($data['mobilePhone']) ? $data['mobilePhone'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['deletable'] = isset($data['deletable']) ? $data['deletable'] : null;
        $this->container['billable'] = isset($data['billable']) ? $data['billable'] : null;
        $this->container['agreement'] = isset($data['agreement']) ? $data['agreement'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['crm'] = isset($data['crm']) ? $data['crm'] : null;
        $this->container['fna'] = isset($data['fna']) ? $data['fna'] : null;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return $this
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
     * @return $this
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->container['mobilePhone'] = $mobilePhone;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return \Equisoft\SDK\AccountService\Model\UserLocale|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param \Equisoft\SDK\AccountService\Model\UserLocale|null $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \Equisoft\SDK\AccountService\Model\UserState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Equisoft\SDK\AccountService\Model\UserState|null $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return string[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param string[]|null $roles Roles the user is member a member of.
     *
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets deletable
     *
     * @return bool|null
     */
    public function getDeletable()
    {
        return $this->container['deletable'];
    }

    /**
     * Sets deletable
     *
     * @param bool|null $deletable User deletion is disabled.
     *
     * @return $this
     */
    public function setDeletable($deletable)
    {
        $this->container['deletable'] = $deletable;

        return $this;
    }

    /**
     * Gets billable
     *
     * @return bool|null
     */
    public function getBillable()
    {
        return $this->container['billable'];
    }

    /**
     * Sets billable
     *
     * @param bool|null $billable User is accounted for billing.
     *
     * @return $this
     */
    public function setBillable($billable)
    {
        $this->container['billable'] = $billable;

        return $this;
    }

    /**
     * Gets agreement
     *
     * @return \Equisoft\SDK\AccountService\Model\UserAgreement|null
     */
    public function getAgreement()
    {
        return $this->container['agreement'];
    }

    /**
     * Sets agreement
     *
     * @param \Equisoft\SDK\AccountService\Model\UserAgreement|null $agreement agreement
     *
     * @return $this
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
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets crm
     *
     * @return \Equisoft\SDK\AccountService\Model\UserDatabase|null
     */
    public function getCrm()
    {
        return $this->container['crm'];
    }

    /**
     * Sets crm
     *
     * @param \Equisoft\SDK\AccountService\Model\UserDatabase|null $crm crm
     *
     * @return $this
     */
    public function setCrm($crm)
    {
        $this->container['crm'] = $crm;

        return $this;
    }

    /**
     * Gets fna
     *
     * @return \Equisoft\SDK\AccountService\Model\UserDatabase|null
     */
    public function getFna()
    {
        return $this->container['fna'];
    }

    /**
     * Sets fna
     *
     * @param \Equisoft\SDK\AccountService\Model\UserDatabase|null $fna fna
     *
     * @return $this
     */
    public function setFna($fna)
    {
        $this->container['fna'] = $fna;

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


