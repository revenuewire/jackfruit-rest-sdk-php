# Swagger\Client\SubscriptionsApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLegacySubscriptionInfo**](SubscriptionsApi.md#getLegacySubscriptionInfo) | **GET** /subscriptions/legacy/{id} | 
[**getSubscriptionInfo**](SubscriptionsApi.md#getSubscriptionInfo) | **GET** /subscriptions/{id} | 
[**legacySubscriptionCancel**](SubscriptionsApi.md#legacySubscriptionCancel) | **PUT** /subscriptions/legacy/{transactionItemId}/cancel | 
[**subscriptionCancel**](SubscriptionsApi.md#subscriptionCancel) | **PUT** /subscriptions/{recurringTransactionItemId}/cancel | 


# **getLegacySubscriptionInfo**
> \Swagger\Client\Model\SubscriptionInfoResponse getLegacySubscriptionInfo($id)



Get Subscription Details for a transaction item

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
$id = 56; // int | Transaction item id

try {
    $result = $api_instance->getLegacySubscriptionInfo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getLegacySubscriptionInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Transaction item id |

### Return type

[**\Swagger\Client\Model\SubscriptionInfoResponse**](../Model/SubscriptionInfoResponse.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionInfo**
> \Swagger\Client\Model\SubscriptionInfoResponse getSubscriptionInfo($id)



Get Subscription Details

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
$id = 56; // int | Recurring Transaction item id

try {
    $result = $api_instance->getSubscriptionInfo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Recurring Transaction item id |

### Return type

[**\Swagger\Client\Model\SubscriptionInfoResponse**](../Model/SubscriptionInfoResponse.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **legacySubscriptionCancel**
> \Swagger\Client\Model\CancelProfileResponse legacySubscriptionCancel($transactionItemId)



Depricated, legacy cancal customer recurring profile

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
$transactionItemId = 56; // int | Transaction item id

try {
    $result = $api_instance->legacySubscriptionCancel($transactionItemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->legacySubscriptionCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionItemId** | **int**| Transaction item id |

### Return type

[**\Swagger\Client\Model\CancelProfileResponse**](../Model/CancelProfileResponse.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionCancel**
> \Swagger\Client\Model\CancelProfileResponse subscriptionCancel($recurringTransactionItemId)



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
    $result = $api_instance->subscriptionCancel($recurringTransactionItemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurringTransactionItemId** | **int**| Recurring transaction item id |

### Return type

[**\Swagger\Client\Model\CancelProfileResponse**](../Model/CancelProfileResponse.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

