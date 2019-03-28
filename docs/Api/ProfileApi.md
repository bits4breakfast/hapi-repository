# HapiRepository\ProfileApi

All URIs are relative to *https://hapicloud-dev.apigee.net/repository*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProfile**](ProfileApi.md#getProfile) | **GET** /profiles/{propertyCode}/{id} | Get profile by id
[**getProfiles**](ProfileApi.md#getProfiles) | **POST** /profiles/search | Get profiles by date range. Paging is included. Maximum value of returned profiles is 1000

# **getProfile**
> \HapiRepository\Model\Profile getProfile($property_code, $id)

Get profile by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = HapiRepository\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HapiRepository\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new HapiRepository\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_code = "property_code_example"; // string | Property code as designated in the PMS
$id = "id_example"; // string | PMS profile id

try {
    $result = $apiInstance->getProfile($property_code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->getProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_code** | [**string**](../Model/.md)| Property code as designated in the PMS |
 **id** | [**string**](../Model/.md)| PMS profile id |

### Return type

[**\HapiRepository\Model\Profile**](../Model/Profile.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProfiles**
> object getProfiles($body)

Get profiles by date range. Paging is included. Maximum value of returned profiles is 1000

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = HapiRepository\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HapiRepository\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new HapiRepository\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \HapiRepository\Model\SearchRequest(); // \HapiRepository\Model\SearchRequest | 

try {
    $result = $apiInstance->getProfiles($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->getProfiles: ', $e->getMessage(), PHP_EOL;
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

