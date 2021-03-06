<?php
/**
 * Allotment
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
 * Allotment Class Doc Comment
 *
 * @category Class
 * @package  HapiRepository
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Allotment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Allotment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'property_id' => '\HapiRepository\Model\PropertyId',
        'id' => 'string',
        'status' => 'string',
        'block_name' => 'string',
        'dates' => '\HapiRepository\Model\TimeSpan',
        'market_code' => 'string',
        'source_code' => 'string',
        'channel_code' => 'string',
        'booking_method' => 'string',
        'billing_type' => 'string',
        'includes_food_and_bev' => 'bool',
        'block_type' => 'string',
        'comments' => '\HapiRepository\Model\Comment[]',
        'profiles' => '\HapiRepository\Model\Profile[]',
        'inventory_blocks' => '\HapiRepository\Model\InventoryBlock[]',
        'notification_type' => 'string',
        'block_inventory_type' => 'string',
        'payment_method' => 'string',
        'repository_created' => 'string',
        'repository_updated' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'property_id' => null,
        'id' => null,
        'status' => null,
        'block_name' => null,
        'dates' => null,
        'market_code' => null,
        'source_code' => null,
        'channel_code' => null,
        'booking_method' => null,
        'billing_type' => null,
        'includes_food_and_bev' => null,
        'block_type' => null,
        'comments' => null,
        'profiles' => null,
        'inventory_blocks' => null,
        'notification_type' => null,
        'block_inventory_type' => null,
        'payment_method' => null,
        'repository_created' => null,
        'repository_updated' => null
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
        'property_id' => 'propertyId',
        'id' => 'id',
        'status' => 'status',
        'block_name' => 'blockName',
        'dates' => 'dates',
        'market_code' => 'marketCode',
        'source_code' => 'sourceCode',
        'channel_code' => 'channelCode',
        'booking_method' => 'bookingMethod',
        'billing_type' => 'billingType',
        'includes_food_and_bev' => 'includesFoodAndBev',
        'block_type' => 'blockType',
        'comments' => 'comments',
        'profiles' => 'profiles',
        'inventory_blocks' => 'inventoryBlocks',
        'notification_type' => 'notificationType',
        'block_inventory_type' => 'blockInventoryType',
        'payment_method' => 'paymentMethod',
        'repository_created' => 'repositoryCreated',
        'repository_updated' => 'repositoryUpdated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'property_id' => 'setPropertyId',
        'id' => 'setId',
        'status' => 'setStatus',
        'block_name' => 'setBlockName',
        'dates' => 'setDates',
        'market_code' => 'setMarketCode',
        'source_code' => 'setSourceCode',
        'channel_code' => 'setChannelCode',
        'booking_method' => 'setBookingMethod',
        'billing_type' => 'setBillingType',
        'includes_food_and_bev' => 'setIncludesFoodAndBev',
        'block_type' => 'setBlockType',
        'comments' => 'setComments',
        'profiles' => 'setProfiles',
        'inventory_blocks' => 'setInventoryBlocks',
        'notification_type' => 'setNotificationType',
        'block_inventory_type' => 'setBlockInventoryType',
        'payment_method' => 'setPaymentMethod',
        'repository_created' => 'setRepositoryCreated',
        'repository_updated' => 'setRepositoryUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'property_id' => 'getPropertyId',
        'id' => 'getId',
        'status' => 'getStatus',
        'block_name' => 'getBlockName',
        'dates' => 'getDates',
        'market_code' => 'getMarketCode',
        'source_code' => 'getSourceCode',
        'channel_code' => 'getChannelCode',
        'booking_method' => 'getBookingMethod',
        'billing_type' => 'getBillingType',
        'includes_food_and_bev' => 'getIncludesFoodAndBev',
        'block_type' => 'getBlockType',
        'comments' => 'getComments',
        'profiles' => 'getProfiles',
        'inventory_blocks' => 'getInventoryBlocks',
        'notification_type' => 'getNotificationType',
        'block_inventory_type' => 'getBlockInventoryType',
        'payment_method' => 'getPaymentMethod',
        'repository_created' => 'getRepositoryCreated',
        'repository_updated' => 'getRepositoryUpdated'
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
        $this->container['property_id'] = isset($data['property_id']) ? $data['property_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['block_name'] = isset($data['block_name']) ? $data['block_name'] : null;
        $this->container['dates'] = isset($data['dates']) ? $data['dates'] : null;
        $this->container['market_code'] = isset($data['market_code']) ? $data['market_code'] : null;
        $this->container['source_code'] = isset($data['source_code']) ? $data['source_code'] : null;
        $this->container['channel_code'] = isset($data['channel_code']) ? $data['channel_code'] : null;
        $this->container['booking_method'] = isset($data['booking_method']) ? $data['booking_method'] : null;
        $this->container['billing_type'] = isset($data['billing_type']) ? $data['billing_type'] : null;
        $this->container['includes_food_and_bev'] = isset($data['includes_food_and_bev']) ? $data['includes_food_and_bev'] : null;
        $this->container['block_type'] = isset($data['block_type']) ? $data['block_type'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['profiles'] = isset($data['profiles']) ? $data['profiles'] : null;
        $this->container['inventory_blocks'] = isset($data['inventory_blocks']) ? $data['inventory_blocks'] : null;
        $this->container['notification_type'] = isset($data['notification_type']) ? $data['notification_type'] : null;
        $this->container['block_inventory_type'] = isset($data['block_inventory_type']) ? $data['block_inventory_type'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['repository_created'] = isset($data['repository_created']) ? $data['repository_created'] : null;
        $this->container['repository_updated'] = isset($data['repository_updated']) ? $data['repository_updated'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets property_id
     *
     * @return \HapiRepository\Model\PropertyId|null
     */
    public function getPropertyId()
    {
        return $this->container['property_id'];
    }

    /**
     * Sets property_id
     *
     * @param \HapiRepository\Model\PropertyId|null $property_id property_id
     *
     * @return $this
     */
    public function setPropertyId($property_id)
    {
        $this->container['property_id'] = $property_id;

        return $this;
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
     * @param string|null $id Block code and object id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Block status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets block_name
     *
     * @return string|null
     */
    public function getBlockName()
    {
        return $this->container['block_name'];
    }

    /**
     * Sets block_name
     *
     * @param string|null $block_name Block name
     *
     * @return $this
     */
    public function setBlockName($block_name)
    {
        $this->container['block_name'] = $block_name;

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
     * Gets market_code
     *
     * @return string|null
     */
    public function getMarketCode()
    {
        return $this->container['market_code'];
    }

    /**
     * Sets market_code
     *
     * @param string|null $market_code Code identifying marketing type for rate
     *
     * @return $this
     */
    public function setMarketCode($market_code)
    {
        $this->container['market_code'] = $market_code;

        return $this;
    }

    /**
     * Gets source_code
     *
     * @return string|null
     */
    public function getSourceCode()
    {
        return $this->container['source_code'];
    }

    /**
     * Sets source_code
     *
     * @param string|null $source_code Code identifying source of rate associated to block
     *
     * @return $this
     */
    public function setSourceCode($source_code)
    {
        $this->container['source_code'] = $source_code;

        return $this;
    }

    /**
     * Gets channel_code
     *
     * @return string|null
     */
    public function getChannelCode()
    {
        return $this->container['channel_code'];
    }

    /**
     * Sets channel_code
     *
     * @param string|null $channel_code Code identifying booking channel for block
     *
     * @return $this
     */
    public function setChannelCode($channel_code)
    {
        $this->container['channel_code'] = $channel_code;

        return $this;
    }

    /**
     * Gets booking_method
     *
     * @return string|null
     */
    public function getBookingMethod()
    {
        return $this->container['booking_method'];
    }

    /**
     * Sets booking_method
     *
     * @param string|null $booking_method Code identifying booking method for block
     *
     * @return $this
     */
    public function setBookingMethod($booking_method)
    {
        $this->container['booking_method'] = $booking_method;

        return $this;
    }

    /**
     * Gets billing_type
     *
     * @return string|null
     */
    public function getBillingType()
    {
        return $this->container['billing_type'];
    }

    /**
     * Sets billing_type
     *
     * @param string|null $billing_type Used to indicate if charges should be billed to master account
     *
     * @return $this
     */
    public function setBillingType($billing_type)
    {
        $this->container['billing_type'] = $billing_type;

        return $this;
    }

    /**
     * Gets includes_food_and_bev
     *
     * @return bool|null
     */
    public function getIncludesFoodAndBev()
    {
        return $this->container['includes_food_and_bev'];
    }

    /**
     * Sets includes_food_and_bev
     *
     * @param bool|null $includes_food_and_bev Used to indicate whether food and drinks should be charged to master account
     *
     * @return $this
     */
    public function setIncludesFoodAndBev($includes_food_and_bev)
    {
        $this->container['includes_food_and_bev'] = $includes_food_and_bev;

        return $this;
    }

    /**
     * Gets block_type
     *
     * @return string|null
     */
    public function getBlockType()
    {
        return $this->container['block_type'];
    }

    /**
     * Sets block_type
     *
     * @param string|null $block_type Type of block
     *
     * @return $this
     */
    public function setBlockType($block_type)
    {
        $this->container['block_type'] = $block_type;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return \HapiRepository\Model\Comment[]|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param \HapiRepository\Model\Comment[]|null $comments Free text comments associated to block
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets profiles
     *
     * @return \HapiRepository\Model\Profile[]|null
     */
    public function getProfiles()
    {
        return $this->container['profiles'];
    }

    /**
     * Sets profiles
     *
     * @param \HapiRepository\Model\Profile[]|null $profiles profiles
     *
     * @return $this
     */
    public function setProfiles($profiles)
    {
        $this->container['profiles'] = $profiles;

        return $this;
    }

    /**
     * Gets inventory_blocks
     *
     * @return \HapiRepository\Model\InventoryBlock[]|null
     */
    public function getInventoryBlocks()
    {
        return $this->container['inventory_blocks'];
    }

    /**
     * Sets inventory_blocks
     *
     * @param \HapiRepository\Model\InventoryBlock[]|null $inventory_blocks Inventory block detail for allotment
     *
     * @return $this
     */
    public function setInventoryBlocks($inventory_blocks)
    {
        $this->container['inventory_blocks'] = $inventory_blocks;

        return $this;
    }

    /**
     * Gets notification_type
     *
     * @return string|null
     */
    public function getNotificationType()
    {
        return $this->container['notification_type'];
    }

    /**
     * Sets notification_type
     *
     * @param string|null $notification_type An enumerated list to identify the notification being sent. Available values: NEW, UPDATE, CANCEL
     *
     * @return $this
     */
    public function setNotificationType($notification_type)
    {
        $this->container['notification_type'] = $notification_type;

        return $this;
    }

    /**
     * Gets block_inventory_type
     *
     * @return string|null
     */
    public function getBlockInventoryType()
    {
        return $this->container['block_inventory_type'];
    }

    /**
     * Sets block_inventory_type
     *
     * @param string|null $block_inventory_type The type for the inventory such as ELASTIC, NON-ELASTIC, SELL_LIMIT
     *
     * @return $this
     */
    public function setBlockInventoryType($block_inventory_type)
    {
        $this->container['block_inventory_type'] = $block_inventory_type;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string|null $payment_method The payment method associated with the block
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets repository_created
     *
     * @return string|null
     */
    public function getRepositoryCreated()
    {
        return $this->container['repository_created'];
    }

    /**
     * Sets repository_created
     *
     * @param string|null $repository_created repository_created
     *
     * @return $this
     */
    public function setRepositoryCreated($repository_created)
    {
        $this->container['repository_created'] = $repository_created;

        return $this;
    }

    /**
     * Gets repository_updated
     *
     * @return string|null
     */
    public function getRepositoryUpdated()
    {
        return $this->container['repository_updated'];
    }

    /**
     * Sets repository_updated
     *
     * @param string|null $repository_updated repository_updated
     *
     * @return $this
     */
    public function setRepositoryUpdated($repository_updated)
    {
        $this->container['repository_updated'] = $repository_updated;

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


