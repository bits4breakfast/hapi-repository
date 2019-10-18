# HapiRepository\TransactionApi

All URIs are relative to *https://hapicloud-dev.apigee.net/repository*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchTransactions**](TransactionApi.md#searchTransactions) | **POST** /transactions/search | Get transactions by date range. Paging is included. The maximum number of returned transactions is 1000



## searchTransactions

> \HapiRepository\Model\RecordSet searchTransactions($repository_search_request)

Get transactions by date range. Paging is included. The maximum number of returned transactions is 1000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = HapiRepository\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HapiRepository\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new HapiRepository\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$repository_search_request = new \HapiRepository\Model\RepositorySearchRequest(); // \HapiRepository\Model\RepositorySearchRequest | 

try {
    $result = $apiInstance->searchTransactions($repository_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->searchTransactions: ', $e->getMessage(), PHP_EOL;
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

