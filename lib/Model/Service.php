<?php
/**
 * Service
 *
 * PHP version 5
 *
 * @category Class
 * @package  HapiRepository
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * HAPI Repository API
 *
 * API for retrieving objects from HAPI repository
 *
 * The version of the OpenAPI document: 2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HapiRepository\Model;

use \ArrayAccess;
use \HapiRepository\ObjectSerializer;

/**
 * Service Class Doc Comment
 *
 * @category Class
 * @package  HapiRepository
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Service implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Service';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'type' => 'string',
        'price' => 'float',
        'currency_code' => 'string',
        'rate_code' => 'string',
        'cost_type' => 'string',
        'quantity' => 'int',
        'dates' => '\HapiRepository\Model\TimeSpan',
        'comment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'price' => null,
        'currency_code' => null,
        'rate_code' => null,
        'cost_type' => null,
        'quantity' => 'int32',
        'dates' => null,
        'comment' => null
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
        'id' => 'id',
        'type' => 'type',
        'price' => 'price',
        'currency_code' => 'currencyCode',
        'rate_code' => 'rateCode',
        'cost_type' => 'costType',
        'quantity' => 'quantity',
        'dates' => 'dates',
        'comment' => 'comment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'price' => 'setPrice',
        'currency_code' => 'setCurrencyCode',
        'rate_code' => 'setRateCode',
        'cost_type' => 'setCostType',
        'quantity' => 'setQuantity',
        'dates' => 'setDates',
        'comment' => 'setComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'price' => 'getPrice',
        'currency_code' => 'getCurrencyCode',
        'rate_code' => 'getRateCode',
        'cost_type' => 'getCostType',
        'quantity' => 'getQuantity',
        'dates' => 'getDates',
        'comment' => 'getComment'
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

    const TYPE_SERVICE = 'SERVICE';
    const TYPE_FIXED_CHARGE = 'FIXED_CHARGE';
    const COST_TYPE_STAY = 'PER_STAY';
    const COST_TYPE_NIGHT = 'PER_NIGHT';
    const COST_TYPE_WEEK = 'PER_WEEK';
    const COST_TYPE__USE = 'PER_USE';
    const COST_TYPE_ADULT_PER_NIGHT = 'PER_ADULT_PER_NIGHT';
    const COST_TYPE_PERSON_PER_NIGHT = 'PER_PERSON_PER_NIGHT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SERVICE,
            self::TYPE_FIXED_CHARGE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCostTypeAllowableValues()
    {
        return [
            self::COST_TYPE_STAY,
            self::COST_TYPE_NIGHT,
            self::COST_TYPE_WEEK,
            self::COST_TYPE__USE,
            self::COST_TYPE_ADULT_PER_NIGHT,
            self::COST_TYPE_PERSON_PER_NIGHT,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['rate_code'] = isset($data['rate_code']) ? $data['rate_code'] : null;
        $this->container['cost_type'] = isset($data['cost_type']) ? $data['cost_type'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['dates'] = isset($data['dates']) ? $data['dates'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCostTypeAllowableValues();
        if (!is_null($this->container['cost_type']) && !in_array($this->container['cost_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cost_type', must be one of '%s'",
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Code that identifies service
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Service or fixed charge. defaults to SERVICE if not indicated
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price Cost of service
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code Currency code of price indicated
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets rate_code
     *
     * @return string|null
     */
    public function getRateCode()
    {
        return $this->container['rate_code'];
    }

    /**
     * Sets rate_code
     *
     * @param string|null $rate_code Rate code of price indicated
     *
     * @return $this
     */
    public function setRateCode($rate_code)
    {
        $this->container['rate_code'] = $rate_code;

        return $this;
    }

    /**
     * Gets cost_type
     *
     * @return string|null
     */
    public function getCostType()
    {
        return $this->container['cost_type'];
    }

    /**
     * Sets cost_type
     *
     * @param string|null $cost_type How is the service or charge priced
     *
     * @return $this
     */
    public function setCostType($cost_type)
    {
        $allowedValues = $this->getCostTypeAllowableValues();
        if (!is_null($cost_type) && !in_array($cost_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cost_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cost_type'] = $cost_type;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity Number of service or fixed charge items
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets dates
     *
     * @return \HapiRepository\Model\TimeSpan|null
     */
    public function getDates()
    {
        return $this->container['dates'];
    }

    /**
     * Sets dates
     *
     * @param \HapiRepository\Model\TimeSpan|null $dates dates
     *
     * @return $this
     */
    public function setDates($dates)
    {
        $this->container['dates'] = $dates;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment Fixed charge additional information
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


