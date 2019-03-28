# SearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offset** | **int** | Offset from the beginning of retrieved values. If no offset value has provided then default (0) will be used | [optional] 
**limit** | **int** | Limit of records in the response. If no limit provided default (100) will be used | [optional] 
**from_date** | [**\DateTime**](\DateTime.md) | Last update date (from) in YYYY-MM-DDThh:mm:ss.sssZ format | 
**to_date** | [**\DateTime**](\DateTime.md) | Last update date (to) in YYYY-MM-DDThh:mm:ss.sssZ format | [optional] 
**chain_code** | **string** | Hotel chain code. If left blank, no filtering will be used on this field. | [optional] 
**property_code** | **string** | Hotel property code. If left blank, no filtering will be used on this field. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

