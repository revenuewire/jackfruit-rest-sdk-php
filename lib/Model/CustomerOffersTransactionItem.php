<?php
/**
 * CustomerOffersTransactionItem
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
 * CustomerOffersTransactionItem Class Doc Comment
 *
 * @category    Class
 * @description Transaction Item
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomerOffersTransactionItem implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CustomerOffers_transactionItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'sku' => 'string',
        'quantity' => 'int',
        'price' => 'float',
        'priceTax' => 'float',
        'usdPrice' => 'float',
        'usdPriceTax' => 'float',
        'image' => 'string'
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
        'id' => 'id',
        'sku' => 'sku',
        'quantity' => 'quantity',
        'price' => 'price',
        'priceTax' => 'priceTax',
        'usdPrice' => 'usdPrice',
        'usdPriceTax' => 'usdPriceTax',
        'image' => 'image'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sku' => 'setSku',
        'quantity' => 'setQuantity',
        'price' => 'setPrice',
        'priceTax' => 'setPriceTax',
        'usdPrice' => 'setUsdPrice',
        'usdPriceTax' => 'setUsdPriceTax',
        'image' => 'setImage'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sku' => 'getSku',
        'quantity' => 'getQuantity',
        'price' => 'getPrice',
        'priceTax' => 'getPriceTax',
        'usdPrice' => 'getUsdPrice',
        'usdPriceTax' => 'getUsdPriceTax',
        'image' => 'getImage'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['priceTax'] = isset($data['priceTax']) ? $data['priceTax'] : null;
        $this->container['usdPrice'] = isset($data['usdPrice']) ? $data['usdPrice'] : null;
        $this->container['usdPriceTax'] = isset($data['usdPriceTax']) ? $data['usdPriceTax'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Transaction Item Id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets price
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param float $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets priceTax
     * @return float
     */
    public function getPriceTax()
    {
        return $this->container['priceTax'];
    }

    /**
     * Sets priceTax
     * @param float $priceTax
     * @return $this
     */
    public function setPriceTax($priceTax)
    {
        $this->container['priceTax'] = $priceTax;

        return $this;
    }

    /**
     * Gets usdPrice
     * @return float
     */
    public function getUsdPrice()
    {
        return $this->container['usdPrice'];
    }

    /**
     * Sets usdPrice
     * @param float $usdPrice
     * @return $this
     */
    public function setUsdPrice($usdPrice)
    {
        $this->container['usdPrice'] = $usdPrice;

        return $this;
    }

    /**
     * Gets usdPriceTax
     * @return float
     */
    public function getUsdPriceTax()
    {
        return $this->container['usdPriceTax'];
    }

    /**
     * Sets usdPriceTax
     * @param float $usdPriceTax
     * @return $this
     */
    public function setUsdPriceTax($usdPriceTax)
    {
        $this->container['usdPriceTax'] = $usdPriceTax;

        return $this;
    }

    /**
     * Gets image
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

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


