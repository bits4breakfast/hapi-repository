# Hapi\RateApi

All URIs are relative to *https://hapicloud-dev.apigee.net/repository*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRate**](RateApi.md#getRate) | **GET** /rates/{propertyCode}/{rateCode} | Get rate by rateCode
[**getRates**](RateApi.md#getRates) | **POST** /rates/search | Get rates by date range. Paging is included. Maximum value of returned rates is 1000

# **getRate**
> \Hapi\Model\Rate getRate($property_code, $rate_code)

Get rate by rateCode

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = Hapi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Hapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Hapi\Api\RateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_code = "property_code_example"; // string | Property code as designated in the PMS
$rate_code = "rate_code_example"; // string | Rate code

try {
    $result = $apiInstance->getRate($property_code, $rate_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RateApi->getRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_code** | [**string**](../Model/.md)| Property code as designated in the PMS |
 **rate_code** | [**string**](../Model/.md)| Rate code |

### Return type

[**\Hapi\Model\Rate**](../Model/Rate.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRates**
> object getRates($body)

Get rates by date range. Paging is included. Maximum value of returned rates is 1000

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = Hapi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Hapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Hapi\Api\RateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Hapi\Model\SearchRequest(); // \Hapi\Model\SearchRequest | 

try {
    $result = $apiInstance->getRates($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RateApi->getRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Hapi\Model\SearchRequest**](../Model/SearchRequest.md)|  |

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

