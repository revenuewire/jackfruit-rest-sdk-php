<?php
/**
 * ClickRegisterData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * RevenueWire JackFruit REST API (Alpha)
 *
 * This API *does not* represent the final product. Some of the APIs listed below are *highly experimental* and *will likely change* before the final release. They may come with *crashes and bugs* and may potentially cause *data loss*.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ClickRegisterData Class Doc Comment
 *
 * @category    Class
 * @description Click register data object
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ClickRegisterData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ClickRegisterData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alias' => 'string',
        'clickId' => 'string',
        'clickInterval' => 'int',
        'country' => 'string',
        'date' => 'string',
        'ip' => 'string',
        'offer' => 'string',
        'os' => 'string',
        'referrer' => 'string',
        'session' => 'string',
        'subId' => 'string',
        'subId2' => 'string',
        'subId3' => 'string',
        'zone' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'alias' => 'alias',
        'clickId' => 'clickId',
        'clickInterval' => 'clickInterval',
        'country' => 'country',
        'date' => 'date',
        'ip' => 'ip',
        'offer' => 'offer',
        'os' => 'os',
        'referrer' => 'referrer',
        'session' => 'session',
        'subId' => 'subId',
        'subId2' => 'subId2',
        'subId3' => 'subId3',
        'zone' => 'zone'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'alias' => 'setAlias',
        'clickId' => 'setClickId',
        'clickInterval' => 'setClickInterval',
        'country' => 'setCountry',
        'date' => 'setDate',
        'ip' => 'setIp',
        'offer' => 'setOffer',
        'os' => 'setOs',
        'referrer' => 'setReferrer',
        'session' => 'setSession',
        'subId' => 'setSubId',
        'subId2' => 'setSubId2',
        'subId3' => 'setSubId3',
        'zone' => 'setZone'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'alias' => 'getAlias',
        'clickId' => 'getClickId',
        'clickInterval' => 'getClickInterval',
        'country' => 'getCountry',
        'date' => 'getDate',
        'ip' => 'getIp',
        'offer' => 'getOffer',
        'os' => 'getOs',
        'referrer' => 'getReferrer',
        'session' => 'getSession',
        'subId' => 'getSubId',
        'subId2' => 'getSubId2',
        'subId3' => 'getSubId3',
        'zone' => 'getZone'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['clickId'] = isset($data['clickId']) ? $data['clickId'] : null;
        $this->container['clickInterval'] = isset($data['clickInterval']) ? $data['clickInterval'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['offer'] = isset($data['offer']) ? $data['offer'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['referrer'] = isset($data['referrer']) ? $data['referrer'] : null;
        $this->container['session'] = isset($data['session']) ? $data['session'] : null;
        $this->container['subId'] = isset($data['subId']) ? $data['subId'] : null;
        $this->container['subId2'] = isset($data['subId2']) ? $data['subId2'] : null;
        $this->container['subId3'] = isset($data['subId3']) ? $data['subId3'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['alias'] === null) {
            $invalid_properties[] = "'alias' can't be null";
        }
        if ($this->container['clickId'] === null) {
            $invalid_properties[] = "'clickId' can't be null";
        }
        if ($this->container['clickInterval'] === null) {
            $invalid_properties[] = "'clickInterval' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalid_properties[] = "'country' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalid_properties[] = "'date' can't be null";
        }
        if ($this->container['ip'] === null) {
            $invalid_properties[] = "'ip' can't be null";
        }
        if ($this->container['offer'] === null) {
            $invalid_properties[] = "'offer' can't be null";
        }
        if ($this->container['os'] === null) {
            $invalid_properties[] = "'os' can't be null";
        }
        if ($this->container['referrer'] === null) {
            $invalid_properties[] = "'referrer' can't be null";
        }
        if ($this->container['session'] === null) {
            $invalid_properties[] = "'session' can't be null";
        }
        if ($this->container['subId'] === null) {
            $invalid_properties[] = "'subId' can't be null";
        }
        if ($this->container['subId2'] === null) {
            $invalid_properties[] = "'subId2' can't be null";
        }
        if ($this->container['subId3'] === null) {
            $invalid_properties[] = "'subId3' can't be null";
        }
        if ($this->container['zone'] === null) {
            $invalid_properties[] = "'zone' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['alias'] === null) {
            return false;
        }
        if ($this->container['clickId'] === null) {
            return false;
        }
        if ($this->container['clickInterval'] === null) {
            return false;
        }
        if ($this->container['country'] === null) {
            return false;
        }
        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['ip'] === null) {
            return false;
        }
        if ($this->container['offer'] === null) {
            return false;
        }
        if ($this->container['os'] === null) {
            return false;
        }
        if ($this->container['referrer'] === null) {
            return false;
        }
        if ($this->container['session'] === null) {
            return false;
        }
        if ($this->container['subId'] === null) {
            return false;
        }
        if ($this->container['subId2'] === null) {
            return false;
        }
        if ($this->container['subId3'] === null) {
            return false;
        }
        if ($this->container['zone'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets alias
     * @return string
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     * @param string $alias
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets clickId
     * @return string
     */
    public function getClickId()
    {
        return $this->container['clickId'];
    }

    /**
     * Sets clickId
     * @param string $clickId
     * @return $this
     */
    public function setClickId($clickId)
    {
        $this->container['clickId'] = $clickId;

        return $this;
    }

    /**
     * Gets clickInterval
     * @return int
     */
    public function getClickInterval()
    {
        return $this->container['clickInterval'];
    }

    /**
     * Sets clickInterval
     * @param int $clickInterval
     * @return $this
     */
    public function setClickInterval($clickInterval)
    {
        $this->container['clickInterval'] = $clickInterval;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets date
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets ip
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     * @param string $ip
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets offer
     * @return string
     */
    public function getOffer()
    {
        return $this->container['offer'];
    }

    /**
     * Sets offer
     * @param string $offer
     * @return $this
     */
    public function setOffer($offer)
    {
        $this->container['offer'] = $offer;

        return $this;
    }

    /**
     * Gets os
     * @return string
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     * @param string $os
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets referrer
     * @return string
     */
    public function getReferrer()
    {
        return $this->container['referrer'];
    }

    /**
     * Sets referrer
     * @param string $referrer
     * @return $this
     */
    public function setReferrer($referrer)
    {
        $this->container['referrer'] = $referrer;

        return $this;
    }

    /**
     * Gets session
     * @return string
     */
    public function getSession()
    {
        return $this->container['session'];
    }

    /**
     * Sets session
     * @param string $session
     * @return $this
     */
    public function setSession($session)
    {
        $this->container['session'] = $session;

        return $this;
    }

    /**
     * Gets subId
     * @return string
     */
    public function getSubId()
    {
        return $this->container['subId'];
    }

    /**
     * Sets subId
     * @param string $subId
     * @return $this
     */
    public function setSubId($subId)
    {
        $this->container['subId'] = $subId;

        return $this;
    }

    /**
     * Gets subId2
     * @return string
     */
    public function getSubId2()
    {
        return $this->container['subId2'];
    }

    /**
     * Sets subId2
     * @param string $subId2
     * @return $this
     */
    public function setSubId2($subId2)
    {
        $this->container['subId2'] = $subId2;

        return $this;
    }

    /**
     * Gets subId3
     * @return string
     */
    public function getSubId3()
    {
        return $this->container['subId3'];
    }

    /**
     * Sets subId3
     * @param string $subId3
     * @return $this
     */
    public function setSubId3($subId3)
    {
        $this->container['subId3'] = $subId3;

        return $this;
    }

    /**
     * Gets zone
     * @return string
     */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
     * Sets zone
     * @param string $zone
     * @return $this
     */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

