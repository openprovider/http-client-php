<?php
/**
 * NsGroupListGroupsOrderBy
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Dns
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DNS
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\Dns\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * NsGroupListGroupsOrderBy Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Dns
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NsGroupListGroupsOrderBy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ns_groupListGroupsOrderBy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'domain_count' => 'string',
        'ns_count' => 'string',
        'ns_group' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'domain_count' => null,
        'ns_count' => null,
        'ns_group' => null
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
        'domain_count' => 'domain_count',
        'ns_count' => 'ns_count',
        'ns_group' => 'ns_group'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain_count' => 'setDomainCount',
        'ns_count' => 'setNsCount',
        'ns_group' => 'setNsGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain_count' => 'getDomainCount',
        'ns_count' => 'getNsCount',
        'ns_group' => 'getNsGroup'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    #[\ReturnTypeWillChange]
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
        $this->container['domain_count'] = isset($data['domain_count']) ? $data['domain_count'] : null;
        $this->container['ns_count'] = isset($data['ns_count']) ? $data['ns_count'] : null;
        $this->container['ns_group'] = isset($data['ns_group']) ? $data['ns_group'] : 'asc';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets domain_count
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getDomainCount()
    {
        return $this->container['domain_count'];
    }

    /**
     * Sets domain_count
     *
     * @param string|null $domain_count domain_count
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setDomainCount($domain_count)
    {
        $this->container['domain_count'] = $domain_count;

        return $this;
    }

    /**
     * Gets ns_count
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getNsCount()
    {
        return $this->container['ns_count'];
    }

    /**
     * Sets ns_count
     *
     * @param string|null $ns_count ns_count
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setNsCount($ns_count)
    {
        $this->container['ns_count'] = $ns_count;

        return $this;
    }

    /**
     * Gets ns_group
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getNsGroup()
    {
        return $this->container['ns_group'];
    }

    /**
     * Sets ns_group
     *
     * @param string|null $ns_group ns_group
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setNsGroup($ns_group)
    {
        $this->container['ns_group'] = $ns_group;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    #[\ReturnTypeWillChange]
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


