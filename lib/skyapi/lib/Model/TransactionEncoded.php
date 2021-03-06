<?php
/**
 * TransactionEncoded
 *
 * PHP version 5
 *
 * @category Class
 * @package  SkyApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Skycoin REST API.
 *
 * Skycoin is a next-generation cryptocurrency.
 *
 * The version of the OpenAPI document: 0.27.0
 * Contact: contact@skycoin.net
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SkyApi\Model;

use \ArrayAccess;
use \SkyApi\ObjectSerializer;

/**
 * TransactionEncoded Class Doc Comment
 *
 * @category Class
 * @package  SkyApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionEncoded implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'transactionEncoded';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction' => '\SkyApi\Model\ApiV1PendingTxsTransaction',
        'received' => 'string',
        'checked' => 'string',
        'announced' => 'string',
        'isValid' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'transaction' => null,
        'received' => null,
        'checked' => null,
        'announced' => null,
        'isValid' => null
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
        'transaction' => 'transaction',
        'received' => 'received',
        'checked' => 'checked',
        'announced' => 'announced',
        'isValid' => 'is_valid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction' => 'setTransaction',
        'received' => 'setReceived',
        'checked' => 'setChecked',
        'announced' => 'setAnnounced',
        'isValid' => 'setIsValid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction' => 'getTransaction',
        'received' => 'getReceived',
        'checked' => 'getChecked',
        'announced' => 'getAnnounced',
        'isValid' => 'getIsValid'
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
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        $this->container['received'] = isset($data['received']) ? $data['received'] : null;
        $this->container['checked'] = isset($data['checked']) ? $data['checked'] : null;
        $this->container['announced'] = isset($data['announced']) ? $data['announced'] : null;
        $this->container['isValid'] = isset($data['isValid']) ? $data['isValid'] : null;
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
     * Gets transaction
     *
     * @return \SkyApi\Model\ApiV1PendingTxsTransaction|null
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \SkyApi\Model\ApiV1PendingTxsTransaction|null $transaction transaction
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->container['transaction'] = $transaction;

        return $this;
    }

    /**
     * Gets received
     *
     * @return string|null
     */
    public function getReceived()
    {
        return $this->container['received'];
    }

    /**
     * Sets received
     *
     * @param string|null $received received
     *
     * @return $this
     */
    public function setReceived($received)
    {
        $this->container['received'] = $received;

        return $this;
    }

    /**
     * Gets checked
     *
     * @return string|null
     */
    public function getChecked()
    {
        return $this->container['checked'];
    }

    /**
     * Sets checked
     *
     * @param string|null $checked checked
     *
     * @return $this
     */
    public function setChecked($checked)
    {
        $this->container['checked'] = $checked;

        return $this;
    }

    /**
     * Gets announced
     *
     * @return string|null
     */
    public function getAnnounced()
    {
        return $this->container['announced'];
    }

    /**
     * Sets announced
     *
     * @param string|null $announced announced
     *
     * @return $this
     */
    public function setAnnounced($announced)
    {
        $this->container['announced'] = $announced;

        return $this;
    }

    /**
     * Gets isValid
     *
     * @return bool|null
     */
    public function getIsValid()
    {
        return $this->container['isValid'];
    }

    /**
     * Sets isValid
     *
     * @param bool|null $isValid isValid
     *
     * @return $this
     */
    public function setIsValid($isValid)
    {
        $this->container['isValid'] = $isValid;

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


