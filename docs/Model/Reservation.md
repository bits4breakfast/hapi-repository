# Reservation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_id** | [**\HapiRepository\Model\PropertyId**](PropertyId.md) |  | [optional] 
**id** | **string** | pms reservation id and object key | [optional] 
**booking_confirmation_id** | **string** | crs reservation id | [optional] 
**arrival_date** | **string** | check-in date, in YYYY-MM-DD format | [optional] 
**arrival_time** | **string** | estimated check-in time | [optional] 
**departure_date** | **string** | check-out date, in YYYY-MM-DD format | [optional] 
**creator** | **string** | user or interface who created the reservation | [optional] 
**created_date** | **string** | read-only reservation create date in hotel, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**cancelled_date** | **string** | Reservation cancellation date in hotel, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**cancellation_number** | **string** | cancellation number for reservation. may be supplied externally or returned from pms | [optional] 
**cancellation_comment** | **string** | Cancellation comment why reservation was cancelled | [optional] 
**adults** | **int** |  | [optional] 
**children** | **int** |  | [optional] 
**status** | **string** | current status of reservation | [optional] 
**guests** | [**\HapiRepository\Model\Guest[]**](Guest.md) |  | [optional] 
**profiles** | [**\HapiRepository\Model\Profile[]**](Profile.md) |  | [optional] 
**room_stays** | [**\HapiRepository\Model\RoomStay[]**](RoomStay.md) |  | [optional] 
**comments** | [**\HapiRepository\Model\Comment[]**](Comment.md) |  | [optional] 
**repository_created** | **string** | repository create date in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**repository_updated** | **string** | repository update date in YYYY-MM-DDThh:mm:ss.sss format | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

