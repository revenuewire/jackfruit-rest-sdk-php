<?php
/**
 * Transaction
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
 * Transaction Class Doc Comment
 *
 * @category    Class
 * @description Transaction
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Transaction implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'type' => 'string',
        'date' => '\DateTime',
        'reference' => 'string',
        'fullReference' => 'string',
        'merchantName' => 'string',
        'currency' => 'string',
        'supportEmail' => 'string',
        'totalPrice' => 'float',
        'subTotalPrice' => 'float',
        'totalPriceTax' => 'float',
        'totalUSDPrice' => 'float',
        'totalUSDPriceTax' => 'float',
        'gateway' => 'string',
        'gatewayReference' => 'string',
        'extraParameters' => 'string',
        'transactionItems' => '\Swagger\Client\Model\TransactionItem[]',
        'order' => 'int',
        'parentTransactionId' => 'int',
        'shippingAddress' => '\Swagger\Client\Model\CustomerAddress',
        'billInfo' => '\Swagger\Client\Model\BillInfo'
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
        'type' => 'type',
        'date' => 'date',
        'reference' => 'reference',
        'fullReference' => 'fullReference',
        'merchantName' => 'merchantName',
        'currency' => 'currency',
        'supportEmail' => 'supportEmail',
        'totalPrice' => 'totalPrice',
        'subTotalPrice' => 'subTotalPrice',
        'totalPriceTax' => 'totalPriceTax',
        'totalUSDPrice' => 'totalUSDPrice',
        'totalUSDPriceTax' => 'totalUSDPriceTax',
        'gateway' => 'gateway',
        'gatewayReference' => 'gatewayReference',
        'extraParameters' => 'extraParameters',
        'transactionItems' => 'transactionItems',
        'order' => 'order',
        'parentTransactionId' => 'parentTransactionId',
        'shippingAddress' => 'shippingAddress',
        'billInfo' => 'billInfo'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'date' => 'setDate',
        'reference' => 'setReference',
        'fullReference' => 'setFullReference',
        'merchantName' => 'setMerchantName',
        'currency' => 'setCurrency',
        'supportEmail' => 'setSupportEmail',
        'totalPrice' => 'setTotalPrice',
        'subTotalPrice' => 'setSubTotalPrice',
        'totalPriceTax' => 'setTotalPriceTax',
        'totalUSDPrice' => 'setTotalUSDPrice',
        'totalUSDPriceTax' => 'setTotalUSDPriceTax',
        'gateway' => 'setGateway',
        'gatewayReference' => 'setGatewayReference',
        'extraParameters' => 'setExtraParameters',
        'transactionItems' => 'setTransactionItems',
        'order' => 'setOrder',
        'parentTransactionId' => 'setParentTransactionId',
        'shippingAddress' => 'setShippingAddress',
        'billInfo' => 'setBillInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'date' => 'getDate',
        'reference' => 'getReference',
        'fullReference' => 'getFullReference',
        'merchantName' => 'getMerchantName',
        'currency' => 'getCurrency',
        'supportEmail' => 'getSupportEmail',
        'totalPrice' => 'getTotalPrice',
        'subTotalPrice' => 'getSubTotalPrice',
        'totalPriceTax' => 'getTotalPriceTax',
        'totalUSDPrice' => 'getTotalUSDPrice',
        'totalUSDPriceTax' => 'getTotalUSDPriceTax',
        'gateway' => 'getGateway',
        'gatewayReference' => 'getGatewayReference',
        'extraParameters' => 'getExtraParameters',
        'transactionItems' => 'getTransactionItems',
        'order' => 'getOrder',
        'parentTransactionId' => 'getParentTransactionId',
        'shippingAddress' => 'getShippingAddress',
        'billInfo' => 'getBillInfo'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['fullReference'] = isset($data['fullReference']) ? $data['fullReference'] : null;
        $this->container['merchantName'] = isset($data['merchantName']) ? $data['merchantName'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['supportEmail'] = isset($data['supportEmail']) ? $data['supportEmail'] : null;
        $this->container['totalPrice'] = isset($data['totalPrice']) ? $data['totalPrice'] : null;
        $this->container['subTotalPrice'] = isset($data['subTotalPrice']) ? $data['subTotalPrice'] : null;
        $this->container['totalPriceTax'] = isset($data['totalPriceTax']) ? $data['totalPriceTax'] : null;
        $this->container['totalUSDPrice'] = isset($data['totalUSDPrice']) ? $data['totalUSDPrice'] : null;
        $this->container['totalUSDPriceTax'] = isset($data['totalUSDPriceTax']) ? $data['totalUSDPriceTax'] : null;
        $this->container['gateway'] = isset($data['gateway']) ? $data['gateway'] : null;
        $this->container['gatewayReference'] = isset($data['gatewayReference']) ? $data['gatewayReference'] : null;
        $this->container['extraParameters'] = isset($data['extraParameters']) ? $data['extraParameters'] : null;
        $this->container['transactionItems'] = isset($data['transactionItems']) ? $data['transactionItems'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['parentTransactionId'] = isset($data['parentTransactionId']) ? $data['parentTransactionId'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['billInfo'] = isset($data['billInfo']) ? $data['billInfo'] : null;
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
     * @param int $id Transaction Id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Transaction Type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets date
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param \DateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets reference
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     * @param string $reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets fullReference
     * @return string
     */
    public function getFullReference()
    {
        return $this->container['fullReference'];
    }

    /**
     * Sets fullReference
     * @param string $fullReference
     * @return $this
     */
    public function setFullReference($fullReference)
    {
        $this->container['fullReference'] = $fullReference;

        return $this;
    }

    /**
     * Gets merchantName
     * @return string
     */
    public function getMerchantName()
    {
        return $this->container['merchantName'];
    }

    /**
     * Sets merchantName
     * @param string $merchantName
     * @return $this
     */
    public function setMerchantName($merchantName)
    {
        $this->container['merchantName'] = $merchantName;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets supportEmail
     * @return string
     */
    public function getSupportEmail()
    {
        return $this->container['supportEmail'];
    }

    /**
     * Sets supportEmail
     * @param string $supportEmail
     * @return $this
     */
    public function setSupportEmail($supportEmail)
    {
        $this->container['supportEmail'] = $supportEmail;

        return $this;
    }

    /**
     * Gets totalPrice
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->container['totalPrice'];
    }

    /**
     * Sets totalPrice
     * @param float $totalPrice
     * @return $this
     */
    public function setTotalPrice($totalPrice)
    {
        $this->container['totalPrice'] = $totalPrice;

        return $this;
    }

    /**
     * Gets subTotalPrice
     * @return float
     */
    public function getSubTotalPrice()
    {
        return $this->container['subTotalPrice'];
    }

    /**
     * Sets subTotalPrice
     * @param float $subTotalPrice
     * @return $this
     */
    public function setSubTotalPrice($subTotalPrice)
    {
        $this->container['subTotalPrice'] = $subTotalPrice;

        return $this;
    }

    /**
     * Gets totalPriceTax
     * @return float
     */
    public function getTotalPriceTax()
    {
        return $this->container['totalPriceTax'];
    }

    /**
     * Sets totalPriceTax
     * @param float $totalPriceTax
     * @return $this
     */
    public function setTotalPriceTax($totalPriceTax)
    {
        $this->container['totalPriceTax'] = $totalPriceTax;

        return $this;
    }

    /**
     * Gets totalUSDPrice
     * @return float
     */
    public function getTotalUSDPrice()
    {
        return $this->container['totalUSDPrice'];
    }

    /**
     * Sets totalUSDPrice
     * @param float $totalUSDPrice
     * @return $this
     */
    public function setTotalUSDPrice($totalUSDPrice)
    {
        $this->container['totalUSDPrice'] = $totalUSDPrice;

        return $this;
    }

    /**
     * Gets totalUSDPriceTax
     * @return float
     */
    public function getTotalUSDPriceTax()
    {
        return $this->container['totalUSDPriceTax'];
    }

    /**
     * Sets totalUSDPriceTax
     * @param float $totalUSDPriceTax
     * @return $this
     */
    public function setTotalUSDPriceTax($totalUSDPriceTax)
    {
        $this->container['totalUSDPriceTax'] = $totalUSDPriceTax;

        return $this;
    }

    /**
     * Gets gateway
     * @return string
     */
    public function getGateway()
    {
        return $this->container['gateway'];
    }

    /**
     * Sets gateway
     * @param string $gateway
     * @return $this
     */
    public function setGateway($gateway)
    {
        $this->container['gateway'] = $gateway;

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
     * Gets extraParameters
     * @return string
     */
    public function getExtraParameters()
    {
        return $this->container['extraParameters'];
    }

    /**
     * Sets extraParameters
     * @param string $extraParameters
     * @return $this
     */
    public function setExtraParameters($extraParameters)
    {
        $this->container['extraParameters'] = $extraParameters;

        return $this;
    }

    /**
     * Gets transactionItems
     * @return \Swagger\Client\Model\TransactionItem[]
     */
    public function getTransactionItems()
    {
        return $this->container['transactionItems'];
    }

    /**
     * Sets transactionItems
     * @param \Swagger\Client\Model\TransactionItem[] $transactionItems
     * @return $this
     */
    public function setTransactionItems($transactionItems)
    {
        $this->container['transactionItems'] = $transactionItems;

        return $this;
    }

    /**
     * Gets order
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     * @param int $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets parentTransactionId
     * @return int
     */
    public function getParentTransactionId()
    {
        return $this->container['parentTransactionId'];
    }

    /**
     * Sets parentTransactionId
     * @param int $parentTransactionId
     * @return $this
     */
    public function setParentTransactionId($parentTransactionId)
    {
        $this->container['parentTransactionId'] = $parentTransactionId;

        return $this;
    }

    /**
     * Gets shippingAddress
     * @return \Swagger\Client\Model\CustomerAddress
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     * @param \Swagger\Client\Model\CustomerAddress $shippingAddress
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets billInfo
     * @return \Swagger\Client\Model\BillInfo
     */
    public function getBillInfo()
    {
        return $this->container['billInfo'];
    }

    /**
     * Sets billInfo
     * @param \Swagger\Client\Model\BillInfo $billInfo
     * @return $this
     */
    public function setBillInfo($billInfo)
    {
        $this->container['billInfo'] = $billInfo;

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


