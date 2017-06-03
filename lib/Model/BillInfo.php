<?php
/**
 * BillInfo
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
 * BillInfo Class Doc Comment
 *
 * @category    Class
 * @description Billing Information
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BillInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'gatewayProcessor' => 'string',
        'currencyCode' => 'string',
        'cardNumber' => 'string',
        'cardType' => 'string',
        'expiry' => 'string',
        'payerId' => 'string',
        'gatewayReference' => 'string',
        'billingAddressName' => 'string',
        'billingAddressPostalCode' => 'string',
        'billingAddressRegionCode' => 'string',
        'billingAddressCountryCode' => 'string'
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
        'gatewayProcessor' => 'gatewayProcessor',
        'currencyCode' => 'currencyCode',
        'cardNumber' => 'cardNumber',
        'cardType' => 'cardType',
        'expiry' => 'expiry',
        'payerId' => 'payerId',
        'gatewayReference' => 'gatewayReference',
        'billingAddressName' => 'billingAddressName',
        'billingAddressPostalCode' => 'billingAddressPostalCode',
        'billingAddressRegionCode' => 'billingAddressRegionCode',
        'billingAddressCountryCode' => 'billingAddressCountryCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'gatewayProcessor' => 'setGatewayProcessor',
        'currencyCode' => 'setCurrencyCode',
        'cardNumber' => 'setCardNumber',
        'cardType' => 'setCardType',
        'expiry' => 'setExpiry',
        'payerId' => 'setPayerId',
        'gatewayReference' => 'setGatewayReference',
        'billingAddressName' => 'setBillingAddressName',
        'billingAddressPostalCode' => 'setBillingAddressPostalCode',
        'billingAddressRegionCode' => 'setBillingAddressRegionCode',
        'billingAddressCountryCode' => 'setBillingAddressCountryCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'gatewayProcessor' => 'getGatewayProcessor',
        'currencyCode' => 'getCurrencyCode',
        'cardNumber' => 'getCardNumber',
        'cardType' => 'getCardType',
        'expiry' => 'getExpiry',
        'payerId' => 'getPayerId',
        'gatewayReference' => 'getGatewayReference',
        'billingAddressName' => 'getBillingAddressName',
        'billingAddressPostalCode' => 'getBillingAddressPostalCode',
        'billingAddressRegionCode' => 'getBillingAddressRegionCode',
        'billingAddressCountryCode' => 'getBillingAddressCountryCode'
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
        $this->container['gatewayProcessor'] = isset($data['gatewayProcessor']) ? $data['gatewayProcessor'] : null;
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
        $this->container['cardNumber'] = isset($data['cardNumber']) ? $data['cardNumber'] : null;
        $this->container['cardType'] = isset($data['cardType']) ? $data['cardType'] : null;
        $this->container['expiry'] = isset($data['expiry']) ? $data['expiry'] : null;
        $this->container['payerId'] = isset($data['payerId']) ? $data['payerId'] : null;
        $this->container['gatewayReference'] = isset($data['gatewayReference']) ? $data['gatewayReference'] : null;
        $this->container['billingAddressName'] = isset($data['billingAddressName']) ? $data['billingAddressName'] : null;
        $this->container['billingAddressPostalCode'] = isset($data['billingAddressPostalCode']) ? $data['billingAddressPostalCode'] : null;
        $this->container['billingAddressRegionCode'] = isset($data['billingAddressRegionCode']) ? $data['billingAddressRegionCode'] : null;
        $this->container['billingAddressCountryCode'] = isset($data['billingAddressCountryCode']) ? $data['billingAddressCountryCode'] : null;
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
     * @param int $id Billing Information
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets gatewayProcessor
     * @return string
     */
    public function getGatewayProcessor()
    {
        return $this->container['gatewayProcessor'];
    }

    /**
     * Sets gatewayProcessor
     * @param string $gatewayProcessor
     * @return $this
     */
    public function setGatewayProcessor($gatewayProcessor)
    {
        $this->container['gatewayProcessor'] = $gatewayProcessor;

        return $this;
    }

    /**
     * Gets currencyCode
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     * @param string $currencyCode
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets cardNumber
     * @return string
     */
    public function getCardNumber()
    {
        return $this->container['cardNumber'];
    }

    /**
     * Sets cardNumber
     * @param string $cardNumber
     * @return $this
     */
    public function setCardNumber($cardNumber)
    {
        $this->container['cardNumber'] = $cardNumber;

        return $this;
    }

    /**
     * Gets cardType
     * @return string
     */
    public function getCardType()
    {
        return $this->container['cardType'];
    }

    /**
     * Sets cardType
     * @param string $cardType
     * @return $this
     */
    public function setCardType($cardType)
    {
        $this->container['cardType'] = $cardType;

        return $this;
    }

    /**
     * Gets expiry
     * @return string
     */
    public function getExpiry()
    {
        return $this->container['expiry'];
    }

    /**
     * Sets expiry
     * @param string $expiry
     * @return $this
     */
    public function setExpiry($expiry)
    {
        $this->container['expiry'] = $expiry;

        return $this;
    }

    /**
     * Gets payerId
     * @return string
     */
    public function getPayerId()
    {
        return $this->container['payerId'];
    }

    /**
     * Sets payerId
     * @param string $payerId
     * @return $this
     */
    public function setPayerId($payerId)
    {
        $this->container['payerId'] = $payerId;

        return $this;
    }

    /**
     * Gets gatewayReference
     * @return string
     */
    public function getGatewayReference()
    {
        return $this->container['gatewayReference'];
    }

    /**
     * Sets gatewayReference
     * @param string $gatewayReference
     * @return $this
     */
    public function setGatewayReference($gatewayReference)
    {
        $this->container['gatewayReference'] = $gatewayReference;

        return $this;
    }

    /**
     * Gets billingAddressName
     * @return string
     */
    public function getBillingAddressName()
    {
        return $this->container['billingAddressName'];
    }

    /**
     * Sets billingAddressName
     * @param string $billingAddressName
     * @return $this
     */
    public function setBillingAddressName($billingAddressName)
    {
        $this->container['billingAddressName'] = $billingAddressName;

        return $this;
    }

    /**
     * Gets billingAddressPostalCode
     * @return string
     */
    public function getBillingAddressPostalCode()
    {
        return $this->container['billingAddressPostalCode'];
    }

    /**
     * Sets billingAddressPostalCode
     * @param string $billingAddressPostalCode
     * @return $this
     */
    public function setBillingAddressPostalCode($billingAddressPostalCode)
    {
        $this->container['billingAddressPostalCode'] = $billingAddressPostalCode;

        return $this;
    }

    /**
     * Gets billingAddressRegionCode
     * @return string
     */
    public function getBillingAddressRegionCode()
    {
        return $this->container['billingAddressRegionCode'];
    }

    /**
     * Sets billingAddressRegionCode
     * @param string $billingAddressRegionCode
     * @return $this
     */
    public function setBillingAddressRegionCode($billingAddressRegionCode)
    {
        $this->container['billingAddressRegionCode'] = $billingAddressRegionCode;

        return $this;
    }

    /**
     * Gets billingAddressCountryCode
     * @return string
     */
    public function getBillingAddressCountryCode()
    {
        return $this->container['billingAddressCountryCode'];
    }

    /**
     * Sets billingAddressCountryCode
     * @param string $billingAddressCountryCode
     * @return $this
     */
    public function setBillingAddressCountryCode($billingAddressCountryCode)
    {
        $this->container['billingAddressCountryCode'] = $billingAddressCountryCode;

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


