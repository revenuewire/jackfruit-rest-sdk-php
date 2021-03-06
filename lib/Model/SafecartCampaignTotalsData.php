<?php
/**
 * SafecartCampaignTotalsData
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
 * SafecartCampaignTotalsData Class Doc Comment
 *
 * @category    Class
 * @description Performance data object
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SafecartCampaignTotalsData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SafecartCampaignTotalsData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clicks' => 'float',
        'conversionRate' => 'float',
        'conversions' => 'float',
        'epc' => 'float',
        'sales' => 'float'
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
        'clicks' => 'clicks',
        'conversionRate' => 'conversionRate',
        'conversions' => 'conversions',
        'epc' => 'epc',
        'sales' => 'sales'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'clicks' => 'setClicks',
        'conversionRate' => 'setConversionRate',
        'conversions' => 'setConversions',
        'epc' => 'setEpc',
        'sales' => 'setSales'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'clicks' => 'getClicks',
        'conversionRate' => 'getConversionRate',
        'conversions' => 'getConversions',
        'epc' => 'getEpc',
        'sales' => 'getSales'
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
        $this->container['clicks'] = isset($data['clicks']) ? $data['clicks'] : null;
        $this->container['conversionRate'] = isset($data['conversionRate']) ? $data['conversionRate'] : null;
        $this->container['conversions'] = isset($data['conversions']) ? $data['conversions'] : null;
        $this->container['epc'] = isset($data['epc']) ? $data['epc'] : null;
        $this->container['sales'] = isset($data['sales']) ? $data['sales'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['clicks'] === null) {
            $invalid_properties[] = "'clicks' can't be null";
        }
        if ($this->container['conversionRate'] === null) {
            $invalid_properties[] = "'conversionRate' can't be null";
        }
        if ($this->container['conversions'] === null) {
            $invalid_properties[] = "'conversions' can't be null";
        }
        if ($this->container['epc'] === null) {
            $invalid_properties[] = "'epc' can't be null";
        }
        if ($this->container['sales'] === null) {
            $invalid_properties[] = "'sales' can't be null";
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

        if ($this->container['clicks'] === null) {
            return false;
        }
        if ($this->container['conversionRate'] === null) {
            return false;
        }
        if ($this->container['conversions'] === null) {
            return false;
        }
        if ($this->container['epc'] === null) {
            return false;
        }
        if ($this->container['sales'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets clicks
     * @return float
     */
    public function getClicks()
    {
        return $this->container['clicks'];
    }

    /**
     * Sets clicks
     * @param float $clicks
     * @return $this
     */
    public function setClicks($clicks)
    {
        $this->container['clicks'] = $clicks;

        return $this;
    }

    /**
     * Gets conversionRate
     * @return float
     */
    public function getConversionRate()
    {
        return $this->container['conversionRate'];
    }

    /**
     * Sets conversionRate
     * @param float $conversionRate
     * @return $this
     */
    public function setConversionRate($conversionRate)
    {
        $this->container['conversionRate'] = $conversionRate;

        return $this;
    }

    /**
     * Gets conversions
     * @return float
     */
    public function getConversions()
    {
        return $this->container['conversions'];
    }

    /**
     * Sets conversions
     * @param float $conversions
     * @return $this
     */
    public function setConversions($conversions)
    {
        $this->container['conversions'] = $conversions;

        return $this;
    }

    /**
     * Gets epc
     * @return float
     */
    public function getEpc()
    {
        return $this->container['epc'];
    }

    /**
     * Sets epc
     * @param float $epc
     * @return $this
     */
    public function setEpc($epc)
    {
        $this->container['epc'] = $epc;

        return $this;
    }

    /**
     * Gets sales
     * @return float
     */
    public function getSales()
    {
        return $this->container['sales'];
    }

    /**
     * Sets sales
     * @param float $sales
     * @return $this
     */
    public function setSales($sales)
    {
        $this->container['sales'] = $sales;

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


