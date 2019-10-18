# HapiRepository\ProfileApi

All URIs are relative to *https://hapicloud-dev.apigee.net/repository*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProfile**](ProfileApi.md#getProfile) | **GET** /profiles/{propertyCode}/{id} | Get profile by id
[**searchProfiles**](ProfileApi.md#searchProfiles) | **POST** /profiles/search | Get profiles by date range. Paging is included. The maximum number of returned profiles is 1000



## getProfile

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
$property_code = 'property_code_example'; // string | Property code as designated in the PMS
$id = 'id_example'; // string | PMS profile id

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
 **property_code** | **string**| Property code as designated in the PMS |
 **id** | **string**| PMS profile id |

### Return type

[**\HapiRepository\Model\Profile**](../Model/Profile.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchProfiles

> \HapiRepository\Model\RecordSet searchProfiles($repository_search_request)

Get profiles by date range. Paging is included. The maximum number of returned profiles is 1000

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
$repository_search_request = new \HapiRepository\Model\RepositorySearchRequest(); // \HapiRepository\Model\RepositorySearchRequest | 

try {
    $result = $apiInstance->searchProfiles($repository_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->searchProfiles: ', $e->getMessage(), PHP_EOL;
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

