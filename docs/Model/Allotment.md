# Allotment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_id** | [**\HapiRepository\Model\PropertyId**](PropertyId.md) |  | [optional] 
**id** | **string** | Block code and object id | [optional] 
**status** | **string** | Block status | [optional] 
**block_name** | **string** | Block name | [optional] 
**dates** | [**\HapiRepository\Model\TimeSpan**](TimeSpan.md) |  | [optional] 
**market_code** | **string** | code identifying marketing type for rate | [optional] 
**source_code** | **string** | code identifying source of rate associated to block | [optional] 
**channel_code** | **string** | code identifying booking channel for block | [optional] 
**booking_method** | **string** | code identifying booking method for block | [optional] 
**billing_type** | **string** | used to indicate if charges should be billed to master account | [optional] 
**includes_food_and_bev** | **bool** | used to indicate whether food and drinks should be charged to master account | [optional] 
**block_type** | **string** | type of block | [optional] 
**comments** | [**\HapiRepository\Model\Comment[]**](Comment.md) | free text comments associated to block | [optional] 
**profiles** | [**\HapiRepository\Model\Profile[]**](Profile.md) |  | [optional] 
**inventory_blocks** | [**\HapiRepository\Model\InventoryBlock[]**](InventoryBlock.md) |  | [optional] 
**repository_created** | **string** | repository create date in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**repository_updated** | **string** | repository update date in YYYY-MM-DDThh:mm:ss.sss format | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

