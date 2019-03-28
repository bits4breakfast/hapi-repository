# HapiRepository\StayApi

All URIs are relative to *https://hapicloud-dev.apigee.net/repository*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStays**](StayApi.md#getStays) | **GET** /stays/{propertyCode}/{reservationId} | Get stays by reservation number
[**searchStays**](StayApi.md#searchStays) | **POST** /stays/search | Get stays by date range. Paging is included. Maximum value of returned stays is 1000

# **getStays**
> \HapiRepository\Model\Stay getStays($property_code, $reservation_id)

Get stays by reservation number

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
$property_code = "property_code_example"; // string | Property code as designated in the PMS
$reservation_id = "reservation_id_example"; // string | PMS Reservation id

try {
    $result = $apiInstance->getStays($property_code, $reservation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StayApi->getStays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_code** | [**string**](../Model/.md)| Property code as designated in the PMS |
 **reservation_id** | [**string**](../Model/.md)| PMS Reservation id |

### Return type

[**\HapiRepository\Model\Stay**](../Model/Stay.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchStays**
> object searchStays($body)

Get stays by date range. Paging is included. Maximum value of returned stays is 1000

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
$body = new \HapiRepository\Model\SearchRequest(); // \HapiRepository\Model\SearchRequest | 

try {
    $result = $apiInstance->searchStays($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StayApi->searchStays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\HapiRepository\Model\SearchRequest**](../Model/SearchRequest.md)|  |

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

