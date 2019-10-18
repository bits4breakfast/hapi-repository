# HapiRepository\AllotmentApi

All URIs are relative to *https://hapicloud-dev.apigee.net/repository*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllotment**](AllotmentApi.md#getAllotment) | **GET** /allotments/{propertyCode}/{id} | Get allotments of specified hotel that defined by chainCode / propertyCode (HAPI internal property identifier) and by blockCode and effectiveDate (Allotment external identifier)
[**searchAllotments**](AllotmentApi.md#searchAllotments) | **POST** /allotments/search/{strategy} | Search allotments by date range. Paging is included. The maximum number of returned allotments is 1000



## getAllotment

> \HapiRepository\Model\Allotment getAllotment($property_code, $id)

Get allotments of specified hotel that defined by chainCode / propertyCode (HAPI internal property identifier) and by blockCode and effectiveDate (Allotment external identifier)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = HapiRepository\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HapiRepository\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new HapiRepository\Api\AllotmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_code = 'property_code_example'; // string | Property code as designated in the PMS
$id = 'id_example'; // string | Identifier of allotment record in the external system

try {
    $result = $apiInstance->getAllotment($property_code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllotmentApi->getAllotment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_code** | **string**| Property code as designated in the PMS |
 **id** | **string**| Identifier of allotment record in the external system |

### Return type

[**\HapiRepository\Model\Allotment**](../Model/Allotment.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchAllotments

> \HapiRepository\Model\RecordSet searchAllotments($strategy, $repository_search_request)

Search allotments by date range. Paging is included. The maximum number of returned allotments is 1000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = HapiRepository\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HapiRepository\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new HapiRepository\Api\AllotmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy = 'strategy_example'; // string | The type of search strategy. Could be range or update. In case of range strategy, records will be searched by their effectiveDate / expireDate instead of searching by updated field in case of update strategy.
$repository_search_request = new \HapiRepository\Model\RepositorySearchRequest(); // \HapiRepository\Model\RepositorySearchRequest | 

try {
    $result = $apiInstance->searchAllotments($strategy, $repository_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllotmentApi->searchAllotments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy** | **string**| The type of search strategy. Could be range or update. In case of range strategy, records will be searched by their effectiveDate / expireDate instead of searching by updated field in case of update strategy. |
 **repository_search_request** | [**\HapiRepository\Model\RepositorySearchRequest**](../Model/RepositorySearchRequest.md)|  |

### Return type

[**\HapiRepository\Model\RecordSet**](../Model/RecordSet.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

