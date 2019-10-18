# # Profile

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_id** | [**\HapiRepository\Model\PropertyId**](PropertyId.md) |  | [optional] 
**id** | **string** | Profile identifier | [optional] 
**type** | **string** |  | [optional] 
**name** | [**\HapiRepository\Model\Name**](Name.md) |  | [optional] 
**company** | **string** | Used to provide company name when name field is used for contact info | [optional] 
**date_of_birth** | **string** |  | [optional] 
**emails** | [**\HapiRepository\Model\Email[]**](Email.md) |  | [optional] 
**phones** | [**\HapiRepository\Model\Phone[]**](Phone.md) |  | [optional] 
**addresses** | [**\HapiRepository\Model\Address[]**](Address.md) |  | [optional] 
**id_documents** | [**\HapiRepository\Model\IdDocument[]**](IdDocument.md) | Identifying document for profile holder | [optional] 
**loyalty_programs** | [**\HapiRepository\Model\LoyaltyProgram[]**](LoyaltyProgram.md) | Rewards program | [optional] 
**creator** | **string** | User or interface who created the profile | [optional] 
**created_date** | **string** | Read-only date and time the profile was created | [optional] 
**travel_agent_id** | **string** | IATA number | [optional] 
**preferences** | [**\HapiRepository\Model\SpecialRequest[]**](SpecialRequest.md) | Guest request | [optional] 
**comments** | [**\HapiRepository\Model\Comment[]**](Comment.md) | Free text comments | [optional] 
**gender** | **string** | Gender of the guest | [optional] 
**hapi_id** | **string** | UID of the profile in HAPI system | [optional] 
**repository_created** | **string** | Repository create date in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**repository_updated** | **string** | Repository update date in YYYY-MM-DDThh:mm:ss.sss format | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


