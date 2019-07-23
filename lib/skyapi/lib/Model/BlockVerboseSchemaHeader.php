<?php
/**
 * BlockVerboseSchemaHeader
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
 * BlockVerboseSchemaHeader Class Doc Comment
 *
 * @category Class
 * @package  Skyapi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BlockVerboseSchemaHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'blockVerboseSchema_header';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seq' => 'int',
        'timestamp' => 'int',
        'fee' => 'int',
        'version' => 'int',
        'block_hash' => 'string',
        'previous_block_hash' => 'string',
        'tx_body_hash' => 'string',
        'ux_hash' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'seq' => null,
        'timestamp' => null,
        'fee' => null,
        'version' => null,
        'block_hash' => null,
        'previous_block_hash' => null,
        'tx_body_hash' => null,
        'ux_hash' => null
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
        'seq' => 'seq',
        'timestamp' => 'timestamp',
        'fee' => 'fee',
        'version' => 'version',
        'block_hash' => 'block_hash',
        'previous_block_hash' => 'previous_block_hash',
        'tx_body_hash' => 'tx_body_hash',
        'ux_hash' => 'ux_hash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seq' => 'setSeq',
        'timestamp' => 'setTimestamp',
        'fee' => 'setFee',
        'version' => 'setVersion',
        'block_hash' => 'setBlockHash',
        'previous_block_hash' => 'setPreviousBlockHash',
        'tx_body_hash' => 'setTxBodyHash',
        'ux_hash' => 'setUxHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seq' => 'getSeq',
        'timestamp' => 'getTimestamp',
        'fee' => 'getFee',
        'version' => 'getVersion',
        'block_hash' => 'getBlockHash',
        'previous_block_hash' => 'getPreviousBlockHash',
        'tx_body_hash' => 'getTxBodyHash',
        'ux_hash' => 'getUxHash'
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
        $this->container['seq'] = isset($data['seq']) ? $data['seq'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['block_hash'] = isset($data['block_hash']) ? $data['block_hash'] : null;
        $this->container['previous_block_hash'] = isset($data['previous_block_hash']) ? $data['previous_block_hash'] : null;
        $this->container['tx_body_hash'] = isset($data['tx_body_hash']) ? $data['tx_body_hash'] : null;
        $this->container['ux_hash'] = isset($data['ux_hash']) ? $data['ux_hash'] : null;
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
     * Gets seq
     *
     * @return int|null
     */
    public function getSeq()
    {
        return $this->container['seq'];
    }

    /**
     * Sets seq
     *
     * @param int|null $seq seq
     *
     * @return $this
     */
    public function setSeq($seq)
    {
        $this->container['seq'] = $seq;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int|null $timestamp timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return int|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param int|null $fee fee
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int|null $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets block_hash
     *
     * @return string|null
     */
    public function getBlockHash()
    {
        return $this->container['block_hash'];
    }

    /**
     * Sets block_hash
     *
     * @param string|null $block_hash block_hash
     *
     * @return $this
     */
    public function setBlockHash($block_hash)
    {
        $this->container['block_hash'] = $block_hash;

        return $this;
    }

    /**
     * Gets previous_block_hash
     *
     * @return string|null
     */
    public function getPreviousBlockHash()
    {
        return $this->container['previous_block_hash'];
    }

    /**
     * Sets previous_block_hash
     *
     * @param string|null $previous_block_hash previous_block_hash
     *
     * @return $this
     */
    public function setPreviousBlockHash($previous_block_hash)
    {
        $this->container['previous_block_hash'] = $previous_block_hash;

        return $this;
    }

    /**
     * Gets tx_body_hash
     *
     * @return string|null
     */
    public function getTxBodyHash()
    {
        return $this->container['tx_body_hash'];
    }

    /**
     * Sets tx_body_hash
     *
     * @param string|null $tx_body_hash tx_body_hash
     *
     * @return $this
     */
    public function setTxBodyHash($tx_body_hash)
    {
        $this->container['tx_body_hash'] = $tx_body_hash;

        return $this;
    }

    /**
     * Gets ux_hash
     *
     * @return string|null
     */
    public function getUxHash()
    {
        return $this->container['ux_hash'];
    }

    /**
     * Sets ux_hash
     *
     * @param string|null $ux_hash ux_hash
     *
     * @return $this
     */
    public function setUxHash($ux_hash)
    {
        $this->container['ux_hash'] = $ux_hash;

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


