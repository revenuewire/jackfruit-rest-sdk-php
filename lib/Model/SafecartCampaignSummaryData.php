<?php
/**
 * SafecartCampaignSummaryData
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
 * SafecartCampaignSummaryData Class Doc Comment
 *
 * @category    Class
 * @description Performance data object
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SafecartCampaignSummaryData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SafecartCampaignSummaryData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category' => 'string',
        'clicks' => 'float',
        'conversions' => 'float',
        'epc' => 'float',
        'offer' => 'string',
        'payout' => 'float',
        'sales' => 'float',
        'status' => 'string'
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
        'category' => 'category',
        'clicks' => 'clicks',
        'conversions' => 'conversions',
        'epc' => 'epc',
        'offer' => 'offer',
        'payout' => 'payout',
        'sales' => 'sales',
        'status' => 'status'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'clicks' => 'setClicks',
        'conversions' => 'setConversions',
        'epc' => 'setEpc',
        'offer' => 'setOffer',
        'payout' => 'setPayout',
        'sales' => 'setSales',
        'status' => 'setStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'clicks' => 'getClicks',
        'conversions' => 'getConversions',
        'epc' => 'getEpc',
        'offer' => 'getOffer',
        'payout' => 'getPayout',
        'sales' => 'getSales',
        'status' => 'getStatus'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['clicks'] = isset($data['clicks']) ? $data['clicks'] : null;
        $this->container['conversions'] = isset($data['conversions']) ? $data['conversions'] : null;
        $this->container['epc'] = isset($data['epc']) ? $data['epc'] : null;
        $this->container['offer'] = isset($data['offer']) ? $data['offer'] : null;
        $this->container['payout'] = isset($data['payout']) ? $data['payout'] : null;
        $this->container['sales'] = isset($data['sales']) ? $data['sales'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['category'] === null) {
            $invalid_properties[] = "'category' can't be null";
        }
        if ($this->container['clicks'] === null) {
            $invalid_properties[] = "'clicks' can't be null";
        }
        if ($this->container['conversions'] === null) {
            $invalid_properties[] = "'conversions' can't be null";
        }
        if ($this->container['epc'] === null) {
            $invalid_properties[] = "'epc' can't be null";
        }
        if ($this->container['offer'] === null) {
            $invalid_properties[] = "'offer' can't be null";
        }
        if ($this->container['payout'] === null) {
            $invalid_properties[] = "'payout' can't be null";
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

        if ($this->container['category'] === null) {
            return false;
        }
        if ($this->container['clicks'] === null) {
            return false;
        }
        if ($this->container['conversions'] === null) {
            return false;
        }
        if ($this->container['epc'] === null) {
            return false;
        }
        if ($this->container['offer'] === null) {
            return false;
        }
        if ($this->container['payout'] === null) {
            return false;
        }
        if ($this->container['sales'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets category
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param string $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
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
     * Gets payout
     * @return float
     */
    public function getPayout()
    {
        return $this->container['payout'];
    }

    /**
     * Sets payout
     * @param float $payout
     * @return $this
     */
    public function setPayout($payout)
    {
        $this->container['payout'] = $payout;

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
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


