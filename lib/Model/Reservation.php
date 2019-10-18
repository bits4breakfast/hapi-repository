<?php
/**
 * Reservation
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
 * Reservation Class Doc Comment
 *
 * @category Class
 * @package  HapiRepository
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Reservation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Reservation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'property_id' => '\HapiRepository\Model\PropertyId',
        'id' => 'string',
        'booking_confirmation_id' => 'string',
        'arrival_date' => 'string',
        'arrival_time' => 'string',
        'departure_time' => 'string',
        'departure_date' => 'string',
        'creator' => 'string',
        'cancel_reason' => 'string',
        'created_date' => 'string',
        'cancelled_date' => 'string',
        'cancellation_number' => 'string',
        'cancellation_comment' => 'string',
        'adults' => 'int',
        'children' => 'int',
        'status' => 'string',
        'guests' => '\HapiRepository\Model\Guest[]',
        'channel' => 'string',
        'profiles' => '\HapiRepository\Model\Profile[]',
        'room_stays' => '\HapiRepository\Model\RoomStay[]',
        'comments' => '\HapiRepository\Model\Comment[]',
        'requests' => '\HapiRepository\Model\SpecialRequest[]',
        'notifications' => '\HapiRepository\Model\ReservationNotification[]',
        'reservation_references' => '\HapiRepository\Model\ReservationReference[]',
        'hapi_id' => 'string',
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
        'booking_confirmation_id' => null,
        'arrival_date' => null,
        'arrival_time' => null,
        'departure_time' => null,
        'departure_date' => null,
        'creator' => null,
        'cancel_reason' => null,
        'created_date' => null,
        'cancelled_date' => null,
        'cancellation_number' => null,
        'cancellation_comment' => null,
        'adults' => 'int32',
        'children' => 'int32',
        'status' => null,
        'guests' => null,
        'channel' => null,
        'profiles' => null,
        'room_stays' => null,
        'comments' => null,
        'requests' => null,
        'notifications' => null,
        'reservation_references' => null,
        'hapi_id' => null,
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
        'booking_confirmation_id' => 'bookingConfirmationId',
        'arrival_date' => 'arrivalDate',
        'arrival_time' => 'arrivalTime',
        'departure_time' => 'departureTime',
        'departure_date' => 'departureDate',
        'creator' => 'creator',
        'cancel_reason' => 'cancelReason',
        'created_date' => 'createdDate',
        'cancelled_date' => 'cancelledDate',
        'cancellation_number' => 'cancellationNumber',
        'cancellation_comment' => 'cancellationComment',
        'adults' => 'adults',
        'children' => 'children',
        'status' => 'status',
        'guests' => 'guests',
        'channel' => 'channel',
        'profiles' => 'profiles',
        'room_stays' => 'roomStays',
        'comments' => 'comments',
        'requests' => 'requests',
        'notifications' => 'notifications',
        'reservation_references' => 'reservationReferences',
        'hapi_id' => 'hapiId',
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
        'booking_confirmation_id' => 'setBookingConfirmationId',
        'arrival_date' => 'setArrivalDate',
        'arrival_time' => 'setArrivalTime',
        'departure_time' => 'setDepartureTime',
        'departure_date' => 'setDepartureDate',
        'creator' => 'setCreator',
        'cancel_reason' => 'setCancelReason',
        'created_date' => 'setCreatedDate',
        'cancelled_date' => 'setCancelledDate',
        'cancellation_number' => 'setCancellationNumber',
        'cancellation_comment' => 'setCancellationComment',
        'adults' => 'setAdults',
        'children' => 'setChildren',
        'status' => 'setStatus',
        'guests' => 'setGuests',
        'channel' => 'setChannel',
        'profiles' => 'setProfiles',
        'room_stays' => 'setRoomStays',
        'comments' => 'setComments',
        'requests' => 'setRequests',
        'notifications' => 'setNotifications',
        'reservation_references' => 'setReservationReferences',
        'hapi_id' => 'setHapiId',
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
        'booking_confirmation_id' => 'getBookingConfirmationId',
        'arrival_date' => 'getArrivalDate',
        'arrival_time' => 'getArrivalTime',
        'departure_time' => 'getDepartureTime',
        'departure_date' => 'getDepartureDate',
        'creator' => 'getCreator',
        'cancel_reason' => 'getCancelReason',
        'created_date' => 'getCreatedDate',
        'cancelled_date' => 'getCancelledDate',
        'cancellation_number' => 'getCancellationNumber',
        'cancellation_comment' => 'getCancellationComment',
        'adults' => 'getAdults',
        'children' => 'getChildren',
        'status' => 'getStatus',
        'guests' => 'getGuests',
        'channel' => 'getChannel',
        'profiles' => 'getProfiles',
        'room_stays' => 'getRoomStays',
        'comments' => 'getComments',
        'requests' => 'getRequests',
        'notifications' => 'getNotifications',
        'reservation_references' => 'getReservationReferences',
        'hapi_id' => 'getHapiId',
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
        $this->container['booking_confirmation_id'] = isset($data['booking_confirmation_id']) ? $data['booking_confirmation_id'] : null;
        $this->container['arrival_date'] = isset($data['arrival_date']) ? $data['arrival_date'] : null;
        $this->container['arrival_time'] = isset($data['arrival_time']) ? $data['arrival_time'] : null;
        $this->container['departure_time'] = isset($data['departure_time']) ? $data['departure_time'] : null;
        $this->container['departure_date'] = isset($data['departure_date']) ? $data['departure_date'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['cancel_reason'] = isset($data['cancel_reason']) ? $data['cancel_reason'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['cancelled_date'] = isset($data['cancelled_date']) ? $data['cancelled_date'] : null;
        $this->container['cancellation_number'] = isset($data['cancellation_number']) ? $data['cancellation_number'] : null;
        $this->container['cancellation_comment'] = isset($data['cancellation_comment']) ? $data['cancellation_comment'] : null;
        $this->container['adults'] = isset($data['adults']) ? $data['adults'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['guests'] = isset($data['guests']) ? $data['guests'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['profiles'] = isset($data['profiles']) ? $data['profiles'] : null;
        $this->container['room_stays'] = isset($data['room_stays']) ? $data['room_stays'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['requests'] = isset($data['requests']) ? $data['requests'] : null;
        $this->container['notifications'] = isset($data['notifications']) ? $data['notifications'] : null;
        $this->container['reservation_references'] = isset($data['reservation_references']) ? $data['reservation_references'] : null;
        $this->container['hapi_id'] = isset($data['hapi_id']) ? $data['hapi_id'] : null;
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
     * @param string|null $id Reservation identifier and object key
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets booking_confirmation_id
     *
     * @return string|null
     */
    public function getBookingConfirmationId()
    {
        return $this->container['booking_confirmation_id'];
    }

    /**
     * Sets booking_confirmation_id
     *
     * @param string|null $booking_confirmation_id Unique confirmation id within given hotel
     *
     * @return $this
     */
    public function setBookingConfirmationId($booking_confirmation_id)
    {
        $this->container['booking_confirmation_id'] = $booking_confirmation_id;

        return $this;
    }

    /**
     * Gets arrival_date
     *
     * @return string|null
     */
    public function getArrivalDate()
    {
        return $this->container['arrival_date'];
    }

    /**
     * Sets arrival_date
     *
     * @param string|null $arrival_date Check-in date, in YYYY-MM-DD format
     *
     * @return $this
     */
    public function setArrivalDate($arrival_date)
    {
        $this->container['arrival_date'] = $arrival_date;

        return $this;
    }

    /**
     * Gets arrival_time
     *
     * @return string|null
     */
    public function getArrivalTime()
    {
        return $this->container['arrival_time'];
    }

    /**
     * Sets arrival_time
     *
     * @param string|null $arrival_time Estimated check-in time
     *
     * @return $this
     */
    public function setArrivalTime($arrival_time)
    {
        $this->container['arrival_time'] = $arrival_time;

        return $this;
    }

    /**
     * Gets departure_time
     *
     * @return string|null
     */
    public function getDepartureTime()
    {
        return $this->container['departure_time'];
    }

    /**
     * Sets departure_time
     *
     * @param string|null $departure_time Estimated check-out time
     *
     * @return $this
     */
    public function setDepartureTime($departure_time)
    {
        $this->container['departure_time'] = $departure_time;

        return $this;
    }

    /**
     * Gets departure_date
     *
     * @return string|null
     */
    public function getDepartureDate()
    {
        return $this->container['departure_date'];
    }

    /**
     * Sets departure_date
     *
     * @param string|null $departure_date Check-out date, in YYYY-MM-DD format
     *
     * @return $this
     */
    public function setDepartureDate($departure_date)
    {
        $this->container['departure_date'] = $departure_date;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return string|null
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string|null $creator User or interface who created the reservation
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets cancel_reason
     *
     * @return string|null
     */
    public function getCancelReason()
    {
        return $this->container['cancel_reason'];
    }

    /**
     * Sets cancel_reason
     *
     * @param string|null $cancel_reason Cancel reason code. Generally cancelReason is used in type of enum in external system
     *
     * @return $this
     */
    public function setCancelReason($cancel_reason)
    {
        $this->container['cancel_reason'] = $cancel_reason;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return string|null
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param string|null $created_date Read-only reservation create date in hotel, in YYYY-MM-DDThh:mm:ss.sss format
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets cancelled_date
     *
     * @return string|null
     */
    public function getCancelledDate()
    {
        return $this->container['cancelled_date'];
    }

    /**
     * Sets cancelled_date
     *
     * @param string|null $cancelled_date Reservation cancellation date in hotel, in YYYY-MM-DDThh:mm:ss.sss format
     *
     * @return $this
     */
    public function setCancelledDate($cancelled_date)
    {
        $this->container['cancelled_date'] = $cancelled_date;

        return $this;
    }

    /**
     * Gets cancellation_number
     *
     * @return string|null
     */
    public function getCancellationNumber()
    {
        return $this->container['cancellation_number'];
    }

    /**
     * Sets cancellation_number
     *
     * @param string|null $cancellation_number Cancellation number for reservation. May be supplied externally or returned from pms
     *
     * @return $this
     */
    public function setCancellationNumber($cancellation_number)
    {
        $this->container['cancellation_number'] = $cancellation_number;

        return $this;
    }

    /**
     * Gets cancellation_comment
     *
     * @return string|null
     */
    public function getCancellationComment()
    {
        return $this->container['cancellation_comment'];
    }

    /**
     * Sets cancellation_comment
     *
     * @param string|null $cancellation_comment Cancellation comment why reservation was cancelled
     *
     * @return $this
     */
    public function setCancellationComment($cancellation_comment)
    {
        $this->container['cancellation_comment'] = $cancellation_comment;

        return $this;
    }

    /**
     * Gets adults
     *
     * @return int|null
     */
    public function getAdults()
    {
        return $this->container['adults'];
    }

    /**
     * Sets adults
     *
     * @param int|null $adults adults
     *
     * @return $this
     */
    public function setAdults($adults)
    {
        $this->container['adults'] = $adults;

        return $this;
    }

    /**
     * Gets children
     *
     * @return int|null
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param int|null $children children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

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
     * @param string|null $status Current status of reservation
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets guests
     *
     * @return \HapiRepository\Model\Guest[]|null
     */
    public function getGuests()
    {
        return $this->container['guests'];
    }

    /**
     * Sets guests
     *
     * @param \HapiRepository\Model\Guest[]|null $guests Guest profiles associated to reservation
     *
     * @return $this
     */
    public function setGuests($guests)
    {
        $this->container['guests'] = $guests;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return string|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string|null $channel channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

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
     * @param \HapiRepository\Model\Profile[]|null $profiles Non-guest profiles associated to reservation
     *
     * @return $this
     */
    public function setProfiles($profiles)
    {
        $this->container['profiles'] = $profiles;

        return $this;
    }

    /**
     * Gets room_stays
     *
     * @return \HapiRepository\Model\RoomStay[]|null
     */
    public function getRoomStays()
    {
        return $this->container['room_stays'];
    }

    /**
     * Sets room_stays
     *
     * @param \HapiRepository\Model\RoomStay[]|null $room_stays Room stay information associated to reservation
     *
     * @return $this
     */
    public function setRoomStays($room_stays)
    {
        $this->container['room_stays'] = $room_stays;

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
     * @param \HapiRepository\Model\Comment[]|null $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets requests
     *
     * @return \HapiRepository\Model\SpecialRequest[]|null
     */
    public function getRequests()
    {
        return $this->container['requests'];
    }

    /**
     * Sets requests
     *
     * @param \HapiRepository\Model\SpecialRequest[]|null $requests Guest request
     *
     * @return $this
     */
    public function setRequests($requests)
    {
        $this->container['requests'] = $requests;

        return $this;
    }

    /**
     * Gets notifications
     *
     * @return \HapiRepository\Model\ReservationNotification[]|null
     */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
     * Sets notifications
     *
     * @param \HapiRepository\Model\ReservationNotification[]|null $notifications notifications
     *
     * @return $this
     */
    public function setNotifications($notifications)
    {
        $this->container['notifications'] = $notifications;

        return $this;
    }

    /**
     * Gets reservation_references
     *
     * @return \HapiRepository\Model\ReservationReference[]|null
     */
    public function getReservationReferences()
    {
        return $this->container['reservation_references'];
    }

    /**
     * Sets reservation_references
     *
     * @param \HapiRepository\Model\ReservationReference[]|null $reservation_references reservation_references
     *
     * @return $this
     */
    public function setReservationReferences($reservation_references)
    {
        $this->container['reservation_references'] = $reservation_references;

        return $this;
    }

    /**
     * Gets hapi_id
     *
     * @return string|null
     */
    public function getHapiId()
    {
        return $this->container['hapi_id'];
    }

    /**
     * Sets hapi_id
     *
     * @param string|null $hapi_id UID of the reservation in HAPI system
     *
     * @return $this
     */
    public function setHapiId($hapi_id)
    {
        $this->container['hapi_id'] = $hapi_id;

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
     * @param string|null $repository_created Repository create date in YYYY-MM-DDThh:mm:ss.sss format
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
     * @param string|null $repository_updated Repository update date in YYYY-MM-DDThh:mm:ss.sss format
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


