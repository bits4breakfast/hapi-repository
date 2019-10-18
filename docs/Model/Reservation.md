# # Reservation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_id** | [**\HapiRepository\Model\PropertyId**](PropertyId.md) |  | [optional] 
**id** | **string** | Reservation identifier and object key | [optional] 
**booking_confirmation_id** | **string** | Unique confirmation id within given hotel | [optional] 
**arrival_date** | **string** | Check-in date, in YYYY-MM-DD format | [optional] 
**arrival_time** | **string** | Estimated check-in time | [optional] 
**departure_time** | **string** | Estimated check-out time | [optional] 
**departure_date** | **string** | Check-out date, in YYYY-MM-DD format | [optional] 
**creator** | **string** | User or interface who created the reservation | [optional] 
**cancel_reason** | **string** | Cancel reason code. Generally cancelReason is used in type of enum in external system | [optional] 
**created_date** | **string** | Read-only reservation create date in hotel, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**cancelled_date** | **string** | Reservation cancellation date in hotel, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**cancellation_number** | **string** | Cancellation number for reservation. May be supplied externally or returned from pms | [optional] 
**cancellation_comment** | **string** | Cancellation comment why reservation was cancelled | [optional] 
**adults** | **int** |  | [optional] 
**children** | **int** |  | [optional] 
**status** | **string** | Current status of reservation | [optional] 
**guests** | [**\HapiRepository\Model\Guest[]**](Guest.md) | Guest profiles associated to reservation | [optional] 
**channel** | **string** |  | [optional] 
**profiles** | [**\HapiRepository\Model\Profile[]**](Profile.md) | Non-guest profiles associated to reservation | [optional] 
**room_stays** | [**\HapiRepository\Model\RoomStay[]**](RoomStay.md) | Room stay information associated to reservation | [optional] 
**comments** | [**\HapiRepository\Model\Comment[]**](Comment.md) |  | [optional] 
**requests** | [**\HapiRepository\Model\SpecialRequest[]**](SpecialRequest.md) | Guest request | [optional] 
**notifications** | [**\HapiRepository\Model\ReservationNotification[]**](ReservationNotification.md) |  | [optional] 
**reservation_references** | [**\HapiRepository\Model\ReservationReference[]**](ReservationReference.md) |  | [optional] 
**hapi_id** | **string** | UID of the reservation in HAPI system | [optional] 
**repository_created** | **string** | Repository create date in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**repository_updated** | **string** | Repository update date in YYYY-MM-DDThh:mm:ss.sss format | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


