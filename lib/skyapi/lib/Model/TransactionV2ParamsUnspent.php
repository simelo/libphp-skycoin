<?php
/**
 * TransactionV2ParamsUnspent
 *
 * PHP version 5
 *
 * @category Class
 * @package  Skyapi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Skycoin REST API.
 *
 * Skycoin is a next-generation cryptocurrency.
 *
 * OpenAPI spec version: 0.26.0
 * Contact: contact@skycoin.net
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Skyapi\Model;

use \ArrayAccess;
use \Skyapi\ObjectSerializer;

/**
 * TransactionV2ParamsUnspent Class Doc Comment
 *
 * @category Class
 * @package  Skyapi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionV2ParamsUnspent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'transactionV2ParamsUnspent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hours_selection' => '\Skyapi\Model\TransactionV2ParamsUnspentHoursSelection',
        'unspents' => 'string[]',
        'change_address' => 'string',
        'to' => '\Skyapi\Model\TransactionV2ParamsUnspentTo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'hours_selection' => null,
        'unspents' => null,
        'change_address' => null,
        'to' => null
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
        'hours_selection' => 'hours_selection',
        'unspents' => 'unspents',
        'change_address' => 'change_address',
        'to' => 'to'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hours_selection' => 'setHoursSelection',
        'unspents' => 'setUnspents',
        'change_address' => 'setChangeAddress',
        'to' => 'setTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hours_selection' => 'getHoursSelection',
        'unspents' => 'getUnspents',
        'change_address' => 'getChangeAddress',
        'to' => 'getTo'
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
        $this->container['hours_selection'] = isset($data['hours_selection']) ? $data['hours_selection'] : null;
        $this->container['unspents'] = isset($data['unspents']) ? $data['unspents'] : null;
        $this->container['change_address'] = isset($data['change_address']) ? $data['change_address'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
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
     * Gets hours_selection
     *
     * @return \Skyapi\Model\TransactionV2ParamsUnspentHoursSelection|null
     */
    public function getHoursSelection()
    {
        return $this->container['hours_selection'];
    }

    /**
     * Sets hours_selection
     *
     * @param \Skyapi\Model\TransactionV2ParamsUnspentHoursSelection|null $hours_selection hours_selection
     *
     * @return $this
     */
    public function setHoursSelection($hours_selection)
    {
        $this->container['hours_selection'] = $hours_selection;

        return $this;
    }

    /**
     * Gets unspents
     *
     * @return string[]|null
     */
    public function getUnspents()
    {
        return $this->container['unspents'];
    }

    /**
     * Sets unspents
     *
     * @param string[]|null $unspents unspents
     *
     * @return $this
     */
    public function setUnspents($unspents)
    {
        $this->container['unspents'] = $unspents;

        return $this;
    }

    /**
     * Gets change_address
     *
     * @return string|null
     */
    public function getChangeAddress()
    {
        return $this->container['change_address'];
    }

    /**
     * Sets change_address
     *
     * @param string|null $change_address change_address
     *
     * @return $this
     */
    public function setChangeAddress($change_address)
    {
        $this->container['change_address'] = $change_address;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \Skyapi\Model\TransactionV2ParamsUnspentTo[]|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \Skyapi\Model\TransactionV2ParamsUnspentTo[]|null $to to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

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


