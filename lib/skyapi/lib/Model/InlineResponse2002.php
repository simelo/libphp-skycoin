<?php
/**
 * InlineResponse2002
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
 * InlineResponse2002 Class Doc Comment
 *
 * @category Class
 * @package  SkyApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse2002 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currentCoinhourSupply' => 'string',
        'currentSupply' => 'string',
        'lockedDistributionAddresses' => 'string[]',
        'maxSupply' => 'string',
        'totalCoinhourSupply' => 'string',
        'totalSupply' => 'string',
        'unlockedDistributionAddresses' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'currentCoinhourSupply' => null,
        'currentSupply' => null,
        'lockedDistributionAddresses' => null,
        'maxSupply' => null,
        'totalCoinhourSupply' => null,
        'totalSupply' => null,
        'unlockedDistributionAddresses' => null
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
        'currentCoinhourSupply' => 'current_coinhour_supply',
        'currentSupply' => 'current_supply',
        'lockedDistributionAddresses' => 'locked_distribution_addresses',
        'maxSupply' => 'max_supply',
        'totalCoinhourSupply' => 'total_coinhour_supply',
        'totalSupply' => 'total_supply',
        'unlockedDistributionAddresses' => 'unlocked_distribution_addresses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currentCoinhourSupply' => 'setCurrentCoinhourSupply',
        'currentSupply' => 'setCurrentSupply',
        'lockedDistributionAddresses' => 'setLockedDistributionAddresses',
        'maxSupply' => 'setMaxSupply',
        'totalCoinhourSupply' => 'setTotalCoinhourSupply',
        'totalSupply' => 'setTotalSupply',
        'unlockedDistributionAddresses' => 'setUnlockedDistributionAddresses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currentCoinhourSupply' => 'getCurrentCoinhourSupply',
        'currentSupply' => 'getCurrentSupply',
        'lockedDistributionAddresses' => 'getLockedDistributionAddresses',
        'maxSupply' => 'getMaxSupply',
        'totalCoinhourSupply' => 'getTotalCoinhourSupply',
        'totalSupply' => 'getTotalSupply',
        'unlockedDistributionAddresses' => 'getUnlockedDistributionAddresses'
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
        $this->container['currentCoinhourSupply'] = isset($data['currentCoinhourSupply']) ? $data['currentCoinhourSupply'] : null;
        $this->container['currentSupply'] = isset($data['currentSupply']) ? $data['currentSupply'] : null;
        $this->container['lockedDistributionAddresses'] = isset($data['lockedDistributionAddresses']) ? $data['lockedDistributionAddresses'] : null;
        $this->container['maxSupply'] = isset($data['maxSupply']) ? $data['maxSupply'] : null;
        $this->container['totalCoinhourSupply'] = isset($data['totalCoinhourSupply']) ? $data['totalCoinhourSupply'] : null;
        $this->container['totalSupply'] = isset($data['totalSupply']) ? $data['totalSupply'] : null;
        $this->container['unlockedDistributionAddresses'] = isset($data['unlockedDistributionAddresses']) ? $data['unlockedDistributionAddresses'] : null;
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
     * Gets currentCoinhourSupply
     *
     * @return string|null
     */
    public function getCurrentCoinhourSupply()
    {
        return $this->container['currentCoinhourSupply'];
    }

    /**
     * Sets currentCoinhourSupply
     *
     * @param string|null $currentCoinhourSupply CurrentCoinHourSupply is coins hours in non distribution addresses.
     *
     * @return $this
     */
    public function setCurrentCoinhourSupply($currentCoinhourSupply)
    {
        $this->container['currentCoinhourSupply'] = $currentCoinhourSupply;

        return $this;
    }

    /**
     * Gets currentSupply
     *
     * @return string|null
     */
    public function getCurrentSupply()
    {
        return $this->container['currentSupply'];
    }

    /**
     * Sets currentSupply
     *
     * @param string|null $currentSupply Coins distributed beyond the project.
     *
     * @return $this
     */
    public function setCurrentSupply($currentSupply)
    {
        $this->container['currentSupply'] = $currentSupply;

        return $this;
    }

    /**
     * Gets lockedDistributionAddresses
     *
     * @return string[]|null
     */
    public function getLockedDistributionAddresses()
    {
        return $this->container['lockedDistributionAddresses'];
    }

    /**
     * Sets lockedDistributionAddresses
     *
     * @param string[]|null $lockedDistributionAddresses Distribution addresses which are locked and do not count towards total supply.
     *
     * @return $this
     */
    public function setLockedDistributionAddresses($lockedDistributionAddresses)
    {
        $this->container['lockedDistributionAddresses'] = $lockedDistributionAddresses;

        return $this;
    }

    /**
     * Gets maxSupply
     *
     * @return string|null
     */
    public function getMaxSupply()
    {
        return $this->container['maxSupply'];
    }

    /**
     * Sets maxSupply
     *
     * @param string|null $maxSupply MaxSupply is the maximum number of coins to be distributed ever.
     *
     * @return $this
     */
    public function setMaxSupply($maxSupply)
    {
        $this->container['maxSupply'] = $maxSupply;

        return $this;
    }

    /**
     * Gets totalCoinhourSupply
     *
     * @return string|null
     */
    public function getTotalCoinhourSupply()
    {
        return $this->container['totalCoinhourSupply'];
    }

    /**
     * Sets totalCoinhourSupply
     *
     * @param string|null $totalCoinhourSupply TotalCoinHourSupply is coin hours in all addresses including unlocked distribution addresses.
     *
     * @return $this
     */
    public function setTotalCoinhourSupply($totalCoinhourSupply)
    {
        $this->container['totalCoinhourSupply'] = $totalCoinhourSupply;

        return $this;
    }

    /**
     * Gets totalSupply
     *
     * @return string|null
     */
    public function getTotalSupply()
    {
        return $this->container['totalSupply'];
    }

    /**
     * Sets totalSupply
     *
     * @param string|null $totalSupply TotalSupply is CurrentSupply plus coins held by the distribution addresses that are spendable.
     *
     * @return $this
     */
    public function setTotalSupply($totalSupply)
    {
        $this->container['totalSupply'] = $totalSupply;

        return $this;
    }

    /**
     * Gets unlockedDistributionAddresses
     *
     * @return string[]|null
     */
    public function getUnlockedDistributionAddresses()
    {
        return $this->container['unlockedDistributionAddresses'];
    }

    /**
     * Sets unlockedDistributionAddresses
     *
     * @param string[]|null $unlockedDistributionAddresses Distribution addresses which count towards total supply.
     *
     * @return $this
     */
    public function setUnlockedDistributionAddresses($unlockedDistributionAddresses)
    {
        $this->container['unlockedDistributionAddresses'] = $unlockedDistributionAddresses;

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


