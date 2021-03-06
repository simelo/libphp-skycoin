<?php
/**
 * NetworkConnectionSchema
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
 * NetworkConnectionSchema Class Doc Comment
 *
 * @category Class
 * @package  SkyApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NetworkConnectionSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'networkConnectionSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'connectedAt' => 'int',
        'height' => 'int',
        'id' => 'int',
        'isTrustedPeer' => 'bool',
        'lastReceived' => 'int',
        'lastSent' => 'int',
        'listenPort' => 'int',
        'mirror' => 'int',
        'outgoing' => 'bool',
        'state' => 'string',
        'unconfirmedVerifyTransaction' => '\SkyApi\Model\NetworkConnectionSchemaUnconfirmedVerifyTransaction',
        'userAgent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'address' => null,
        'connectedAt' => 'int64',
        'height' => 'int64',
        'id' => 'int64',
        'isTrustedPeer' => null,
        'lastReceived' => 'int64',
        'lastSent' => 'int64',
        'listenPort' => 'int32',
        'mirror' => 'int32',
        'outgoing' => null,
        'state' => null,
        'unconfirmedVerifyTransaction' => null,
        'userAgent' => null
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
        'address' => 'address',
        'connectedAt' => 'connected_at',
        'height' => 'height',
        'id' => 'id',
        'isTrustedPeer' => 'is_trusted_peer',
        'lastReceived' => 'last_received',
        'lastSent' => 'last_sent',
        'listenPort' => 'listen_port',
        'mirror' => 'mirror',
        'outgoing' => 'outgoing',
        'state' => 'state',
        'unconfirmedVerifyTransaction' => 'unconfirmed_verify_transaction',
        'userAgent' => 'user_agent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'connectedAt' => 'setConnectedAt',
        'height' => 'setHeight',
        'id' => 'setId',
        'isTrustedPeer' => 'setIsTrustedPeer',
        'lastReceived' => 'setLastReceived',
        'lastSent' => 'setLastSent',
        'listenPort' => 'setListenPort',
        'mirror' => 'setMirror',
        'outgoing' => 'setOutgoing',
        'state' => 'setState',
        'unconfirmedVerifyTransaction' => 'setUnconfirmedVerifyTransaction',
        'userAgent' => 'setUserAgent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'connectedAt' => 'getConnectedAt',
        'height' => 'getHeight',
        'id' => 'getId',
        'isTrustedPeer' => 'getIsTrustedPeer',
        'lastReceived' => 'getLastReceived',
        'lastSent' => 'getLastSent',
        'listenPort' => 'getListenPort',
        'mirror' => 'getMirror',
        'outgoing' => 'getOutgoing',
        'state' => 'getState',
        'unconfirmedVerifyTransaction' => 'getUnconfirmedVerifyTransaction',
        'userAgent' => 'getUserAgent'
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

    const STATE_PENDING = 'pending';
    const STATE_CONNECTED = 'connected';
    const STATE_INTRODUCED = 'introduced';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_CONNECTED,
            self::STATE_INTRODUCED,
        ];
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['connectedAt'] = isset($data['connectedAt']) ? $data['connectedAt'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isTrustedPeer'] = isset($data['isTrustedPeer']) ? $data['isTrustedPeer'] : null;
        $this->container['lastReceived'] = isset($data['lastReceived']) ? $data['lastReceived'] : null;
        $this->container['lastSent'] = isset($data['lastSent']) ? $data['lastSent'] : null;
        $this->container['listenPort'] = isset($data['listenPort']) ? $data['listenPort'] : null;
        $this->container['mirror'] = isset($data['mirror']) ? $data['mirror'] : null;
        $this->container['outgoing'] = isset($data['outgoing']) ? $data['outgoing'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['unconfirmedVerifyTransaction'] = isset($data['unconfirmedVerifyTransaction']) ? $data['unconfirmedVerifyTransaction'] : null;
        $this->container['userAgent'] = isset($data['userAgent']) ? $data['userAgent'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets connectedAt
     *
     * @return int|null
     */
    public function getConnectedAt()
    {
        return $this->container['connectedAt'];
    }

    /**
     * Sets connectedAt
     *
     * @param int|null $connectedAt connectedAt
     *
     * @return $this
     */
    public function setConnectedAt($connectedAt)
    {
        $this->container['connectedAt'] = $connectedAt;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
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
     * Gets isTrustedPeer
     *
     * @return bool|null
     */
    public function getIsTrustedPeer()
    {
        return $this->container['isTrustedPeer'];
    }

    /**
     * Sets isTrustedPeer
     *
     * @param bool|null $isTrustedPeer isTrustedPeer
     *
     * @return $this
     */
    public function setIsTrustedPeer($isTrustedPeer)
    {
        $this->container['isTrustedPeer'] = $isTrustedPeer;

        return $this;
    }

    /**
     * Gets lastReceived
     *
     * @return int|null
     */
    public function getLastReceived()
    {
        return $this->container['lastReceived'];
    }

    /**
     * Sets lastReceived
     *
     * @param int|null $lastReceived lastReceived
     *
     * @return $this
     */
    public function setLastReceived($lastReceived)
    {
        $this->container['lastReceived'] = $lastReceived;

        return $this;
    }

    /**
     * Gets lastSent
     *
     * @return int|null
     */
    public function getLastSent()
    {
        return $this->container['lastSent'];
    }

    /**
     * Sets lastSent
     *
     * @param int|null $lastSent lastSent
     *
     * @return $this
     */
    public function setLastSent($lastSent)
    {
        $this->container['lastSent'] = $lastSent;

        return $this;
    }

    /**
     * Gets listenPort
     *
     * @return int|null
     */
    public function getListenPort()
    {
        return $this->container['listenPort'];
    }

    /**
     * Sets listenPort
     *
     * @param int|null $listenPort listenPort
     *
     * @return $this
     */
    public function setListenPort($listenPort)
    {
        $this->container['listenPort'] = $listenPort;

        return $this;
    }

    /**
     * Gets mirror
     *
     * @return int|null
     */
    public function getMirror()
    {
        return $this->container['mirror'];
    }

    /**
     * Sets mirror
     *
     * @param int|null $mirror mirror
     *
     * @return $this
     */
    public function setMirror($mirror)
    {
        $this->container['mirror'] = $mirror;

        return $this;
    }

    /**
     * Gets outgoing
     *
     * @return bool|null
     */
    public function getOutgoing()
    {
        return $this->container['outgoing'];
    }

    /**
     * Sets outgoing
     *
     * @param bool|null $outgoing outgoing
     *
     * @return $this
     */
    public function setOutgoing($outgoing)
    {
        $this->container['outgoing'] = $outgoing;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets unconfirmedVerifyTransaction
     *
     * @return \SkyApi\Model\NetworkConnectionSchemaUnconfirmedVerifyTransaction|null
     */
    public function getUnconfirmedVerifyTransaction()
    {
        return $this->container['unconfirmedVerifyTransaction'];
    }

    /**
     * Sets unconfirmedVerifyTransaction
     *
     * @param \SkyApi\Model\NetworkConnectionSchemaUnconfirmedVerifyTransaction|null $unconfirmedVerifyTransaction unconfirmedVerifyTransaction
     *
     * @return $this
     */
    public function setUnconfirmedVerifyTransaction($unconfirmedVerifyTransaction)
    {
        $this->container['unconfirmedVerifyTransaction'] = $unconfirmedVerifyTransaction;

        return $this;
    }

    /**
     * Gets userAgent
     *
     * @return string|null
     */
    public function getUserAgent()
    {
        return $this->container['userAgent'];
    }

    /**
     * Sets userAgent
     *
     * @param string|null $userAgent userAgent
     *
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        $this->container['userAgent'] = $userAgent;

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


