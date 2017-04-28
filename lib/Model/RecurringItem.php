<?php
/**
 * RecurringItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * JackFruit REST API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
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
 * RecurringItem Class Doc Comment
 *
 * @category    Class
 * @description Recurring Item
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RecurringItem implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RecurringItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'offer_id' => 'int',
        'initial_sale_date' => '\DateTime',
        'next_billing_date' => '\DateTime',
        'interval' => 'int',
        'rebill_frequency_type' => 'string',
        'rebill_frequency_value' => 'int',
        'deactivated_date' => '\DateTime',
        'deactivated_type' => 'string',
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
        'id' => 'id',
        'offer_id' => 'offerId',
        'initial_sale_date' => 'initialSaleDate',
        'next_billing_date' => 'nextBillingDate',
        'interval' => 'interval',
        'rebill_frequency_type' => 'rebillFrequencyType',
        'rebill_frequency_value' => 'rebillFrequencyValue',
        'deactivated_date' => 'deactivatedDate',
        'deactivated_type' => 'deactivatedType',
        'status' => 'status'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'offer_id' => 'setOfferId',
        'initial_sale_date' => 'setInitialSaleDate',
        'next_billing_date' => 'setNextBillingDate',
        'interval' => 'setInterval',
        'rebill_frequency_type' => 'setRebillFrequencyType',
        'rebill_frequency_value' => 'setRebillFrequencyValue',
        'deactivated_date' => 'setDeactivatedDate',
        'deactivated_type' => 'setDeactivatedType',
        'status' => 'setStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'offer_id' => 'getOfferId',
        'initial_sale_date' => 'getInitialSaleDate',
        'next_billing_date' => 'getNextBillingDate',
        'interval' => 'getInterval',
        'rebill_frequency_type' => 'getRebillFrequencyType',
        'rebill_frequency_value' => 'getRebillFrequencyValue',
        'deactivated_date' => 'getDeactivatedDate',
        'deactivated_type' => 'getDeactivatedType',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['offer_id'] = isset($data['offer_id']) ? $data['offer_id'] : null;
        $this->container['initial_sale_date'] = isset($data['initial_sale_date']) ? $data['initial_sale_date'] : null;
        $this->container['next_billing_date'] = isset($data['next_billing_date']) ? $data['next_billing_date'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['rebill_frequency_type'] = isset($data['rebill_frequency_type']) ? $data['rebill_frequency_type'] : null;
        $this->container['rebill_frequency_value'] = isset($data['rebill_frequency_value']) ? $data['rebill_frequency_value'] : null;
        $this->container['deactivated_date'] = isset($data['deactivated_date']) ? $data['deactivated_date'] : null;
        $this->container['deactivated_type'] = isset($data['deactivated_type']) ? $data['deactivated_type'] : null;
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
     * @param int $id Recurring Transaction Item Id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets offer_id
     * @return int
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     * @param int $offer_id
     * @return $this
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets initial_sale_date
     * @return \DateTime
     */
    public function getInitialSaleDate()
    {
        return $this->container['initial_sale_date'];
    }

    /**
     * Sets initial_sale_date
     * @param \DateTime $initial_sale_date
     * @return $this
     */
    public function setInitialSaleDate($initial_sale_date)
    {
        $this->container['initial_sale_date'] = $initial_sale_date;

        return $this;
    }

    /**
     * Gets next_billing_date
     * @return \DateTime
     */
    public function getNextBillingDate()
    {
        return $this->container['next_billing_date'];
    }

    /**
     * Sets next_billing_date
     * @param \DateTime $next_billing_date
     * @return $this
     */
    public function setNextBillingDate($next_billing_date)
    {
        $this->container['next_billing_date'] = $next_billing_date;

        return $this;
    }

    /**
     * Gets interval
     * @return int
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     * @param int $interval
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets rebill_frequency_type
     * @return string
     */
    public function getRebillFrequencyType()
    {
        return $this->container['rebill_frequency_type'];
    }

    /**
     * Sets rebill_frequency_type
     * @param string $rebill_frequency_type
     * @return $this
     */
    public function setRebillFrequencyType($rebill_frequency_type)
    {
        $this->container['rebill_frequency_type'] = $rebill_frequency_type;

        return $this;
    }

    /**
     * Gets rebill_frequency_value
     * @return int
     */
    public function getRebillFrequencyValue()
    {
        return $this->container['rebill_frequency_value'];
    }

    /**
     * Sets rebill_frequency_value
     * @param int $rebill_frequency_value
     * @return $this
     */
    public function setRebillFrequencyValue($rebill_frequency_value)
    {
        $this->container['rebill_frequency_value'] = $rebill_frequency_value;

        return $this;
    }

    /**
     * Gets deactivated_date
     * @return \DateTime
     */
    public function getDeactivatedDate()
    {
        return $this->container['deactivated_date'];
    }

    /**
     * Sets deactivated_date
     * @param \DateTime $deactivated_date
     * @return $this
     */
    public function setDeactivatedDate($deactivated_date)
    {
        $this->container['deactivated_date'] = $deactivated_date;

        return $this;
    }

    /**
     * Gets deactivated_type
     * @return string
     */
    public function getDeactivatedType()
    {
        return $this->container['deactivated_type'];
    }

    /**
     * Sets deactivated_type
     * @param string $deactivated_type
     * @return $this
     */
    public function setDeactivatedType($deactivated_type)
    {
        $this->container['deactivated_type'] = $deactivated_type;

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


