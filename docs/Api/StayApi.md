# HapiRepository\StayApi

All URIs are relative to *https://hapicloud-dev.apigee.net/repository*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStay**](StayApi.md#getStay) | **GET** /stays/{propertyCode}/{reservationId} | Get reservation by reservation id
[**searchStays**](StayApi.md#searchStays) | **POST** /stays/search | Get stays by date range. Paging is included. The maximum number of returned stays is 1000



## getStay

> \HapiRepository\Model\Stay getStay($property_code, $reservation_id)

Get reservation by reservation id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = HapiRepository\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HapiRepository\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new HapiRepository\Api\StayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_code = 'property_code_example'; // string | Property code as designated in the PMS
$reservation_id = 'reservation_id_example'; // string | PMS Reservation id

try {
    $result = $apiInstance->getStay($property_code, $reservation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StayApi->getStay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_code** | **string**| Property code as designated in the PMS |
 **reservation_id** | **string**| PMS Reservation id |

### Return type

[**\HapiRepository\Model\Stay**](../Model/Stay.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchStays

> \HapiRepository\Model\RecordSet searchStays($repository_search_request)

Get stays by date range. Paging is included. The maximum number of returned stays is 1000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = HapiRepository\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HapiRepository\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new HapiRepository\Api\StayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$repository_search_request = new \HapiRepository\Model\RepositorySearchRequest(); // \HapiRepository\Model\RepositorySearchRequest | 

try {
    $result = $apiInstance->searchStays($repository_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StayApi->searchStays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

