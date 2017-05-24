# Swagger\Client\SubscriptionsApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subscriptionsRecurringTransactionItemIdCancelPut**](SubscriptionsApi.md#subscriptionsRecurringTransactionItemIdCancelPut) | **PUT** /subscriptions/{recurringTransactionItemId}/cancel | 


# **subscriptionsRecurringTransactionItemIdCancelPut**
> \Swagger\Client\Model\Response[] subscriptionsRecurringTransactionItemIdCancelPut($recurringTransactionItemId)



Cancal customer recurring profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JWT
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');
// Configure API key authorization: API-KEY
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$api_instance = new Swagger\Client\Api\SubscriptionsApi();
$recurringTransactionItemId = 56; // int | Recurring transaction item id

try {
    $result = $api_instance->subscriptionsRecurringTransactionItemIdCancelPut($recurringTransactionItemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsRecurringTransactionItemIdCancelPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurringTransactionItemId** | **int**| Recurring transaction item id |

### Return type

[**\Swagger\Client\Model\Response[]**](../Model/Response.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

