<?php
/**
 * Sort
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
 * Sort Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Sort implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sort';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'col' => 'string',
        'dir' => 'string'
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
        'col' => 'col',
        'dir' => 'dir'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'col' => 'setCol',
        'dir' => 'setDir'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'col' => 'getCol',
        'dir' => 'getDir'
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

    const COL_DATE = 'date';
    const COL_ALIAS = 'alias';
    const COL_OFFER = 'offer';
    const COL_ZONE = 'zone';
    const COL_COUNTRY = 'country';
    const COL_OS = 'os';
    const DIR_ASC = 'ASC';
    const DIR_DESC = 'DESC';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getColAllowableValues()
    {
        return [
            self::COL_DATE,
            self::COL_ALIAS,
            self::COL_OFFER,
            self::COL_ZONE,
            self::COL_COUNTRY,
            self::COL_OS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDirAllowableValues()
    {
        return [
            self::DIR_ASC,
            self::DIR_DESC,
        ];
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
        $this->container['col'] = isset($data['col']) ? $data['col'] : null;
        $this->container['dir'] = isset($data['dir']) ? $data['dir'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["date", "alias", "offer", "zone", "country", "os"];
        if (!in_array($this->container['col'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'col', must be one of 'date', 'alias', 'offer', 'zone', 'country', 'os'.";
        }

        $allowed_values = ["ASC", "DESC"];
        if (!in_array($this->container['dir'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'dir', must be one of 'ASC', 'DESC'.";
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

        $allowed_values = ["date", "alias", "offer", "zone", "country", "os"];
        if (!in_array($this->container['col'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["ASC", "DESC"];
        if (!in_array($this->container['dir'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets col
     * @return string
     */
    public function getCol()
    {
        return $this->container['col'];
    }

    /**
     * Sets col
     * @param string $col
     * @return $this
     */
    public function setCol($col)
    {
        $allowed_values = array('date', 'alias', 'offer', 'zone', 'country', 'os');
        if (!is_null($col) && (!in_array($col, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'col', must be one of 'date', 'alias', 'offer', 'zone', 'country', 'os'");
        }
        $this->container['col'] = $col;

        return $this;
    }

    /**
     * Gets dir
     * @return string
     */
    public function getDir()
    {
        return $this->container['dir'];
    }

    /**
     * Sets dir
     * @param string $dir
     * @return $this
     */
    public function setDir($dir)
    {
        $allowed_values = array('ASC', 'DESC');
        if (!is_null($dir) && (!in_array($dir, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'dir', must be one of 'ASC', 'DESC'");
        }
        $this->container['dir'] = $dir;

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


