<?php
/**
 * RevshareData
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
 * RevshareData Class Doc Comment
 *
 * @category    Class
 * @description Revshare data object
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RevshareData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RevshareData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activeSubscriptions' => 'float',
        'alias' => 'string',
        'cancelledSubscriptions' => 'float',
        'clicks' => 'float',
        'initialOrders' => 'float',
        'initialSales' => 'float',
        'lifetimeAvgSubscriptionAge' => 'float',
        'lifetimeAvgSubscriptionValue' => 'float',
        'netOrders' => 'float',
        'netSales' => 'float',
        'offer' => 'string',
        'orders' => 'float',
        'period' => 'string',
        'recurringOrders' => 'float',
        'recurringSales' => 'float',
        'refundsAndChargebacks' => 'float',
        'refundsAndChargebacksRate' => 'float',
        'sales' => 'float',
        'salesRate' => 'float'
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
        'activeSubscriptions' => 'activeSubscriptions',
        'alias' => 'alias',
        'cancelledSubscriptions' => 'cancelledSubscriptions',
        'clicks' => 'clicks',
        'initialOrders' => 'initialOrders',
        'initialSales' => 'initialSales',
        'lifetimeAvgSubscriptionAge' => 'lifetimeAvgSubscriptionAge',
        'lifetimeAvgSubscriptionValue' => 'lifetimeAvgSubscriptionValue',
        'netOrders' => 'netOrders',
        'netSales' => 'netSales',
        'offer' => 'offer',
        'orders' => 'orders',
        'period' => 'period',
        'recurringOrders' => 'recurringOrders',
        'recurringSales' => 'recurringSales',
        'refundsAndChargebacks' => 'refundsAndChargebacks',
        'refundsAndChargebacksRate' => 'refundsAndChargebacksRate',
        'sales' => 'Sales',
        'salesRate' => 'SalesRate'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'activeSubscriptions' => 'setActiveSubscriptions',
        'alias' => 'setAlias',
        'cancelledSubscriptions' => 'setCancelledSubscriptions',
        'clicks' => 'setClicks',
        'initialOrders' => 'setInitialOrders',
        'initialSales' => 'setInitialSales',
        'lifetimeAvgSubscriptionAge' => 'setLifetimeAvgSubscriptionAge',
        'lifetimeAvgSubscriptionValue' => 'setLifetimeAvgSubscriptionValue',
        'netOrders' => 'setNetOrders',
        'netSales' => 'setNetSales',
        'offer' => 'setOffer',
        'orders' => 'setOrders',
        'period' => 'setPeriod',
        'recurringOrders' => 'setRecurringOrders',
        'recurringSales' => 'setRecurringSales',
        'refundsAndChargebacks' => 'setRefundsAndChargebacks',
        'refundsAndChargebacksRate' => 'setRefundsAndChargebacksRate',
        'sales' => 'setSales',
        'salesRate' => 'setSalesRate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'activeSubscriptions' => 'getActiveSubscriptions',
        'alias' => 'getAlias',
        'cancelledSubscriptions' => 'getCancelledSubscriptions',
        'clicks' => 'getClicks',
        'initialOrders' => 'getInitialOrders',
        'initialSales' => 'getInitialSales',
        'lifetimeAvgSubscriptionAge' => 'getLifetimeAvgSubscriptionAge',
        'lifetimeAvgSubscriptionValue' => 'getLifetimeAvgSubscriptionValue',
        'netOrders' => 'getNetOrders',
        'netSales' => 'getNetSales',
        'offer' => 'getOffer',
        'orders' => 'getOrders',
        'period' => 'getPeriod',
        'recurringOrders' => 'getRecurringOrders',
        'recurringSales' => 'getRecurringSales',
        'refundsAndChargebacks' => 'getRefundsAndChargebacks',
        'refundsAndChargebacksRate' => 'getRefundsAndChargebacksRate',
        'sales' => 'getSales',
        'salesRate' => 'getSalesRate'
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
        $this->container['activeSubscriptions'] = isset($data['activeSubscriptions']) ? $data['activeSubscriptions'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['cancelledSubscriptions'] = isset($data['cancelledSubscriptions']) ? $data['cancelledSubscriptions'] : null;
        $this->container['clicks'] = isset($data['clicks']) ? $data['clicks'] : null;
        $this->container['initialOrders'] = isset($data['initialOrders']) ? $data['initialOrders'] : null;
        $this->container['initialSales'] = isset($data['initialSales']) ? $data['initialSales'] : null;
        $this->container['lifetimeAvgSubscriptionAge'] = isset($data['lifetimeAvgSubscriptionAge']) ? $data['lifetimeAvgSubscriptionAge'] : null;
        $this->container['lifetimeAvgSubscriptionValue'] = isset($data['lifetimeAvgSubscriptionValue']) ? $data['lifetimeAvgSubscriptionValue'] : null;
        $this->container['netOrders'] = isset($data['netOrders']) ? $data['netOrders'] : null;
        $this->container['netSales'] = isset($data['netSales']) ? $data['netSales'] : null;
        $this->container['offer'] = isset($data['offer']) ? $data['offer'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['recurringOrders'] = isset($data['recurringOrders']) ? $data['recurringOrders'] : null;
        $this->container['recurringSales'] = isset($data['recurringSales']) ? $data['recurringSales'] : null;
        $this->container['refundsAndChargebacks'] = isset($data['refundsAndChargebacks']) ? $data['refundsAndChargebacks'] : null;
        $this->container['refundsAndChargebacksRate'] = isset($data['refundsAndChargebacksRate']) ? $data['refundsAndChargebacksRate'] : null;
        $this->container['sales'] = isset($data['sales']) ? $data['sales'] : null;
        $this->container['salesRate'] = isset($data['salesRate']) ? $data['salesRate'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['activeSubscriptions'] === null) {
            $invalid_properties[] = "'activeSubscriptions' can't be null";
        }
        if ($this->container['alias'] === null) {
            $invalid_properties[] = "'alias' can't be null";
        }
        if ($this->container['cancelledSubscriptions'] === null) {
            $invalid_properties[] = "'cancelledSubscriptions' can't be null";
        }
        if ($this->container['clicks'] === null) {
            $invalid_properties[] = "'clicks' can't be null";
        }
        if ($this->container['initialOrders'] === null) {
            $invalid_properties[] = "'initialOrders' can't be null";
        }
        if ($this->container['initialSales'] === null) {
            $invalid_properties[] = "'initialSales' can't be null";
        }
        if ($this->container['lifetimeAvgSubscriptionAge'] === null) {
            $invalid_properties[] = "'lifetimeAvgSubscriptionAge' can't be null";
        }
        if ($this->container['lifetimeAvgSubscriptionValue'] === null) {
            $invalid_properties[] = "'lifetimeAvgSubscriptionValue' can't be null";
        }
        if ($this->container['netOrders'] === null) {
            $invalid_properties[] = "'netOrders' can't be null";
        }
        if ($this->container['netSales'] === null) {
            $invalid_properties[] = "'netSales' can't be null";
        }
        if ($this->container['offer'] === null) {
            $invalid_properties[] = "'offer' can't be null";
        }
        if ($this->container['orders'] === null) {
            $invalid_properties[] = "'orders' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalid_properties[] = "'period' can't be null";
        }
        if ($this->container['recurringOrders'] === null) {
            $invalid_properties[] = "'recurringOrders' can't be null";
        }
        if ($this->container['recurringSales'] === null) {
            $invalid_properties[] = "'recurringSales' can't be null";
        }
        if ($this->container['refundsAndChargebacks'] === null) {
            $invalid_properties[] = "'refundsAndChargebacks' can't be null";
        }
        if ($this->container['refundsAndChargebacksRate'] === null) {
            $invalid_properties[] = "'refundsAndChargebacksRate' can't be null";
        }
        if ($this->container['sales'] === null) {
            $invalid_properties[] = "'sales' can't be null";
        }
        if ($this->container['salesRate'] === null) {
            $invalid_properties[] = "'salesRate' can't be null";
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

        if ($this->container['activeSubscriptions'] === null) {
            return false;
        }
        if ($this->container['alias'] === null) {
            return false;
        }
        if ($this->container['cancelledSubscriptions'] === null) {
            return false;
        }
        if ($this->container['clicks'] === null) {
            return false;
        }
        if ($this->container['initialOrders'] === null) {
            return false;
        }
        if ($this->container['initialSales'] === null) {
            return false;
        }
        if ($this->container['lifetimeAvgSubscriptionAge'] === null) {
            return false;
        }
        if ($this->container['lifetimeAvgSubscriptionValue'] === null) {
            return false;
        }
        if ($this->container['netOrders'] === null) {
            return false;
        }
        if ($this->container['netSales'] === null) {
            return false;
        }
        if ($this->container['offer'] === null) {
            return false;
        }
        if ($this->container['orders'] === null) {
            return false;
        }
        if ($this->container['period'] === null) {
            return false;
        }
        if ($this->container['recurringOrders'] === null) {
            return false;
        }
        if ($this->container['recurringSales'] === null) {
            return false;
        }
        if ($this->container['refundsAndChargebacks'] === null) {
            return false;
        }
        if ($this->container['refundsAndChargebacksRate'] === null) {
            return false;
        }
        if ($this->container['sales'] === null) {
            return false;
        }
        if ($this->container['salesRate'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets activeSubscriptions
     * @return float
     */
    public function getActiveSubscriptions()
    {
        return $this->container['activeSubscriptions'];
    }

    /**
     * Sets activeSubscriptions
     * @param float $activeSubscriptions
     * @return $this
     */
    public function setActiveSubscriptions($activeSubscriptions)
    {
        $this->container['activeSubscriptions'] = $activeSubscriptions;

        return $this;
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
     * Gets cancelledSubscriptions
     * @return float
     */
    public function getCancelledSubscriptions()
    {
        return $this->container['cancelledSubscriptions'];
    }

    /**
     * Sets cancelledSubscriptions
     * @param float $cancelledSubscriptions
     * @return $this
     */
    public function setCancelledSubscriptions($cancelledSubscriptions)
    {
        $this->container['cancelledSubscriptions'] = $cancelledSubscriptions;

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
     * Gets initialOrders
     * @return float
     */
    public function getInitialOrders()
    {
        return $this->container['initialOrders'];
    }

    /**
     * Sets initialOrders
     * @param float $initialOrders
     * @return $this
     */
    public function setInitialOrders($initialOrders)
    {
        $this->container['initialOrders'] = $initialOrders;

        return $this;
    }

    /**
     * Gets initialSales
     * @return float
     */
    public function getInitialSales()
    {
        return $this->container['initialSales'];
    }

    /**
     * Sets initialSales
     * @param float $initialSales
     * @return $this
     */
    public function setInitialSales($initialSales)
    {
        $this->container['initialSales'] = $initialSales;

        return $this;
    }

    /**
     * Gets lifetimeAvgSubscriptionAge
     * @return float
     */
    public function getLifetimeAvgSubscriptionAge()
    {
        return $this->container['lifetimeAvgSubscriptionAge'];
    }

    /**
     * Sets lifetimeAvgSubscriptionAge
     * @param float $lifetimeAvgSubscriptionAge
     * @return $this
     */
    public function setLifetimeAvgSubscriptionAge($lifetimeAvgSubscriptionAge)
    {
        $this->container['lifetimeAvgSubscriptionAge'] = $lifetimeAvgSubscriptionAge;

        return $this;
    }

    /**
     * Gets lifetimeAvgSubscriptionValue
     * @return float
     */
    public function getLifetimeAvgSubscriptionValue()
    {
        return $this->container['lifetimeAvgSubscriptionValue'];
    }

    /**
     * Sets lifetimeAvgSubscriptionValue
     * @param float $lifetimeAvgSubscriptionValue
     * @return $this
     */
    public function setLifetimeAvgSubscriptionValue($lifetimeAvgSubscriptionValue)
    {
        $this->container['lifetimeAvgSubscriptionValue'] = $lifetimeAvgSubscriptionValue;

        return $this;
    }

    /**
     * Gets netOrders
     * @return float
     */
    public function getNetOrders()
    {
        return $this->container['netOrders'];
    }

    /**
     * Sets netOrders
     * @param float $netOrders
     * @return $this
     */
    public function setNetOrders($netOrders)
    {
        $this->container['netOrders'] = $netOrders;

        return $this;
    }

    /**
     * Gets netSales
     * @return float
     */
    public function getNetSales()
    {
        return $this->container['netSales'];
    }

    /**
     * Sets netSales
     * @param float $netSales
     * @return $this
     */
    public function setNetSales($netSales)
    {
        $this->container['netSales'] = $netSales;

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
     * Gets orders
     * @return float
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     * @param float $orders
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets period
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     * @param string $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets recurringOrders
     * @return float
     */
    public function getRecurringOrders()
    {
        return $this->container['recurringOrders'];
    }

    /**
     * Sets recurringOrders
     * @param float $recurringOrders
     * @return $this
     */
    public function setRecurringOrders($recurringOrders)
    {
        $this->container['recurringOrders'] = $recurringOrders;

        return $this;
    }

    /**
     * Gets recurringSales
     * @return float
     */
    public function getRecurringSales()
    {
        return $this->container['recurringSales'];
    }

    /**
     * Sets recurringSales
     * @param float $recurringSales
     * @return $this
     */
    public function setRecurringSales($recurringSales)
    {
        $this->container['recurringSales'] = $recurringSales;

        return $this;
    }

    /**
     * Gets refundsAndChargebacks
     * @return float
     */
    public function getRefundsAndChargebacks()
    {
        return $this->container['refundsAndChargebacks'];
    }

    /**
     * Sets refundsAndChargebacks
     * @param float $refundsAndChargebacks
     * @return $this
     */
    public function setRefundsAndChargebacks($refundsAndChargebacks)
    {
        $this->container['refundsAndChargebacks'] = $refundsAndChargebacks;

        return $this;
    }

    /**
     * Gets refundsAndChargebacksRate
     * @return float
     */
    public function getRefundsAndChargebacksRate()
    {
        return $this->container['refundsAndChargebacksRate'];
    }

    /**
     * Sets refundsAndChargebacksRate
     * @param float $refundsAndChargebacksRate
     * @return $this
     */
    public function setRefundsAndChargebacksRate($refundsAndChargebacksRate)
    {
        $this->container['refundsAndChargebacksRate'] = $refundsAndChargebacksRate;

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
     * Gets salesRate
     * @return float
     */
    public function getSalesRate()
    {
        return $this->container['salesRate'];
    }

    /**
     * Sets salesRate
     * @param float $salesRate
     * @return $this
     */
    public function setSalesRate($salesRate)
    {
        $this->container['salesRate'] = $salesRate;

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


