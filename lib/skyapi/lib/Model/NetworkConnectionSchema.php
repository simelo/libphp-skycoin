<?php
/**
 * NetworkConnectionSchema
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
 * NetworkConnectionSchema Class Doc Comment
 *
 * @category Class
 * @package  Skyapi
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
        'connected_at' => 'int',
        'height' => 'int',
        'id' => 'int',
        'is_trusted_peer' => 'bool',
        'last_received' => 'int',
        'last_sent' => 'int',
        'listen_port' => 'int',
        'mirror' => 'int',
        'outgoing' => 'bool',
        'state' => 'string',
        'unconfirmed_verify_transaction' => '\Skyapi\Model\NetworkConnectionSchemaUnconfirmedVerifyTransaction',
        'user_agent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'address' => null,
        'connected_at' => 'int64',
        'height' => 'int64',
        'id' => 'int64',
        'is_trusted_peer' => null,
        'last_received' => 'int64',
        'last_sent' => 'int64',
        'listen_port' => 'int32',
        'mirror' => 'int32',
        'outgoing' => null,
        'state' => null,
        'unconfirmed_verify_transaction' => null,
        'user_agent' => null
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
        'connected_at' => 'connected_at',
        'height' => 'height',
        'id' => 'id',
        'is_trusted_peer' => 'is_trusted_peer',
        'last_received' => 'last_received',
        'last_sent' => 'last_sent',
        'listen_port' => 'listen_port',
        'mirror' => 'mirror',
        'outgoing' => 'outgoing',
        'state' => 'state',
        'unconfirmed_verify_transaction' => 'unconfirmed_verify_transaction',
        'user_agent' => 'user_agent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'connected_at' => 'setConnectedAt',
        'height' => 'setHeight',
        'id' => 'setId',
        'is_trusted_peer' => 'setIsTrustedPeer',
        'last_received' => 'setLastReceived',
        'last_sent' => 'setLastSent',
        'listen_port' => 'setListenPort',
        'mirror' => 'setMirror',
        'outgoing' => 'setOutgoing',
        'state' => 'setState',
        'unconfirmed_verify_transaction' => 'setUnconfirmedVerifyTransaction',
        'user_agent' => 'setUserAgent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'connected_at' => 'getConnectedAt',
        'height' => 'getHeight',
        'id' => 'getId',
        'is_trusted_peer' => 'getIsTrustedPeer',
        'last_received' => 'getLastReceived',
        'last_sent' => 'getLastSent',
        'listen_port' => 'getListenPort',
        'mirror' => 'getMirror',
        'outgoing' => 'getOutgoing',
        'state' => 'getState',
        'unconfirmed_verify_transaction' => 'getUnconfirmedVerifyTransaction',
        'user_agent' => 'getUserAgent'
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
        $this->container['connected_at'] = isset($data['connected_at']) ? $data['connected_at'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_trusted_peer'] = isset($data['is_trusted_peer']) ? $data['is_trusted_peer'] : null;
        $this->container['last_received'] = isset($data['last_received']) ? $data['last_received'] : null;
        $this->container['last_sent'] = isset($data['last_sent']) ? $data['last_sent'] : null;
        $this->container['listen_port'] = isset($data['listen_port']) ? $data['listen_port'] : null;
        $this->container['mirror'] = isset($data['mirror']) ? $data['mirror'] : null;
        $this->container['outgoing'] = isset($data['outgoing']) ? $data['outgoing'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['unconfirmed_verify_transaction'] = isset($data['unconfirmed_verify_transaction']) ? $data['unconfirmed_verify_transaction'] : null;
        $this->container['user_agent'] = isset($data['user_agent']) ? $data['user_agent'] : null;
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
     * Gets connected_at
     *
     * @return int|null
     */
    public function getConnectedAt()
    {
        return $this->container['connected_at'];
    }

    /**
     * Sets connected_at
     *
     * @param int|null $connected_at connected_at
     *
     * @return $this
     */
    public function setConnectedAt($connected_at)
    {
        $this->container['connected_at'] = $connected_at;

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
     * Gets is_trusted_peer
     *
     * @return bool|null
     */
    public function getIsTrustedPeer()
    {
        return $this->container['is_trusted_peer'];
    }

    /**
     * Sets is_trusted_peer
     *
     * @param bool|null $is_trusted_peer is_trusted_peer
     *
     * @return $this
     */
    public function setIsTrustedPeer($is_trusted_peer)
    {
        $this->container['is_trusted_peer'] = $is_trusted_peer;

        return $this;
    }

    /**
     * Gets last_received
     *
     * @return int|null
     */
    public function getLastReceived()
    {
        return $this->container['last_received'];
    }

    /**
     * Sets last_received
     *
     * @param int|null $last_received last_received
     *
     * @return $this
     */
    public function setLastReceived($last_received)
    {
        $this->container['last_received'] = $last_received;

        return $this;
    }

    /**
     * Gets last_sent
     *
     * @return int|null
     */
    public function getLastSent()
    {
        return $this->container['last_sent'];
    }

    /**
     * Sets last_sent
     *
     * @param int|null $last_sent last_sent
     *
     * @return $this
     */
    public function setLastSent($last_sent)
    {
        $this->container['last_sent'] = $last_sent;

        return $this;
    }

    /**
     * Gets listen_port
     *
     * @return int|null
     */
    public function getListenPort()
    {
        return $this->container['listen_port'];
    }

    /**
     * Sets listen_port
     *
     * @param int|null $listen_port listen_port
     *
     * @return $this
     */
    public function setListenPort($listen_port)
    {
        $this->container['listen_port'] = $listen_port;

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
     * Gets unconfirmed_verify_transaction
     *
     * @return \Skyapi\Model\NetworkConnectionSchemaUnconfirmedVerifyTransaction|null
     */
    public function getUnconfirmedVerifyTransaction()
    {
        return $this->container['unconfirmed_verify_transaction'];
    }

    /**
     * Sets unconfirmed_verify_transaction
     *
     * @param \Skyapi\Model\NetworkConnectionSchemaUnconfirmedVerifyTransaction|null $unconfirmed_verify_transaction unconfirmed_verify_transaction
     *
     * @return $this
     */
    public function setUnconfirmedVerifyTransaction($unconfirmed_verify_transaction)
    {
        $this->container['unconfirmed_verify_transaction'] = $unconfirmed_verify_transaction;

        return $this;
    }

    /**
     * Gets user_agent
     *
     * @return string|null
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     *
     * @param string|null $user_agent user_agent
     *
     * @return $this
     */
    public function setUserAgent($user_agent)
    {
        $this->container['user_agent'] = $user_agent;

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


